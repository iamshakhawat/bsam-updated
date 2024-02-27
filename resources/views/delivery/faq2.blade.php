@extends('delivery.layout.main')
@section('title','About Us')


@section('content')
    <!-- Sign up to deliver by bicycle -->
    <section class="by-cycle">
        <div class="container mt-5">
            <h2 class="bc-head">Sign up to deliver by bicycle</h2>
            <div class="row mt-5 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">1. Apply for a background check and a right to work check</p>
                        <p class="bc-note">Note: Only complete this application if you’ve just signed up.</p>
                        <p class="">Uber will use your background check to assess suitability in meeting the
                            requirements to register an Uber Driver app account. Background checks
                            can take up to 14 business days to process. Your right to work check will
                            provide evidence of your right to work in Australia.
                        </p>
                        <p class="bc-text">To complete a background check application, tap the button below.</p>
                        <a class="bc-btn" href="#">Apply now</a>
                    </div>
                </div>
                <div class="col nt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">2. Take the bicycle safety test</p>                      
                        <p class="">To ensure that you feel safe on the road, you are required to complete a 
                            short test on bicycle safety before you can go online. You must answer all 
                            questions correctly.                            
                        </p>
                        <p class="bc-text">To complete the bicycle safety test for your state, tap the applicable l
                            ink below.</p>
                       <ul>
                           <li><a class="bc-btn" href="#">New South Wales</a></li>
                           <li><a class="bc-btn" href="#">Queensland</a></li>
                           <li><a class="bc-btn" href="#"> Victoria</a></li>
                           <li><a class="bc-btn" href="#">South Australia </a></li>
                           <li><a class="bc-btn" href="#">Western Australia</a></li>
                           <li><a class="bc-btn" href="#">Tasmania</a></li>
                           <li><a class="bc-btn" href="#">Australian Capital Territory</a></li>
                           <li><a class="bc-btn" href="#">Northern Territory</a></li>
                       </ul>
                    
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">3. Complete your profile</p>
                        <p class="">We will help guide you through the steps, so keep an eye on your inbox. For 
                            more information on how to get started, check out our Delivery 
                            Basics below.
                            
                        </p>
                        <a class="bc-btn" href="#">Delivery Basics</a>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">4. Food safety modules</p>
                        <p class="">New to food delivery? Access information to help you practise safe food 
                            delivery by completing the food safety education modules.
                            
                        </p>
                        <a class="bc-btn" href="#">Access the modules</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Required documents: Delivering by car, -->
    <section class="by-cycle">
        <div class="container mt-5">
            <h2 class="bc-head">Required documents: Delivering by car,
                scooter or motorbike</h2>
            <div class="row mt-5 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Front of the driver's licence</p>
                        <p class="bc-note">You'll need to hold a valid open Australian driver's licence for the vehicle 
                            type you want to deliver with. The licence must clearly show:
                            
                        </p>
                        <ul>
                            <li><a class="bc-btn" href="#">Your photo</a></li>
                            <li><a class="bc-btn" href="#">Your name</a></li>
                            <li><a class="bc-btn" href="#"> Your address</a></li>
                            <li><a class="bc-btn" href="#">The licence expiry date </a></li>
                            <li><a class="bc-btn" href="#">The class as open (provisional licences are not accepted)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col nt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Back of the driver’s licence</p>                      
                        <p class="">The back of your driver licence must clearly show:
                        </p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#">Issue date</a></li>
                            <li><a class="bc-btn list-style" href="#">Expiry date</a></li>
                            <li><a class="bc-btn list-style" href="#">Date of birth</a></li>
                            <li><a class="bc-btn list-style" href="#">Update to address sticker (if applicable</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Passport or birth certificate</p>
                        <p class="">The passport or birth certificate must clearly show:</p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#">Legal given names (first name and any middle names)</a></li>
                            <li><a class="bc-btn list-style" href="#">  Surname</a></li>
                            <li><a class="bc-btn list-style" href="#"> Birth country</a></li>
                            <li><a class="bc-btn list-style" href="#">Birth state</a></li>
                            <li><a class="bc-btn list-style" href="#"> Birth city</a></li>
                            <li><a class="bc-btn list-style" href="#"> Gender</a></li>
                            <li><a class="bc-btn list-style" href="#"> Date of birth</a></li>
                        </ul>
                        <p>If submitting a birth certificate, it must be Australian.</p>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Insurance</p>
                        <p class="">The provided insurance certificate of currency must clearly show:</p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#"> Your name as the policyholder or insured driver</a></li>
                            <li><a class="bc-btn list-style" href="#">Your vehicle details (registration, make, model and year)</a></li>
                            <li><a class="bc-btn list-style" href="#"> A valid expiry date</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Background checks -->
    <section class="by-cycle">
        <div class="container mt-5">
            <h2 class="bc-head">Background checks</h2>
                <div class=" mt-3">
                    <div class="bc-content">
                      <p class="bc-note">Partners are required to pass a criminal background check through National Crime Check (NCC). This 
                            can be done online and is usually processed within 14 days. You will receive a confirmation email and a 
                            copy of your results once your background check has been processed. No action is required from you 
                            after lodging – NCC will supply a copy of your results to Uber. More information is available by tapping 
                            the link below.
                            </p>
                            <a class="bc-btn list-style" href="#">Learn more</a>
                    </div>
                </div>
        </div>
    </section>
        <!-- Required documents: Delivering by bicycle -->
        <section class="by-cycle">
            <div class="container mt-5">
                <h2 class="bc-head">Required documents: Delivering by car,
                    scooter or motorbike</h2>
                <div class="row mt-5 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mt-3">
                        <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                        <div class="bc-content">
                            <p class="numbering mt-3">Passport or birth certificate</p>
                            <p class="bc-note">
                                The passport or birth certificate must clearly show:
                                </p>
                            <ul>
                                <li class="bc-btn">Legal given names (first name and any middle names)</li>
                                <li class="bc-btn" >Surname</li>
                                <li class="bc-btn" > Birth country</li>
                                <li class="bc-btn"> Birth state</li>
                                <li class="bc-btn"> Birth city</li>
                                <li class="bc-btn"> Gender</li>
                                <li class="bc-btn">  Date of birth</li>
                            </ul>
                            <p>If submitting a birth certificate, it must be Australian.</p>
                        </div>
                    </div>
                    <div class="col nt-3">
                        <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                        <div class="bc-content">
                            <p class="numbering mt-3">Secondary ID</p>                      
                            <p class="">We will need a copy of one of the following secondary identification types:
                            </p>
                            <ul>
                                <li class="bc-btn">Australian Driver’s Licence</li>
                                <li class="bc-btn" >  International Driver’s Licence</li>
                                <li class="bc-btn" >Australian or International Student ID</li>
                                <li class="bc-btn">  National ID (e.g. EU Card Passport</li>
                            </ul>
                            <p class="">Note:</p>
                            <ul>
                                <li class="bc-btn"> You'll also need to confirm that you have the right to work in Australia 
                                    and that you have access to Medicare or relevant health insurance.
                           </li>
                                <li class="bc-btn" > If your Secondary ID is not in English, it must be accompanied by a 
                                    NAATI-certified translation.</li>
                                
                            </ul>
                        </div>
                    </div>             
                </div>
            </div>
        </section>
    <!-- Required documents: Delivering by car,-->
    <section class="by-cycle">
        <div class="container mt-5">
            <h2 class="bc-head">Required documents: Delivering by car,
                scooter or motorbike</h2>
            <div class="row mt-5 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Front of the driver's licence</p>
                        <p class="bc-note">You'll need to hold a valid open Australian driver's licence for the vehicle 
                            type you want to deliver with. The licence must clearly show:
                            
                        </p>
                        <ul>
                            <li><a class="bc-btn" href="#">Your photo</a></li>
                            <li><a class="bc-btn" href="#">Your name</a></li>
                            <li><a class="bc-btn" href="#"> Your address</a></li>
                            <li><a class="bc-btn" href="#">The licence expiry date </a></li>
                            <li><a class="bc-btn" href="#">The class as open (provisional licences are not accepted)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col nt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Back of the driver’s licence</p>                      
                        <p class="">The back of your driver licence must clearly show:
                        </p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#">Issue date</a></li>
                            <li><a class="bc-btn list-style" href="#">Expiry date</a></li>
                            <li><a class="bc-btn list-style" href="#">Date of birth</a></li>
                            <li><a class="bc-btn list-style" href="#">Update to address sticker (if applicable</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Passport or birth certificate</p>
                        <p class="">The passport or birth certificate must clearly show:</p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#">Legal given names (first name and any middle names)</a></li>
                            <li><a class="bc-btn list-style" href="#">  Surname</a></li>
                            <li><a class="bc-btn list-style" href="#"> Birth country</a></li>
                            <li><a class="bc-btn list-style" href="#">Birth state</a></li>
                            <li><a class="bc-btn list-style" href="#"> Birth city</a></li>
                            <li><a class="bc-btn list-style" href="#"> Gender</a></li>
                            <li><a class="bc-btn list-style" href="#"> Date of birth</a></li>
                        </ul>
                        <p>If submitting a birth certificate, it must be Australian.</p>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Insurance</p>
                        <p class="">The provided insurance certificate of currency must clearly show:</p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#"> Your name as the policyholder or insured driver</a></li>
                            <li><a class="bc-btn list-style" href="#">Your vehicle details (registration, make, model and year)</a></li>
                            <li><a class="bc-btn list-style" href="#"> A valid expiry date</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Required documents: Delivering by car,-->
    <section class="by-cycle">
        <div class="container mt-5">
            <h2 class="bc-head">Required documents: Delivering by car,
                scooter or motorbike</h2>
            <div class="row mt-5 row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Front of the driver's licence</p>
                        <p class="bc-note">You'll need to hold a valid open Australian driver's licence for the vehicle 
                            type you want to deliver with. The licence must clearly show:
                            
                        </p>
                        <ul>
                            <li><a class="bc-btn" href="#">Your photo</a></li>
                            <li><a class="bc-btn" href="#">Your name</a></li>
                            <li><a class="bc-btn" href="#"> Your address</a></li>
                            <li><a class="bc-btn" href="#">The licence expiry date </a></li>
                            <li><a class="bc-btn" href="#">The class as open (provisional licences are not accepted)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col nt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Back of the driver’s licence</p>                      
                        <p class="">The back of your driver licence must clearly show:
                        </p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#">Issue date</a></li>
                            <li><a class="bc-btn list-style" href="#">Expiry date</a></li>
                            <li><a class="bc-btn list-style" href="#">Date of birth</a></li>
                            <li><a class="bc-btn list-style" href="#">Update to address sticker (if applicable</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Passport or birth certificate</p>
                        <p class="">The passport or birth certificate must clearly show:</p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#">Legal given names (first name and any middle names)</a></li>
                            <li><a class="bc-btn list-style" href="#">  Surname</a></li>
                            <li><a class="bc-btn list-style" href="#"> Birth country</a></li>
                            <li><a class="bc-btn list-style" href="#">Birth state</a></li>
                            <li><a class="bc-btn list-style" href="#"> Birth city</a></li>
                            <li><a class="bc-btn list-style" href="#"> Gender</a></li>
                            <li><a class="bc-btn list-style" href="#"> Date of birth</a></li>
                        </ul>
                        <p>If submitting a birth certificate, it must be Australian.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Required documents: Delivering by car,-->
    <section class="by-cycle mb-5">
        <div class="container mt-5">
            <h2 class="bc-head">Required documents: Delivering by car,
                scooter or motorbike</h2>
            <div class="row mt-5 row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Front of the driver's licence</p>
                        <p class="bc-note">You'll need to hold a valid open Australian driver's licence for the vehicle 
                            type you want to deliver with. The licence must clearly show:
                            
                        </p>
                        <ul>
                            <li><a class="bc-btn" href="#">Your photo</a></li>
                            <li><a class="bc-btn" href="#">Your name</a></li>
                            <li><a class="bc-btn" href="#"> Your address</a></li>
                            <li><a class="bc-btn" href="#">The licence expiry date </a></li>
                            <li><a class="bc-btn" href="#">The class as open (provisional licences are not accepted)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col nt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Back of the driver’s licence</p>                      
                        <p class="">The back of your driver licence must clearly show:
                        </p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#">Issue date</a></li>
                            <li><a class="bc-btn list-style" href="#">Expiry date</a></li>
                            <li><a class="bc-btn list-style" href="#">Date of birth</a></li>
                            <li><a class="bc-btn list-style" href="#">Update to address sticker (if applicable</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="bc-img"> <img src="Images/icon1.png" alt="icon" > </div>
                    <div class="bc-content">
                        <p class="numbering mt-3">Passport or birth certificate</p>
                        <p class="">The passport or birth certificate must clearly show:</p>
                        <ul>
                            <li><a class="bc-btn list-style" href="#">Legal given names (first name and any middle names)</a></li>
                            <li><a class="bc-btn list-style" href="#">  Surname</a></li>
                            <li><a class="bc-btn list-style" href="#"> Birth country</a></li>
                            <li><a class="bc-btn list-style" href="#">Birth state</a></li>
                            <li><a class="bc-btn list-style" href="#"> Birth city</a></li>
                            <li><a class="bc-btn list-style" href="#"> Gender</a></li>
                            <li><a class="bc-btn list-style" href="#"> Date of birth</a></li>
                        </ul>
                        <p>If submitting a birth certificate, it must be Australian.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('css')
        <style>
            body{
                background: #ffffff !important;
            }
        </style>
    @endpush
@endsection