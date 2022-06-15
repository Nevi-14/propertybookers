@extends('crm.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="card card-secondary">
        <div class="card-header ">
          <div class="card-title card-primary">{{__('Mail Settings')}}</div>
        </div>
        <div class="card-body">

          <div class="card-body bg-light-gray">
            <form @if (@$smtp) action="{{url('office/smtp', $smtp)}}" @else action="{{url('office/smtp/store')}}" @endif method="post">
            
              @csrf
              @if (@$smtp)
                @method('PUT')
              @endif
  
              <label for="">{{__('SMTP Settings')}}</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">{{__('MAIL_DRIVER')}}</label>
                    <input type="text" class="form-control form-control-sm" name="mail_driver"  value="{{@$smtp->mail_driver}}" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">{{__('MAIL_ENCRYPTION')}}</label>
                    <input type="text" class="form-control form-control-sm" name="mail_encryption" value="{{@$smtp->mail_encryption}}" />
                </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">{{__('HostName')}} 
                      <span data-toggle="tooltip" data-title="{{__('hostnametooltip')}}">
                        <i class="fas fa-question-circle"></i>
                      </span>
                    </label>
                    <input type="text" name="mail_host" value="{{@$smtp->mail_host}}" class="form-control form-control-sm" required />
                  </div>
                </div>
  
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">{{__('Username')}}
                      <span data-toggle="tooltip" data-title="{{__('mailUsername')}}">
                        <i class="fas fa-question-circle"></i>
                      </span>
                    </label>
                    <input type="text" name="mail_username" value="{{@$smtp->mail_username}}" class="form-control form-control-sm" required />
                  </div>
                </div>
  
                <div class="col-md-6">
                  <label for="">{{__('Port')}}
                    <span data-toggle="tooltip" data-title="{{__('porttooltip')}}">
                      <i class="fas fa-question-circle"></i>
                    </span>
                  </label>
                  <div class="form-group">
                    <input type="text" name="mail_port" value="{{@$smtp->mail_port}}" class="form-control form-control-sm" required />
                  </div>
                </div>
  
                <div class="col-md-6">
                  <label for="">{{__('Password')}}
                    <span data-toggle="tooltip" data-title="{{__('mailPasswordTooltip')}}">
                      <i class="fas fa-question-circle"></i>
                    </span>
                  </label>
                  <div class="form-group">
                    <input type="text" name="mail_password" value="{{@$smtp->mail_password}}" class="form-control form-control-sm" required />
                  </div>
                </div>
                
                <div class="col-md-12">
                  <input type="submit" value="{{__('Save SMTP Setting')}}" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-12 mt-2">
            <form action="{{url('office/smtp/cron_status')}}" method="post" id="cron_status_form">
              @csrf
              <label class="cl-switch cl-switch-green">
                <span class="label" for="cron_status">{{__('Turn on CronJob')}}</span>
                <input type="checkbox" name="cron_status" id="cron_status" value="yes" 
                @if ($cron_status->field_value == '1')
                    checked
                @endif
                >
                <span class="switcher"></span>
              </label>
            </form>
            <p><b>{{__('Note')}}: </b>{{__('mailNote')}}</p>
            <code>
              cd /path-to-project-root-directory/ && php artisan schedule:run >/dev/null 2>&1
            </code>
          </div>
          {{-- !SECTION SMTP ENDS HERE --}}
        </div>
      </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
$(document).ready(()=>{
  $('#cron_status').on('change', ()=>{
    $('#cron_status_form').submit();
  });
});
</script>    
@endsection