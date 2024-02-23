<select name="deliveryman" id="" class="form-control">
    <option value="">Select Delivery Man</option>
    @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
    @endforeach
</select>
