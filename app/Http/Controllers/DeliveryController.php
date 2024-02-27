<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\DeliveryProcess;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Notifications\DeliveryManNotification;
use App\Notifications\StatusNotification;
use Notification;


class DeliveryController extends Controller
{
    public function login()
    {
        return view('delivery.auth.login');
    }
    public function loginPost(Request $request)
    {

        $data = $request->all();


        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'active'])) {
            Session::put('user', $data['email']);
            request()->session()->flash('success', 'Successfully login');
            return redirect()->route('delivery.dashboard');
        } else {
            request()->session()->flash('error', 'Invalid email and password pleas try again!');
            return redirect()->route('delivery.login');
        }
    }

    public function register(){
        return view('delivery.auth.signup');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->role = 'delivery';
        $user->status = 'inactive';
        $user->save();


        $link = route('deliverymans');
        $data = [
            'title' => "New Delivery Man Signup!",
            'actionURL' => $link,
            'fas' => "fa-user",
        ];
        $users = User::where('role','admin')->where('status','active')->get();
        foreach($users as $user){
            Notification::send($user, new StatusNotification($data));
        }


        return redirect()->route('delivery.register')->withError('Request in Pending. Please wait for Confirm.');

    }

    public function deliverystatictics(){
        $users = User::where('role','delivery')->get();
        return view('backend.delivery.delivery-satictics',compact('users'));
    }


    public function logout()
    {
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success', 'Logout successfully');
        return redirect()->route('home');
    }

    public function deliverymans()
    {
        $users = DB::table('users')->where('role', 'delivery')->orderByDesc('id')->paginate(10);
        return view('backend.delivery.index', compact('users'));
    }

    public function adddeliveryman()
    {
        return view('backend.delivery.create');
    }

    public function choosedeliveryman()
    {
        $users = DB::table('users')->where('role', 'delivery')->where('status', 'active')->get();
        return view('backend.delivery.mans', compact('users'))->render();
    }



    // Auth
    public function dashboard()
    {
        $today = Carbon::today();
        $todaytotal = DeliveryProcess::where('deliveryman_id',Auth::id())->where('delivery_status','Delivered')->whereDate('created_at', $today)->count();
        $total = DeliveryProcess::where('deliveryman_id',Auth::id())->where('delivery_status','Delivered')->count();
        $processing = DeliveryProcess::where('deliveryman_id',Auth::id())->where('delivery_status','Confirm')->orWhere('delivery_status','Picked-Up')->orWhere('delivery_status','Out of Delivery')->count();



        return view('delivery.back.index',compact('todaytotal','total','processing'));
    }

    public function profile()
    {
        return view('delivery.back.profile');
    }

    public function changepassword()
    {
        return view('delivery.back.change-password');
    }

    public function changepasswordPost(Request $request)
    {
        $request->validate([
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password'
        ]);

        DB::table('users')->where('id', Auth::id())->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Password changed Successfully!');
    }

    public function DeliveryRequest()
    {
        $deliveries = DeliveryProcess::where('deliveryman_id', Auth::id())->orderBy('id', 'DESC')->get();
        return view('delivery.back.delivery-request', compact('deliveries'));
    }
    public function Deliverydetails($id)
    {
        $order = Order::find($id);
        return view('delivery.back.delivery-details', compact('order'));
    }

    public function changestate(Request $request)
    {

        $id = $request->id;
        $delivery = DeliveryProcess::find($id);
        if ($request->state == "Rejected") {
            DB::table('users')->where('id',$delivery->deliveryman_id)->update([
                'delivery_status' => null,
            ]);
            $delivery->delete();
        }
        else {
            $delivery->delivery_status = $request->state;
            $delivery->save();

            DB::table('users')->where('id', $delivery->deliveryman_id)->update([
                'delivery_status' => $request->state,
            ]);

            if ($request->state == 'Delivered') {
                Order::find($delivery->order_id)->update([
                    'status' => 'delivered'
                ]);
                DB::table('users')->where('id', $delivery->deliveryman_id)->update([
                    'delivery_status' => null,
                ]);
            }
        }
        return back();
    }

    // Notifications
    public function notifications()
    {
        return view('delivery.back.notifications');
    }
    public function notificationview(Request $request)
    {
        $notification = Auth()->user()->notifications()->where('id', $request->id)->first();
        if ($notification) {
            $notification->markAsRead();
            return redirect($notification->data['actionURL']);
        }
    }
    public function notificationdelete($id)
    {

        Auth::user()->notifications()
        ->where('id', $id) // and/or ->where('type', $notificationType)
        ->get()
        ->first()
        ->delete();

        return back();

    }
    // Notifications


    public function adddelivery()
    {
        $orders = DB::table('orders')->where('status', 'process')->get();
        $users = DB::table('users')->where('role', 'delivery')->where('status','active')->get();


        return view('backend.delivery.add-delivery', compact('orders', 'users'));
    }

    public function adddeliverymanfordelivery(Request $request)
    {

        $delivery = DeliveryProcess::where('order_id', $request->order_id)->where('deliveryman_id', $request->deliveryman_id)->get();

        if (count($delivery) == 0) {
            $deliveryprocess = new DeliveryProcess();
            $deliveryprocess->deliveryman_id = $request->deliveryman_id;
            $deliveryprocess->order_id = $request->order_id;
            $deliveryprocess->save();

            $link = route('delivery.details',$request->order_id);

            $data = [
                'title' => "New Delivery found!",
                'actionURL' => $link,
            ];
            $user = User::where('id',$request->deliveryman_id)->first();
            Notification::send($user, new DeliveryManNotification($data));
        }

        return back();
    }

    public function deliveryinprocess(){
        $deliveries = DeliveryProcess::where('delivery_status','!=',NULL)->where('delivery_status','!=','Delivered')->get();
        return view('backend.delivery.delivery-in-process',compact('deliveries'));
    }
    
    public function deliveryHome(){
        return view('delivery.home');
    }

    public function faq(){
        return view('delivery.FAQ');
    }

    public function aboutus(){
        return view('delivery.about-us');
    }

    public function invite(){
        return view('delivery.invite');
    }

    public function invite_email(){
        return view('delivery.invite_email');
    }



}
