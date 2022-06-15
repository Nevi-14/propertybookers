
<!-- Modal -->
<div class="modal fade" id="filter" tabindex="-1" aria-labelledby="filter" aria-hidden="true">
<div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-body">
      <div class="row mb-2">
          <div class="col-md-4">
            <label for="">{{__('Date Range')}}</label>
            <select name="date_sort" id="date_sort" class="form-control form-control-sm select2">
              @if (@$request->date_sort == null)
              <option></option>
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


          <div class="col-md-4">
            <label for="">{{__('Lead Team')}}</label>
            <div class="input-group">
              <select name="team_id" id="team_filter" class="form-control form-control-sm select2">
              <option></option>
              @foreach($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>

                @endforeach
              </select> 
            </div>
          </div>
          <div class="col-md-4">
            <label for="">{{__('Lead Owner')}}</label>
            <div class="input-group">
              <select name="owner_id" id="owner_id" class="form-control form-control-sm select2">
              <option></option>
              @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>

                @endforeach
              </select> 
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <label><span class="text-danger"></span> {{__('Acquisition Manager')}}</label>
            <div class="form-group">
                <select name="acquisition_id" id="acquisition_id" class="form-control form-control-sm select2">
                <option></option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>

                @endforeach
                </select>
            </div>
          </div>   
          


          <div class="col-md-4">
            <label for="">{{__('Lead Status')}}</label>
            <div class="input-group">
              <select name="lead_status_id" id="lead_status_id" class="form-control form-control-sm select2">
              <option></option>
              @foreach($statuses as $status)
                <option value="{{$status->id}}">{{$status->name}}</option>

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
        
   
                 
                    </div>
                   

      </div>

 
    </div>
  </div>
</div>


