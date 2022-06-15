@extends('installation.layout')

@section('content')
@include('installation.steps_style')  

<div class="card">
  <div class="card-body">
    <form action="{{url('/install/steps')}}" method="post" class=" mb-2">
      @csrf
      <div class="form-group">
        <input type="text" name="purchase_code" class="form-control" placeholder="Enter Your Valid Purchase Code To Continue" >
      </div>
      <button type="submit" class="btn btn-block  text-light installBtnBG"><i class="fas fa-laptop-code pr-2"></i> {{__('Start Installation')}}</button>
    </form>
    @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif
    @if (session()->has('message'))
    <div class="alert alert-danger" role="alert">
      {{ session()->get('message') }}
      
    </div>
    @endif
    <p>{{__('Your server details (All extenstions must have "True" status):')}}</p>
    <i class="fas fa-circle fa-xs text-{{ (phpversion() > '7.3') ? 'success' : 'danger' }}"></i> 
    {{__('PHP version:')}} {{phpversion()}} 
    @if (phpversion() < '7.3')
      <span class="text-danger">{{__('Your php version is not valid as per Devpremier CRM requirements.')}}</span>
    @endif
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('bcmath') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('BCMath')}} - {{ (extension_loaded('bcmath') == 1) ? 'True' : 'false' }}
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('Ctype') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('Ctype')}} - {{ (extension_loaded('Ctype') == 1) ? 'True' : 'false' }}
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('Fileinfo') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('Fileinfo')}} - {{ (extension_loaded('Fileinfo') == 1) ? 'True' : 'false' }}
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('JSON') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('JSON')}} - {{ (extension_loaded('JSON') == 1) ? 'True' : 'false' }}
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('Mbstring') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('Mbstring')}} - {{ (extension_loaded('Mbstring') == 1) ? 'True' : 'false' }}
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('OpenSSL') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('OpenSSL')}} - {{ (extension_loaded('OpenSSL') == 1) ? 'True' : 'false' }}
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('PDO') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('PDO')}} - {{ (extension_loaded('PDO') == 1) ? 'True' : 'false' }}
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('Tokenizer') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('Tokenizer')}} - {{ (extension_loaded('Tokenizer') == 1) ? 'True' : 'false' }}
    
    <br/><i class="fas fa-circle fa-xs text-{{ (extension_loaded('XML') == 1) ? 'success' : 'danger' }}"></i> 
    {{__('XML')}} - {{ (extension_loaded('XML') == 1) ? 'True' : 'false' }}
  </div>
</div>


@include('installation.steps_script')  
@endsection