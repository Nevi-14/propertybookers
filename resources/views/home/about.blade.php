@extends('layouts.main')

@section('content')






<!-- Parallax Picture Background -->

<div class="parallax-contaier">
    <!--{{asset('images/banner.jpg')}} -->
    <div class="parallax-window" data-parallax="scroll" data-z-index="1"
        data-image-src="{{asset('images/miami.jpg')}}">


        <p id="main-header-title" class="text-center">

        Your benefit is our starting point

        </p>


        </p>

        <span id="info-banner" valign="bottom">Call now! +1 (609)549-8014</span>

    </div>

</div>
<!-- END Parallax Picture Background -->


<div class="container">
  
<div class="row">
        <div class="col-12 col-lg-12">
        <div class="card-header bg-transparent">
                    <h1 class="title"> Welcome to Property Bookers! </h1>
                </div>
        <div class="card mb-3 border-0" >







  <div class="row no-gutters">

    <div class="col-md-6">
      <div class="card-body">


<div class="card  mb-2">



<div class="card-body">
<h5 class="card-title">Mission </h5>

<p>
Offer high-quality standardized services and accessible prices to our clients, satisfying their demands. Also, to help increase the value of labor in metro and rural areas and labor supply; generating a high social impact in many different positive ways.</p> 
</div>

</div>




<div class="card  mb-2">



<div class="card-body">
<h5 class="card-title">Vision</h5>

<p>
Becoming the number one outsourcing Real Estate service provider. Also to innovate and generate a positive impact, in the market.</p> 
</div>

</div>




<div class="card  mb-2">



<div class="card-body">
<h5 class="card-title">Benefits</h5>

<ul>

<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Affordable Rates.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Operational Cost Reduction.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Prospects Volume increase.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Know-How.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Marketing Consultations for FREE.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Sales Funnels and Lead Generator.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Paypal Credit (6 months).</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Tax Reductions.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Short term Investment: ROI fast.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>Communication Channels: Daily and weekly KPIs report, follow-ups, meetings, ongoing coaching.</a></li>
<li><a href=""><i class="fas fa-angle-right text-info mr-2"></i>3-month commitment.</a></li>

</ul>
</div>

</div>






      </div>
    </div>
    <div class="col-md-6">
      <img class="w-100 p-4" style="height:60%" src="{{asset('images/about.jpg')}}" class="card-img" alt="...">
    </div>
  </div>
</div>





        </div>
    </div>

    
    
</div>




@endsection

@push('scripts')



@endpush