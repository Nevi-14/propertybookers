
   @if(file_exists(STORAGE_PATH('INSTALLED')))

   @include('partials.header')





<!-- STARTS MAIN CONTAINER -->

<div id="content-wrap" class="container-fluid p-0 m-0">



    @yield('content')



    @include('partials.contact')

  



</div>



<!-- STARTS FOOTER -->



<div id="footer">Copyright © 2019 Property Bookers - All rights reserved. </div>







</div>

@include('partials.footer')

@else
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('images/logo_small.png')}}">
        <title>{{config('app.name')}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
   

            <div class="content" >
                <div class="title m-b-md" >
                    @if ($logo == null)
                        <img style="display:block;margin: 0 auto;" src="{{asset('images/cover.png')}}" alt="crm-logo"  width="50%">
                    @else
                        <img  src="{{asset('storage/adminfiles/'.$logo)}}" alt="crm-logo"  width="350">
                    @endif
                    <h2 style="text-align:center">{{ Str::ucfirst(__('crm version')) }}</h2>
                    @if(!file_exists(STORAGE_PATH('INSTALLED')))
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <h5>{{ Str::ucfirst(__('Keep your purchase code handy for the next step!')) }}</h5>
                                <a href="{{url('/install')}}" class="btn btn-block rounded text-light installBtnBG" ><i class="fas fa-laptop-code pr-2"></i> {{Str::upper(__('install'))}}</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

   @endif
