<div class="card stage">
    <div class="card-header" id="headingThree">
        <div class="row">
            <div class="col-8 d-flex align-items-center">
                <h3 class="mb-0 text-bold text-success">
                    <i class="fas fa-angle-double-right mr-1"></i> STAGE 3 OPPORTUNITY
                </h3>

            </div>

            <div class="col-4">


                @if( $propertyTracker->stage == 'Opportunity')

                <button class="btn btn-link  text-left text-success float-right" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
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
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">

            <form method="POST" action="{{route('tracker.update',[$propertyTracker , 'stage' => 'Opportunity'] )}}">
                @csrf
                @method('PUT')



                <div class="form-row mb-3">
                    <div class="col-12 col-md-12 mb-3">

                        <div class="form-check float-right">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Close Appointment
                            </label>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <div class="mb-2"><span class="text-danger">*</span> {{__('Status')}}</div>
                        <div class="input-group">
                            <select name="status_id" id="status_id" class="form-control form-control-sm select2" required>
                                @foreach ($statuses as $status)

                                @if($propertyTracker->status->id == $status->id)
                                <option value="{{$status->id}}" selected>{{$status->name}}</option>
                                @else
                                <option value="{{$status->id}}">{{$status->name}}</option>
                                @endif


                                @endforeach
                            </select>

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12">


                        <div class="mb-2"><span class="text-danger"></span> {{__('Max Cash Offer')}}</div>
                        <input type="number" value="{{$propertyTracker->propertyowner->propertyDetails->first()->asking_price}}" name="max_cash_offer" class="form-control form-control-sm" required>

                    </div>
                
                    <div class="col-md-6 col-sm-12">
                      <div class="mb-2">{{__('Notes')}}</div>
                      <textarea name="notes" class="form-control form-control-sm" rows="5"  placeholder="{{__('Notes Here')}}">{{$propertyTracker->appointment->first()->notes}}</textarea>
                    </div> 

                    <div class="col-md-6 col-sm-12">
                      <div class="mb-2">{{__('Close Notes')}}</div>
                      <textarea name="close_note" class="form-control form-control-sm" rows="5"  placeholder="{{__('Notes Here')}}">{{$propertyTracker->appointment->first()->close_note}}</textarea>
                    </div> 
         

              
             



                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-dark btn-block">Save </button>
                    </div>
              

            </form>



        </div>
    </div>
</div>