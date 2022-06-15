<div class="card stage">
            <div class="card-header" id="headingTwo">

              <div class="row">
                <div class="col-8 d-flex align-items-center">
                  <h3 class="mb-0 text-bold text-warning">
                    <i class="fas fa-angle-double-right mr-1"></i> STAGE 2 PROSPECT
                  </h3>

                </div>

                <div class="col-4">

                  @if($propertyTracker->stage == 'Prospect' || $propertyTracker->stage == 'Opportunity')

                  <button class="btn btn-link  text-left text-success  float-right" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-unlock-alt fa-2x"></i>
                  </button>



                  @else
                  <button class="btn btn-link  text-left text-danger  float-right" type="button">
                    <i class="fas fa-lock fa-2x"></i>
                  </button>


                  @endif




                </div>

              </div>

            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">




              <form method="POST" action="{{route('tracker.update',[$propertyTracker , 'stage' => 'Prospect'] )}}">
                  @csrf
                  @method('PUT')



                  <div class="form-row mb-3 " >
                    <div class="col-12 col-md-12 mb-3">

                   
                      </span class="mr-2"> {{__('Did you add the data on REI PRO?')}}</span>
                      <div class="form-check form-check-inline">

                        @if($propertyTracker->confirmation == 'Y')
                        <input class="form-check-input" type="radio" name="confirmation" id="inlineRadio1" value="Y" checked required>

                        @else
                        <input class="form-check-input" type="radio" name="confirmation" id="inlineRadio1" value="Y" required>
                        @endif
                        <label class="form-check-label" name="yes" for="inlineRadio1">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        @if($propertyTracker->confirmation == 'N')
                        <input class="form-check-input" value="N" type="radio" name="confirmation" id="inlineRadio2" value="option2" checked required>
                        @else
                        <input class="form-check-input" value="N" type="radio" name="confirmation" id="inlineRadio2" value="option2" required>
                        @endif
                        <label class="form-check-label" name="no" for="inlineRadio2">No</label>
                      </div>
                      </span>

                    </div>

                    



               <div class=" col-md-4 col-sm-12">
                      <div class="mb-2">{{__('Last Sold')}}</div>
                      <input type="date" value="{{\Carbon\Carbon::parse($propertyTracker->propertyowner->propertyDetails->first()->last_sold)->format('Y-m-d')}}" name="last_sold" class="form-control form-control-sm" id="last_sold" required>
                    </div>

                    <div class="col-md-4 col-sm-12">
                      <div class="mb-2"><span class="text-danger"></span> {{__('Asking Price')}}</div>
                      <input type="number" value="{{$propertyTracker->propertyowner->propertyDetails->first()->asking_price}}" name="asking_price" class="form-control form-control-sm" id="asking_price" required>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <div class="mb-2"><span class="text-danger"></span> {{__('Bid Price')}}</div>
                      <input type="number" value="{{$propertyTracker->propertyowner->propertyDetails->first()->bid_price}}" name="bid_price" class="form-control form-control-sm" id="inputCity" required>
                    </div>

                  </div>



                  <div class="form-row mb-3">
                    <div class="form-group col-md-6">
                      <div class="mb-2">{{__('Condition')}}</div>
                      <textarea class="form-control form-control-sm" rows="5" name="condition" placeholder="{{__('Notes Here')}}" required>{{$propertyTracker->propertyowner->propertyDetails->first()->condition}}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="mb-2">{{__('Motivation')}}</div>
                      <textarea class="form-control form-control-sm" rows="5" name="motivation" placeholder="{{__('Notes Here')}}" required>{{$propertyTracker->propertyowner->propertyDetails->first()->motivation}}</textarea>
                    </div>
   
                  </div>


                  <hr>
                  <div class="form-row mb-3">




                    <div class="form-group col-md-12 d-flex justify-content-end">

                      <a class="btn btn-info btn-sm text-white text-bold ml-auto p-1" id="add_product"><i class="fas fa-plus mr-2"></i>TIMELINE</a>
                    </div>


</div>


<div class="row" id="timelinesection">
    
    </div>





    @if($propertyTracker->status == 'Prospect')




    
<div class="card" >


  <div class="card-body" id="appointment-scheduler">
               
                 <div class="form-row">
                 <div class="form-group col-md-12">
                 <h5 class="card-title text-bold text-info text-uppercase ">New appointment</h5>
                 </div>
               <div class="form-group col-md-6">
                 <div for="" class="mb-2">{{__('Subject')}}</div>
                   <input name="subject" type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Appointment title" required autocomplete="off">
                 </div>
                 <div class="form-group col-md-6">
                 <div class="mb-2"><span class="text-danger"> * </span> {{__('Acquisition Manager')}}</div>
                                     <div class="input-group">
                                       <select name="acquisition_manager_id"  class="form-control form-control-sm select2" data-validation="required" required>
               
                                         @foreach ($users as $user)
                                         <option value="{{$user->id}}">{{$user->name}}</option>
                                         @endforeach
                                       </select>
                                     </div>
                                     <span class="text text-danger"></span>
                   </div>
               
               
               </div>
                 <div class="form-row">
               
               
                   <div class="form-group col-md-6">
                   <div for="" class="mb-2">{{__('Timezone')}}</div>
                     <select name="timezone" class="form-control form-control-sm select2" required>
                     @foreach ($timezones as $timezone)
                              <option value="{{$timezone->id}}">{{underscoreToCamelCase($timezone->name)}} / {{$timezone->utc}}</option>  
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
               

               
</div>
                                 
               
                              </div>

@endif



<hr>

<div class="form-row">
  <div class="col-12">
  <button type="submit" class="btn btn-dark btn-block">Save  </button>
  </div>
</div>

</form>

@if($propertyTracker->propertyowner->propertydetails->first()->timeline)


            <div class="card ">


                <div class="card-body ">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <h5 class="card-title text-bold text-secondary text-uppercase ">Timelines List</h5>

                        </div>


                        @foreach($propertyTracker->propertyowner->propertydetails->first()->timeline as $timeline)
                    <div class="row mr-1">
<div class="col-md-12">
                      <div class="mb-2">{{__('Timeline')}}</div>
                      <input type="date"  class="form-control" id="inputCity" value="{{\Carbon\Carbon::parse($timeline->timeline)->format('Y-m-d')}}">
                    </div>
                    <div class="col-md-12">
                      <div class="mb-2">{{__('Timeline Note')}}</div>
                      <textarea class="form-control form-control-sm" rows="5"  placeholder="{{__('Notes Here')}}">{{$timeline->timelinenote}}</textarea>
                    </div> 
</div>
                     @endforeach

                    </div>
                </div>
            </div>

       
            @endif

                  </div>
      
              </div>
            </div>