<div class="card stage">
    <div class="card-header" id="headingOne">
        <div class="row">
            <div class="col-8 d-flex align-items-center">
                <h3 class="mb-0 text-bold text-dark ">
                    <i class="fas fa-angle-double-right  mr-1"></i> STAGE 1 LEAD
                </h3>

            </div>

            <div class="col-4">

                @if($propertyTracker->stage == 'Lead' || $propertyTracker->stage == 'Prospect' || $propertyTracker->stage == 'Opportunity')

                <button class="btn btn-link  text-success  float-right" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">





            <!--TBS-->


            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-led-information-tab" data-toggle="pill" href="#pills-led-information" role="tab" aria-controls="pills-home" aria-selected="true">LEAD INFORMATION</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-property-owner-tab" data-toggle="pill" href="#pills-property-owner" role="tab" aria-controls="pills-profile" aria-selected="false">PROPERTY OWNER</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-property-details-tab" data-toggle="pill" href="#pills-property-details" role="tab" aria-controls="pills-contact" aria-selected="false">PROPERTY DETAILS</a>
                </li>


            </ul>

            <form method="POST" action="{{route('tracker.update',[$propertyTracker , 'stage' => 'Lead'] )}}">
                @csrf
                @method('PUT')
                <div class="tab-content" id="pills-tabContent">



                    <div class="tab-pane fade show active" id="pills-led-information" role="tabpanel" aria-labelledby="pills-led-information-tab">

                        <div class="row">
                            {{-- ANCHOR SOURCE FIELD --}}
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="mb-2"><span class="text-danger ">*</span> {{__('Team')}}</div>
                                <div class="input-group">
                                    <select name="team_id" id="team_id" class="form-control form-control-sm select2" required>
                                        @foreach ($teams as $team)

                                        @if($propertyTracker->teams->id == $team->id)
                                        <option value="{{$team->id}}" selected>{{$team->name}}</option>
                                        @else
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                        @endif

                                        @endforeach
                                    </select>

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
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="mb-2"><span class="text-danger"> * </span> {{__('Sales Agent')}}</div>
                                <div class="input-group">
                                    <select name="sales_agent_id" id="sales_agent_id" class="form-control form-control-sm select2" required>
                                        <option selected disabled>{{__('Select Lead Owner')}}</option>
                                        @foreach ($users as $user)


                                        @if($propertyTracker->agent->id == $user->id)
                                        <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                        @else
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endif


                                        @endforeach
                                    </select>
                                </div>

                            </div>



                        </div>


                    </div>
                    <div class="tab-pane fade " id="pills-property-owner" role="tabpanel" aria-labelledby="pills-property-owner-tab">


                        <div class="row">

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="mb-2"><span class="text-danger">*</span> {{__('First Name')}}</div>
                                    <input type="text" value="{{$propertyTracker->propertyowner->first_name}}" name="first_name" class="form-control form-control-sm " autocomplete="off" placeholder="{{__('Enter leads First Name')}}" required />
                                </div>
                                <span class="text text-danger">{{@$errors->first('first_name')}}</span>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="mb-2"><span class="text-danger">*</span> {{__('Last Name')}}</div>
                                    <input type="text" value="{{$propertyTracker->propertyowner->last_name}}" name="last_name" class="form-control form-control-sm " autocomplete="off" placeholder="{{__('Enter leads Last Name')}}" data-validation="length" data-validation-length="2-20" required />
                                </div>
                                <span class="text text-danger">{{@$errors->first('last_name')}}</span>
                            </div>


                        </div>

                        <div class="row ">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <div class="mb-2"><span class="text-danger"></span> {{__('Company Name')}}</div>
                                    <input type="text" value="{{$propertyTracker->propertyowner->company_name}}" name="company_name" class="form-control form-control-sm " autocomplete="off" placeholder="{{__('Enter Leads Company Name')}}" />
                                </div>
                                <span class="text text-danger"></span>
                            </div>
                            <div class="col-md-4 col-sm-12">

                                <div class="mb-2">

                                    <span class="text-danger">*</span> {{__('Email')}}


                                </div>

                                <div class="input-group">
                                    <input type="text" value="{{$propertyTracker->propertyowner->email}}" name="email" class="form-control form-control-sm " autocomplete="off" placeholder="Enter leads Email" id="email" required>
                                </div>
                                <span class="text text-danger">{{@$errors->first('email')}}</span>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-2">

                                    <span class="text-danger">*</span> {{__('Phone')}}


                                </div>


                                <div class="input-group">
                                    <input type="text" value="{{$propertyTracker->propertyowner->phone}}" name="phone" class="form-control form-control-sm " autocomplete="off" placeholder="{{__('Enter leads Phone')}}" required />
                                    <span class="text text-danger"></span>
                                </div>
                            </div>





                        </div>





                    </div>
                    <div class="tab-pane fade " id="pills-property-details" role="tabpanel" aria-labelledby="pills-property-details-tab">

                        <div class="form-row mb-3">
                            <div class="col-md-12 col-sm-12">
                                <div class="mb-2"><span class="text-danger">*</span>{{__('Address')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->address}}" name="address" type="text" class="form-control form-control-sm " autocomplete="off" id="address" placeholder="Ex 1234 Main St" required>
                            </div>

                        </div>
                        <div class="form-row mb-3">



                            <div class="form-group col-md-3">
                                <div class="mb-2"><span class="text-danger">*</span> {{__('City')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->city}}" name="city" type="text" class="form-control form-control-sm " autocomplete="off" id="city" required>
                            </div>

                            <div class="col-md-3 col-sm-12 ">
                                <div class="mb-2"><span class="text-danger">*</span> {{__('State')}}</div>
                                <div class="input-group">
                                    <select name="state_id" id="state_id" class="form-control  form-control-sm select2" required style="width:auto" required>
                                        @foreach ($states as $state)

                                        @if($propertyTracker->propertyowner->propertyDetails->first()->state_id == $state->id)
                                        <option value="{{$state->id}}" selected>{{$state->name}}</option>
                                        @else
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endif

                                        @endforeach
                                    </select>

                                </div>
                                <span class="text text-danger">{{@$errors->first('team_id')}}</span>
                            </div>







                            <div class="form-group col-md-3">
                                <div class="mb-2"> {{__('County')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->county}}" name="county" type="text" class="form-control form-control-sm " autocomplete="off" id="county">
                            </div>
                            <div class="form-group col-md-3">
                                <div class="mb-2"><span class="text-danger">*</span> {{__('Zip')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->zip}}" name="zip" type="number" class="form-control form-control-sm " autocomplete="off" id="zip" required>
                            </div>
                        </div>



                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <div class="mb-2"><span class="text-danger">*</span> {{__('Beds')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->beds}}" name="beds" type="number" class="form-control form-control-sm " autocomplete="off" id="beds" required>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="mb-2"><span class="text-danger">*</span> {{__('Baths')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->baths}}" name="baths" type="number" class="form-control form-control-sm " autocomplete="off" id="baths" required>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="mb-2"><span class="text-danger">*</span> {{__('Sqft')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->sqft}}" name="sqft" type="number" class="form-control form-control-sm " autocomplete="off" id="sqft" required>
                            </div>
                        </div>


                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <div class="mb-2"><span class="text-danger">*</span> {{__('Zestimate')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->zestimate}}" name="zestimate" type="number" class="form-control form-control-sm " autocomplete="off" id="zestimate" required>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="mb-2"><span class="text-danger">*</span> {{__('Zillow Link')}}</div>
                                <input value="{{$propertyTracker->propertyowner->propertyDetails->first()->zillow_url}}" name="zillow_url" type="url" class="form-control form-control-sm " autocomplete="off" id="zillow_url" required>
                            </div>

                        </div>



                    </div>

                    <div class="form-row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark btn-block">Save </button>
                        </div>
                    </div>

                </div>
            </form>


        </div>
    </div>
</div>