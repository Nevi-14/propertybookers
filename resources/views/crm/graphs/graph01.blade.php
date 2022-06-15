
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">{{ucwords(__('monthly recap report'))}}</h5>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">
              <strong>{{ucfirst(__('leads'))}}: {{ucfirst(__('from'))}}, {{@$thisYear}} - {{ucfirst(__('to'))}}, {{@$thisYear}}</strong>
            </p>

            <div class="chart">
              <!-- Sales Chart Canvas -->
              <div id="graph01" class="graph1 rounded" ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>

@section('script_graph01')
  <script src="{{asset('js/echarts-en.min.js')}}"></script>
  <script src="{{asset('echarts/theme/westeros.js')}}"></script> 
  @include('crm.graphs.graph01_js')
@endsection