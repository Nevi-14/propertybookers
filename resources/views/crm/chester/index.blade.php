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
<div class="col-12 mx-auto my-4">
  <h2 class="text-bold text-info ml-2">WHOLESALING SOLUTIONS</h2>
</div>
<div class="col-12 col-md-2 ">

<ul class="list-group">
  <li class="list-group-item "><span class="text-info text-bold text-uppercase">Total Leads</span><span class="badge badge-info float-right "><span class="number">{{$total}}</span></span></li>
  <li class="list-group-item"><span class="text-info text-bold text-uppercase">New Leads</span><span class="badge badge-info float-right"><span class="number">{{$new}}</span></span></li>
  <li class="list-group-item"><span class="text-info text-bold text-uppercase">In Progress</span><span class="badge badge-info float-right"><span class="number">{{$inProgress}}</span></span>
</li>
  <li class="list-group-item"><span class="text-info text-bold text-uppercase">Follow up</span><span class="badge badge-info float-right"> <span class="number">{{$followUp}}</span></span>
</li>
  <li class="list-group-item"><span class="text-info text-bold text-uppercase">Closed Leads</span><span class="badge badge-info float-right"> <span class="number">{{$closed}}</span></span></li>
</ul>

</div>

<div class="col-12 col-md-10">
<div class="row">



</div>


<div class="card ">

<div class="card-body card-table  bg.info">

    <table id="leadsTable" class="table  table-borderless ">
      <thead>
        <tr>

          <th>{{__('ID')}}</th>
          <th>{{__('Name')}}</th>

          <th>{{__('Sales Agent')}}</th>
          <th>{{__('Team')}}</th>
          <th>{{__('Status')}}</th>


          <th>{{__('Created At')}}</th>
          <th>{{__('Actions')}}</th>
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
  </section>




  @include('crm.chester.create')
  @include('crm.team.create')
  @include('crm.status.create')
  @include('crm.states.create')
  @include('crm.chester.filter')



</div>
@endsection

@section('scripts')
@include('crm.chester.index_js')
@endsection