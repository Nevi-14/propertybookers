<div class="card stage">
    <div class="card-header" id="headingOne">
        <div class="row">
            <div class="col-8 d-flex align-items-center">
                <h3 class="mb-0 text-bold text-info ">
                    <i class="fas fa-angle-double-right  mr-1"></i> REMINDERS
                </h3>

            </div>

            <div class="col-4">

            <button class="btn btn-link  text-success  float-right" type="button" data-toggle="collapse" data-target="#reminders" aria-expanded="true" aria-controls="reminders">
            <h4><span class="badge badge-info">{{$propertyTracker->appointment->where('type', 'reminder')->count()}} </span></h4>
                </button>

            </div>

        </div>
    </div>

    <div id="reminders" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">



        <div class="row">

@foreach($propertyTracker->appointment as $appointment)

@if($appointment->type == 'reminder')

<div class="form-group col-md-12 ">
    <h5 class="card-title text-bold text-info text-uppercase">Created On : {{\Carbon\Carbon::parse($appointment->created_at)->format('Y-m-d')}}</h5>
</div>

<div class="form-group col-md-12 ">
    <div for="" class="mb-2">{{__('Subject')}}</div>
    <input value="{{$appointment->subject}}" name="subject" type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Appointment title" required autocomplete="off">
</div>
<div class="form-group col-md-6">
    <div for="" class="mb-2">{{__('Date')}}</div>
    <input value="{{\Carbon\Carbon::parse($appointment->date)->format('Y-m-d')}}" name="date" type="date" class="form-control form-control-sm" required>
</div>
<div class="form-group col-md-6">
    <div for="" class="mb-2">{{__('Time')}}</div>
    <input value="{{$appointment->time}}" name="time" type="time" class="form-control form-control-sm" required>
</div>

<div class="form-group  col-md-6">
    <div for="" class="mb-2">{{__('Appointment Notes')}}</div>
    <textarea name="notes" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$appointment->notes}}</textarea required autocompete="off" required>
</div>
<div class="form-group  col-md-6">
    <div for="" class="mb-2">{{__('Close Notes')}}</div>
    <textarea name="notes" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$appointment->close_notes}}</textarea required autocompete="off" required>
</div>

<div class="form-group col-md-12 d-flex justify-content-end">
<a class="btn btn-primary" data-toggle="collapse" href="#follow-up-{{$appointment->id}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Add appointment follow-up</a>

                    </div>

               
                   

  <div class="form-group col-12">
    <div class="collapse multi-collapse" id="follow-up-{{$appointment->id}}">
      <div class="card card-body">
      <div class="form-row">
<div class="form-group col-md-12">
<h5 class="card-title text-bold text-info text-uppercase">New appointment</h5>
</div>
<div class="form-group col-md-12">
             <div for="" class="mb-2">{{__('Subject')}}</div>
               <input name="subject" type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Appointment title" required autocomplete="off">
             </div>
               <div class="form-group col-md-6">
               <div for="" class="mb-2">{{__('Date')}}</div>
               <input name="date" type="date" class="form-control form-control-sm" required >
               </div>
               <div class="form-group col-md-6">
               <div for="" class="mb-2">{{__('Time')}}</div>
               <input name="time" type="time" class="form-control form-control-sm" required >
               </div>

</div>
      </div>
    </div>
  </div>





                <div class="card " id="new-appointment">



                </div>





@endif

@endforeach
</div>

      


        </div>
    </div>
</div>