@extends('crm.layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('crm.layouts.breadcrumb')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">

            <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">{{__('Import Bulk Users')}}</h3>
                    <a type="button" class="btn btn-sm btn-info float-right mr-2" href="{{url('/user')}}">
                      <i class="fas fa-arrow-circle-left mr-1"></i>
                      {{__('Go Back')}}
                    </a>
                </div>
                <div class="card-body">
                  
                  <p class="font14 textLeft">
                    <strong>{{__("Instructions")}}:</strong> <br/>
                    {{__("userImportNote1")}} <br/>
                    {{__("userImportNote2")}} <br/>
                    {{__("userImportNote3")}} <br/>
                    {{__("userImportNote4")}} <br/>
                    {{__("userImportNote5")}} <br/>
                    <a href="{{url('/public_files/sample_users.xlsx')}}" target="_blank">{{__('Sample Excel File')}}</a>
                  </p>
                  @if($errors)
                    <table class="table table-danger">
                      @foreach ($errors->all() as $error)
                          <tr>
                            <td>{{ $error }}</td>
                          </tr>
                      @endforeach
                    </table>
                  @endif
                  @if(Session::has('message'))
                    <div class="alert alert-{{session('alert-type')}}" role="alert">
                      {{ session('message') }}
                    </div>
                  @endif
                  
                  <div class="table-responsive">
                    <label for="">{{__('Dummy Content and Order of the Excel Data')}}</label>
                    <table class="table table-bordered text-nowrap">
                      <thead>
                        <tr>
                          <th>{{__('Name')}}</th>
                          <th>{{__('Email')}} <span class="text-danger">*</span></th>
                          <th>{{__('Password')}} <span class="text-danger">*</span></th>
                          <th>{{__('Role ID')}} <span class="text-danger">*</span></th>
                          <th>{{__('Phone')}}</th>
                          <th>{{__('Status')}} <span class="text-danger">*</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{__('John Doe')}}</td>
                          <td>{{__('johndoe@example.com')}}</td>
                          <td>{{__('password')}}</td>
                          <td>{{__('1')}}</td>
                          <td>{{__('9888766665')}}</td>
                          <td>{{__('active')}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <form action="{{url('user/import')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">{{__('Select an excel file(xlsx format)')}}</label>
                      <br>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="{{__('Upload')}}" class="btn btn-info">
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection



