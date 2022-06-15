<!-- Modal -->
<div class="modal fade" id="appointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info text-uppercase text-bold" id="exampleModalLabel">appointments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{route('appointment.create',['property_tracker_id' => $propertyTracker->id] )}}"  enctype="multipart/form-data">
    @csrf

<div class="form-row">
<div class="form-group col-md-6">
  <div for="" class="mb-2">{{__('Subject')}}</div>
    <input name="subject" type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Appointment title" required autocomplete="off">
  </div>
  <div class="form-group col-md-6">
    <div for="" class="mb-2">{{__('Assigned to')}}</div>
      <select name="assigned_to" id="assigned_to" class="form-control select2" required>
      @foreach ($users as $user)
               <option value="{{$user->id}}">{{underscoreToCamelCase($user->name)}}</option>  
                        @endforeach
      </select>
    </div>

</div>

  <div class="form-row">

    <div class="form-group col-md-3">
    <div for="" class="mb-2">{{__('Type')}}</div>
                       @php
                            $types = [
                              'select an option',
                              'appointment',
                              'follow-up',
                              'reminder'
                              
                              ]
                        @endphp



      <select   name="type" id="type" class="form-control select2" required>
               @foreach ($types as $type)
               <option value="{{$type}}">{{underscoreToCamelCase($type)}}</option>  
                        @endforeach
      </select>
    </div>
    <div class="form-group col-md-3">
    <div for="" class="mb-2">{{__('Timezone')}}</div>
      <select name="timezone" id="inputState" class="form-control select2" required>
      @foreach ($timezones as $timezone)
               <option value="{{$timezone->id}}">{{underscoreToCamelCase($timezone->name)}}</option>  
     @endforeach
      </select>
    </div>
    <div class="form-group col-md-3">
    <div for="" class="mb-2">{{__('Date')}}</div>
    <input name="start_date" type="date" class="form-control form-control-sm" required >
    </div>
    <div class="form-group col-md-3">
    <div for="" class="mb-2">{{__('Time')}}</div>
    <input name="time" type="time" class="form-control form-control-sm" required >
    </div>
  </div>

  <div  class="form-row d-hide" id="date_range_col">
               
                  <div class="form-group  col-md-8">
                    <div for="" class="mb-2">{{__('Notes')}}</div>
    <textarea name="notes" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea required autocompete="off">
                    </div>

                  </div>
                  

  <div class="form-row">
  <div class="form-group  col-12">
  <button type="submit" class="btn btn-dark float-right">Schedule Appointment </button>
  </div>
</div>
</form>
      </div>

    </div>
  </div>
</div>