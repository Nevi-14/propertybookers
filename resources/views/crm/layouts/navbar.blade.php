  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-dark navbar-gray">
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" ><i class="fas fa-bars  pt-1"></i></a>
      </li>
      <li class="nav-item">
        <a type="button" class="nav-link" href="{{url()->previous()}}">
          <i class="fas fa-arrow-circle-left mr-1"></i>
          {{ ucwords(__('previous page')) }}
        </a>
      </li>

      
    </ul>

    
    <ul class="navbar-nav ml-auto">
      {{-- Language Selector --}}
      <i class="fa fa-language text-white" style="font-size: 33px;" data-toggle="tooltip" data-placement="top" title="Select Language of your choice from the dropdown!"></i>

      <li class="nav-item nav-link d-none d-sm-inline-block">
        <form action="{{url('lang')}}" method="get">
          @csrf
          @php
              $langs = config('constants.LOCALES');
          @endphp
            
          <select name="lang_code" class="" onchange='this.form.submit()'>
            @foreach ($langs as $lang)
                @if ($lang == session('applocale'))
                  <option value="{{$lang}}" selected>{{$lang}}</option>
                @else
                  <option value="{{$lang}}">{{$lang}}</option>
                @endif
            @endforeach
          </select>
          <noscript><input type="submit" value="Submit"></noscript>
        </form>
      </li>


      <!-- Notifications Dropdown Menu -->
      @if(Session::get('reminders') != null)
          @php
          $reminders_count = Auth::user()->reminder->count();
          $appointmets_count = Auth::user()->appointments->count();
              $reminder_count =   $reminders_count + $appointmets_count ;
              $reminders = Auth::user()->reminder;
              $appointments = Auth::user()->appointments;
          @endphp    
      @else 
          @php
              $reminder_count = 0;
              $reminders = null;
          @endphp    
      @endif

      <li class="nav-item dropdown">
        
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell pt-1"></i>
          <span class="badge badge-primary navbar-badge text-white text-bold">
            {{$reminder_count}}
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">{{$reminder_count}} Notifications</span>
          <div class="dropdown-divider"></div>
          <div class="bg-dark text-info w-100"><small class="ml-2">Reminders</small></div>
          <div class="dropdown-divider"></div>
          @if ($reminders != null)
            @foreach ($reminders as $reminder)
              <a href="{{url('/reminder')}}" class="dropdown-item">
                {{ Str::limit($reminder->description, 28, '...') }}
                <span class="float-right text-muted text-sm">{{ $reminder->time }}</span>
              </a>                
            @endforeach 
          @endif
          <div class="dropdown-divider"></div>
          <div class="bg-dark text-info w-100"><small class="ml-2">Property Tracker</small></div>
          <div class="dropdown-divider"></div>
          @if ($appointments != null)
            @foreach ($appointments as $appointment)
              <a href="{{url('/reminder')}}" class="dropdown-item">
                {{ Str::limit($appointment->subject, 28, '...') }}
                <span class="float-right text-muted text-sm">{{ $appointment->time }}</span>
              </a>                
            @endforeach 
          @endif

          


          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li  class="nav-item dropdown pt-2 ml-3">
        <a href="{{url('/refresh')}}">
          <i class="fa fa-sync-alt text-white"  data-toggle="tooltip" data-placement="top" title="Refresh Notifications"></i>
        </a>
      </li>
            {{-- Username and ID --}}
      <li class="nav-item nav-link d-none d-sm-inline-block">
          {{Str::upper(__('user id'))}} - {{Auth::user()->id}}
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/user/profile')}}" class="nav-link">
          {{Auth::user()->name}}
        </a>
      </li>

      {{-- Settings Dropdown --}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-users-cog pt-1" href="#"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header" >{{ ucwords(__('user settings')) }}</span>
            <div class="dropdown-divider"></div>
            <a href="{{url('/user/profile')}}" class="dropdown-item">
              <i class="fas fa-user"></i> {{ ucwords(__('user profile')) }}
            </a>

            <div class="dropdown-divider"></div>
            <a href="#"  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> {{ Str::ucfirst(__('logout')) }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" class="d-hide" method="POST">
                @csrf
            </form>
          </div>
      </li>



    </ul>
  </nav>
