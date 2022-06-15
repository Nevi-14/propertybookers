@extends('layouts.main')

@section('content')





<!-- Parallax Picture Background -->

<div class="parallax-contaier">
    <!--{{asset('images/banner.jpg')}} -->
    <div class="parallax-window" data-parallax="scroll" data-z-index="1"
        data-image-src="{{asset('images/services.jpg')}}">


        <p id="main-header-title" class="text-center">

            Affordable rates with ROI.

        </p>


        </p>

        <span id="info-banner" valign="bottom">Call now! +1 (609)549-8014</span>

    </div>

</div>
<!-- END Parallax Picture Background -->


<div class="container">
    
<div class="row ">

    <div class="col-12 d-flex justify-content-center my-5">
    <h1 class=" title ">WHOLESALING | NEARSHORE SOLUTIONS </h1>
    </div>
    <div class="col-12 d-flex justify-content-center">
    
        <iframe src="https://www.youtube.com/embed/D8rsmqesHdI?autoplay=1&cc_load_policy=1" width="80%"
            height="400px" frameborder="0" allowfullscreen></iframe>
    </div>
    </div>
    
    
    
    
    
    <div class="row row-separator">
    
    
    <div class="col-12 col-md-4  mb-3">
    
    <div class="card border-0 card-info mx-auto" >
      <img class="rounded-circle" src="{{asset('images/listing.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Listing agreement booster</h5>
        <p class="card-text">Aggressive platform to increase the realtor’s property listing portfolio and sales. Prospect Generation and closing.</p>
    
      </div>
    </div>
    
    </div>
    <div class="col-12 col-md-4  mb-3">
    
    <div class="card border-0 card-info mx-auto" >
      <img class="rounded-circle" src="{{asset('images/RE.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RE Investors platform </h5>
        <p class="card-text">We offer a successful and proven platform, to boost the purchase of properties through marketing and sales funnels. Prospecting, CPAs, After Repair Value.</p>
    
      </div>
    </div>
    
    </div>
    <div class="col-12 col-md-4  mb-3">
    
    <div class="card border-0 card-info mx-auto" >
      <img class="rounded-circle" src="{{asset('images/REM.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Real estate marketing services </h5>
        <p class="card-text">Branding | WEB development | Digital Marketing.</p>
    
      </div>
    </div>
    
    </div>
    
    </div>
    
    
    
    <div class="row row-separator">
    
    <div class="col-12">
    
    <div class="col-12 d-flex justify-content-center">
    <h1 class=" title  mb-5">Outsourcing Brokerage Services </h1>
    </div>
    
    </div>
    <div class="col-12 col-md-4  mb-3">
    
    <div class="card border-0 mx-auto"style="width: 18rem;" >
      <img class="w-100" src="{{asset('images/RH.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Human Resources $25 / hour</h5>
        <p class="card-text">Recruitment and Interviewing services. You can rely on our selection of personnel, hiring, recruitment, and legal support.</p>
    
      </div>
    </div>
    
    </div>
    <div class="col-12 col-md-4  mb-3">
    
    <div class="card border-0 mx-auto"style="width: 18rem;" >
      <img class="w-100" src="{{asset('images/training.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Training $25 / hour</h5>
        <p class="card-text">We believe in Motivation, not subordination. Our practical training plus the "we culture" and "just do it methodology", allow our trainees to learn fast and appropriate. Tackling the issue and not the individual.</p>
    
      </div>
    </div>
    
    </div>
    <div class="col-12 col-md-4  mb-3">
    
      
    <div class="card border-0 mx-auto"style="width: 18rem;" >
      <img class="w-100" src="{{asset('images/QA.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Quality Assurance $25 / hour</h5>
        <p class="card-text">We provide our agents with quality assurance insights and tweaks they can apply to their interactions with prospects. Coaching and progress weekly follow-ups.</p>
    
      </div>
    </div>
    
    </div>
    
    </div>
    
    
    
    
    
    
    
    <div class="row row-separator">
    
    <div class="col-12 d-flex justify-content-center my-5">
    <h1 class=" title ">Our Partners</h1>
    </div>

<div class="partner-images">
      
<img class="partner-2" src="{{asset('images/awol.png')}}" alt="">
    <img   class="partner" src="{{asset('images/nomadux.png')}}" alt="">
</div>
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="row row-separator ">
    
    <div class="col-12">
    
    <div class="col-12">
    <h1 class=" title ">Book and appointment</h1>
    </div>
    
    </div>
    <div class="col-12 col-md-4  mb-3" mx-auto>
    
    <div class="card border-0 mx-auto"style="width: 18rem;" >

      <img class="w-100" src="{{asset('images/housethumb.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">INVESTORS PLATFORM</h5>
        <p>1 h | $18</p>
        <a href="#" class="btn btn-secondary">Book now</a>
      </div>
    </div>
    
    </div>
    <div class="col-12 col-md-4  mb-3">
    
    <div class="card border-0 mx-auto "style="width: 18rem;" >
      <img class="w-100" src="{{asset('images/hands.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LISTING AGREEMENT BOOSTER</h5>
        <p>1 h | $18</p>
        <a href="#" class="btn btn-secondary">Book now</a>
    
      </div>
    </div>
    
    </div>
    <div class="col-12 col-md-4  mb-3">
    
    <div class="card border-0 mx-auto "style="width: 18rem;" >
      <img class="w-100" src="{{asset('images/increase.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">BRANDING | WEB DEVELOPMENT | MARKETING</h5>
        <p>  <p>1 h | from $900</p></p>
        <a href="#" class="btn btn-secondary">Book now</a>
    
      </div>
    </div>
    
    </div>
    
    </div>
    
    
</div>




@endsection

@push('scripts')



@endpush