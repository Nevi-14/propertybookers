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
                  <h3 class="card-title">{{__('Bulk Import Products')}}</h3>
                    <a type="button" class="btn btn-sm btn-info float-right mr-2" href="{{url('/product')}}">
                      <i class="fas fa-arrow-circle-left mr-1"></i>
                      {{__('Go Back')}}
                    </a>
                </div>
                <div class="card-body">
                  
                  <p class="font14 textLeft">
                    <strong>{{__("Instructions")}}:</strong> <br/>
                    {{__("bulkprod inst 1")}} <br/>
                    {{__("bulkprod inst 2")}} <br/>
                    {{__("bulkprod inst 3")}} <br/>
                    {{__("bulkprod inst 4")}} <br/>
                    {{__("bulkprod inst 5")}} <br/>
                    {{__("bulkprod inst 6")}} <br/>
                    {{__("bulkprod inst 7")}} <br/>
                    <a href="{{url('/public_files/sample_products.xlsx')}}" target="_blank">{{__('Sample Excel File')}}</a>
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
                          <th>name <span class="text-danger">*</span> </th>
                          <th>short_description </th>
                          <th>long_description </th>
                          <th>price </th>
                          <th>sku</th>
                          <th>discount </th>
                          <th>units </th>
                          <th>tax_type_1 </th>
                          <th>tax_type_2 </th>
                          <th>tax_type_3 </th>
                          <th>product_group_id </th>
                          <th>status </th>
                          <th>created_by_id </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{__('Product Name')}}</td>
                          <td>{{__('lorem ipsum')}}</td>
                          <td>{{__('lorem ipsum')}}</td>
                          <td>{{__('999')}}</td>
                          <td>{{__('DEV9797')}}</td>
                          <td>{{__('16')}}</td>
                          <td>{{__('4')}}</td>
                          <td>{{__('1')}}</td>
                          <td>{{__('2')}}</td>
                          <td>{{__('3')}}</td>
                          <td>{{__('3')}}</td>
                          <td>{{__('active')}}</td>
                          <td>{{__('1')}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <form action="{{url('product/import')}}" method="post" enctype="multipart/form-data">
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



