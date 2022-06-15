@extends('crm.layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
  <div class="content-wrapper">
    @include('crm.layouts.breadcrumb')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">{{__('Manage Leads')}}</h3>
                  <a type="button" class="btn btn-sm btn-primary float-right" href="{{url('lead/create')}}">{{__('New Lead')}}</a>
                  <a type="button" class="btn btn-sm btn-info float-right mr-2" href="{{url('lead/import')}}">
                    <i class="fas fa-cloud-upload-alt mr-1"></i>
                    {{__('Import Bulk Leads')}}
                  </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="col-md-3">
                      <label for="">{{__('Date Range')}}</label>
                      <select name="date_sort" id="date_sort" class="form-control form-control-sm">
                        @if (@$request->date_sort == null)
                          <option selected disabled>{{__('Select an option')}}</option>
                        @endif
                        @php
                            $status_types = [
                              'custom',
                              'today',
                              'yesterday',
                              'this_week',
                              'last_week',
                              'this_month',
                              'last_month',
                              'last_3_months',
                              'last_6_months',
                              'this_year',
                              'last_year'
                              ]
                        @endphp
                        @foreach ($status_types as $status)
                        @if ($status == @$request->date_sort)
                              <option value="{{$status}}" selected>{{underscoreToCamelCase($status)}}</option>
                            @else
                              <option value="{{$status}}">{{underscoreToCamelCase($status)}}</option>
                            @endif
                        @endforeach
                      </select> 
                    </div>

                    <div class="col-md-3">
                      <label for="">{{__('Lead Owner')}}</label>
                      <div class="input-group">
                        <select name="owner_id" id="owner_id" class="form-control form-control-sm">
                          @if (@$request->owner_id == null)
                            <option selected disabled>{{__('Select an option')}}</option>
                          @endif
                          @foreach ($lead_owners as $lead_owner)
                            @if ($lead_owner->id == @$request->owner_id)
                              <option value="{{$lead_owner->id}}" selected>{{$lead_owner->name}} | {{$lead_owner->email}}</option>
                            @else
                              <option value="{{$lead_owner->id}}">{{$lead_owner->name}} | {{$lead_owner->email}}</option>
                            @endif
                          @endforeach
                        </select> 
                      </div>
                    </div>
                    <div class="col-md-3">
                      <label for="">{{__('Lead Sources')}}</label>
                      <div class="input-group">
                        <select name="lead_source_id" id="lead_source_id" class="form-control form-control-sm">
                          @if (@$request->lead_source_id == null)
                            <option selected disabled>{{__('Select an option')}}</option>
                          @endif
                          @foreach ($lead_sources as $lead_source)
                            @if ($lead_source->id == @$request->lead_source_id)
                              <option value="{{$lead_source->id}}" selected>{{$lead_source->name}}</option>
                            @else
                              <option value="{{$lead_source->id}}">{{$lead_source->name}}</option>
                            @endif
                          @endforeach
                        </select> 
                      </div>
                    </div>
                    <div class="col-md-3">
                      <label for="">{{__('Lead Status')}}</label>
                      <div class="input-group">
                        <select name="lead_status_id" id="lead_status_id" class="form-control form-control-sm">
                          @if (@$request->lead_status_id == null)
                            <option selected disabled>{{__('Select an option')}}</option>
                          @endif
                          @foreach ($lead_statuses as $lead_status)
                            @if ($lead_status->id == @$request->lead_status_id)
                              <option value="{{$lead_status->id}}" selected>{{$lead_status->name}}</option>
                            @else
                              <option value="{{$lead_status->id}}">{{$lead_status->name}}</option>
                            @endif
                          @endforeach
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div
                  @if (@$request->date_sort == 'custom')
                    class="row col-md-3 d-show"
                  @else 
                    class="row col-md-3 d-hide"  
                  @endif
                  id="date_range_col">
                    <div class="form-group">
                      <label>{{__('Date range')}}:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                        <input type="text" name="custom_range" class="form-control form-control-sm" id="custom_range" value="{{@$request->custom_range}}">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-3 col-sm-12">
                      @php
                          $tempratures = ['Hot','Warm','Cold'];
                      @endphp  
                      <div class="form-group">
                        <label>{{__('Lead Temprature')}}</label>  
                        <select name="lead_temprature" id="lead_temprature" class="form-control form-control-sm">
                          <option selected disabled>{{__('Select an option')}}</option>
                          @foreach ($tempratures as $temp)
                              <option value="{{$temp}}">{{$temp}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
    
                    <div class="col-md-3 col-sm-12">  
                      @php
                          $score = ['10','9','8','7','6','5','4','3','2','1','0'];
                      @endphp 
                      <div class="form-group">
                        <label>{{__('Lead Score')}}</label>  
                        <select name="score" id="score" class="form-control form-control-sm">
                          <option selected disabled>{{__('Select an option')}}</option>
                          @foreach ($score as $item)
                              <option value="{{$item}}">{{$item}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>  
    
                    <div class="col-md-3 col-sm-12">
                      <label><span class="text-danger"></span> {{__('Prospect Status')}}</label>
                      <div class="form-group">
                          <select name="prospect_status" id="prospect_status" class="form-control form-control-sm">
                              <option selected disabled>{{__('Select an option')}}</option>
                              
                              @foreach (config('constants.PROSPECTS') as $item)
                                  <option defaultValue="{{$item}}">{{$item}}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>   
                    
                    <div class="col-md-3">
                      <div class="button-group mt-4">
                        <button type="button" name="filter" id="filter" class="btn btn-primary">{{__('Filter')}}</button>
                        <button type="button" name="refresh" id="refresh" class="btn btn-default">{{__('Refresh')}}</button>
                      </div>
                  </div>
                  </div>

                  <div class="table-responsive">
                  <table 
                  id="leadsTable"
                  class="table table-bordered table-striped nowrap display">
                    <thead>
                    <tr>
                      <th>{{__('ID')}}</th>
                      <th>{{__('Name')}}</th>
                      <th>{{__('Email')}}</th>
                      <th>{{__('Phone')}}</th>
                      <th>{{__('Lead Owner')}}</th>
                      <th>{{__('Source')}}</th>
                      <th>{{__('Status')}}</th>
                      <th>{{__('Prospect')}}</th>
                      <th>{{__('Temp')}}</th>
                      <th>{{__('Score')}}</th>
                      <th>{{__('Created At')}}</th>
                      <th>{{__('Actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>{{__('ID')}}</th>
                      <th>{{__('Name')}}</th>
                      <th>{{__('Email')}}</th>
                      <th>{{__('Phone')}}</th>
                      <th>{{__('Lead Owner')}}</th>
                      <th>{{__('Source')}}</th>
                      <th>{{__('Status')}}</th>
                      <th>{{__('Prospect')}}</th>
                      <th>{{__('Temp')}}</th>
                      <th>{{__('Score')}}</th>
                      <th>{{__('Created At')}}</th>
                      <th>{{__('Actions')}}</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('scripts')
  @include('crm.lead.index_js')
@endsection



