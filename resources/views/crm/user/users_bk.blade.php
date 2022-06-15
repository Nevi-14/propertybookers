@extends('crm.layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

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
                  <h3 class="card-title">{{__('Manage Users')}}</h3>
                  @can('create-user', User::class)
                    <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#adduser">{{__('New User ')}}</button>
                    <a type="button" class="btn btn-sm btn-info float-right mr-2" href="{{url('user/import')}}">
                      <i class="fas fa-cloud-upload-alt mr-1"></i>
                      {{__('Import Bulk Users ')}}
                    </a>
                    
                  @endcan
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  
                  <p class="font14 textLeft">{{__("Note: Once you created an account with an email ID, it can't be changed. Email IDs are unique for users for the purpose of login.")}}
                  </p>
                    @if($errors)
                        @foreach ($errors->all() as $error)
                            <div class="text text-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                  <div class="table-responsive">  
                  <table 
                  {{-- id="staff_users"  --}}
                  class="table table-bordered table-striped data-table">
                    <thead>
                    <tr>
                      {{-- <th>{{__('ID')}}</th>
                      <th>{{__('Status')}}</th>
                      <th>{{__('Role (ID)')}}</th>
                      <th>{{__('Name')}}</th>
                      <th>{{__('Email')}}</th>
                      <th>{{__('Phone')}}</th>
                      <th>{{__('Actions')}}</th> --}}
                      <th>ID</th>
                      <th>Status</th>
                      <th>Role</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th width="100px">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>

                  </table>
                  
                </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>

{{-- All Modal Starts Here --}}
<div class="modal fade" id="adduser" tabindex="-1" user="dialog" aria-labelledby="adduserLabel" aria-hidden="true">
    <div class="modal-dialog" user="document">
      <div class="modal-content bg-light-gray">
        <div class="modal-header bg-gray">
          <h5 class="modal-title" id="adduserLabel">{{__('Add User')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('user/store')}}" method="POST">
            <div class="modal-body">
                @csrf
                <div class="row">
                  <div class="col-md-6 col-md-12">
                    <div class="form-group">
                      <label for="">{{__('Name')}}</label>
                      <input type="text" name="name" class="form-control" data-validation="length" data-validation-length="min2" required/>
                    </div>
                  </div>
                  <div class="col-md-6 col-md-12">
                    <div class="form-group">
                      <label for="">{{__('Email')}}</label>
                      <input type="email" name="email" class="form-control" data-validation="email" required/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-md-12">
                    <div class="form-group">
                      <label for="">{{__('Phone')}}</label>
                      <input type="number" name="phone" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-4 col-md-12">
                    <div class="form-group">
                      <label for="">{{__('Role')}}</label>
                      <select name="role_id" class="role_id form-control">
                        @foreach ($roles as $role)
                            @if ($role->default_role== 'yes')
                              <option value="{{$role->id}}" selected>{{$role->name}}</option>
                            @else 
                              <option value="{{$role->id}}">{{$role->name}}</option>  
                            @endif
                            
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-md-12">
                    <div class="form-group">
                      <label for="">{{__('Password')}}</label>
                      <input type="text" name="password" class="form-control" data-validation="length|strength" data-validation-strength="3" data-validation-length="min8" required/>
                    </div>
                  </div>
                  <label class="cl-switch cl-switch-green">
                    <span class="label" for="welcome_email">{{__('Send welcome email with login credentials')}}</span>
                    <input type="checkbox" name="welcome_email" id="welcome_email" value="yes" checked>
                    <span class="switcher"></span>
                  </label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                <button type="submit" class="btn btn-info">{{__('Add')}}</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'status', name: 'status'},
            {data: 'role_name', name: 'role'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
  @include('crm.user.users_js')
@endsection



