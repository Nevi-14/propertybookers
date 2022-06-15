
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-body">
 


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
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-notes-tab" data-toggle="pill" href="#pills-notes" role="tab" aria-controls="pills-notes" aria-selected="false">LEAD NOTES</a>
                  </li>

                </ul>
                <form method="POST" action={{url('/property/tracker')}}>
    @csrf
                  <div class="tab-content" id="pills-tabContent">



                    <div class="tab-pane fade show active" id="pills-led-information" role="tabpanel" aria-labelledby="pills-led-information-tab">

                      <div class="row">
                        {{-- ANCHOR SOURCE FIELD --}}
                        <div class="col-md-6 col-sm-12 mb-3">
                          <span><span class="text-danger">*</span> {{__('Team')}}</span>
                          <div class="input-group">
                            <select name="team_id" id="team_id" class="form-control form-control-sm select2" data-validation="required" required>
                              @foreach ($teams as $team)
                              <option value="{{$team->id}}">{{$team->name}}</option>

                              @endforeach
                            </select>
                            
                          </div>
                          <span class="text text-danger">{{@$errors->first('team_id')}}</span>
                        </div>

                        <div class="col-md-6 col-sm-12 mb-3">
                          <span><span class="text-danger">*</span> {{__('Status')}}</span>
                          <div class="input-group">
                            <select name="status_id" id="status_id" class="form-control form-control-sm select2" data-validation="required" required>
                              @foreach ($statuses as $status)

                              <option value="{{$status->id}}">{{$status->name}}</option>

                              @endforeach
                            </select>
                            
                          </div>
                          <span class="text text-danger">{{@$errors->first('status_id')}}</span>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                          <span><span class="text-danger"> * </span> {{__('Assigned')}}</span>
                          <div class="input-group">
                            <select name="sales_agent_id" id="sales_agent_id" class="form-control form-control-sm select2"  required>
                   
                              @foreach ($users as $user)

                              <option value="{{$user->id}}">{{$user->name}}</option>


                              @endforeach
                            </select>
                          </div>
                          <span class="text text-danger">{{@$errors->first('sales_agent_id')}}</span>
                        </div>



                      </div>


                    </div>
                    <div class="tab-pane fade " id="pills-property-owner" role="tabpanel" aria-labelledby="pills-property-owner-tab">


                      <div class="row">

                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <span><span class="text-danger"></span> {{__('First Name')}}</span>
                            <input type="text"  name="first_name" class="form-control form-control-sm " autocomplete="off" placeholder="{{__('Enter leads First Name')}}" required  />
                          </div>
                          <span class="text text-danger">{{@$errors->first('first_name')}}</span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <span><span class="text-danger">*</span> {{__('Last Name')}}</span>
                            <input type="text"  name="last_name" class="form-control form-control-sm " autocomplete="off" placeholder="{{__('Enter leads Last Name')}}" required  />
                          </div>
                          <span class="text text-danger">{{@$errors->first('last_name')}}</span>
                        </div>


                      </div>

                      <div class="row ">
                        <div class="col-md-4 col-sm-12">
                          <div class="form-group">
                            <span><span class="text-danger"></span> {{__('Company Name')}}</span>
                            <input type="text"  name="company_name" class="form-control form-control-sm " autocomplete="off" placeholder="{{__('Enter Leads Company Name')}}" required />
                          </div>
                          <span class="text text-danger"></span>
                        </div>
                        <div class="col-md-4 col-sm-12">
                          <span class="text-danger"></span> {{__('Email')}}


                          <div class="input-group">
                            <input type="email"  name="email" class="form-control form-control-sm " autocomplete="off" placeholder="Enter leads Email" id="email" required>
                          </div>
                          <span class="text text-danger">{{@$errors->first('email')}}</span>
                        </div>

                        <div class="col-md-4 col-sm-12">
                          <span class="text-danger"></span> {{__('Phone')}}



                          <div class="input-group">
                            <input type="text"  name="phone" class="form-control form-control-sm " autocomplete="off" placeholder="{{__('Enter leads Phone')}}" required />
                            <span class="text text-danger"></span>
                          </div>
                        </div>





                      </div>





                    </div>
                    <div class="tab-pane fade " id="pills-property-details" role="tabpanel" aria-labelledby="pills-property-details-tab">

                      <div class="form-row mb-3">
                        <div class="col-md-12 col-sm-12">
                          <span><span class="text-danger"></span> {{__('Address')}}</span>
                          <input  name="address" type="text" class="form-control form-control-sm " autocomplete="off" id="address" placeholder="1234 Main St" required>
                        </div>

                      </div>
                      <div class="form-row mb-3">



                        <div class="form-group col-md-3">
                          <span><span class="text-danger"></span> {{__('City')}}</span>
                          <input  name="city" type="text" class="form-control form-control-sm " autocomplete="off" id="city" required>
                        </div>

                        <div class="col-md-3 col-sm-12 ">
                          <span><span class="text-danger">*</span> {{__('State')}}</span>
                          <div class="input-group">
                            <select name="state_id" id="state_id" class="form-control  form-control-sm select2" required>
                              @foreach ($states as $state)
                              <option value="{{$state->id}}">{{$state->name}}</option>

                              @endforeach
                            </select>
               
                          </div>
                          <span class="text text-danger">{{@$errors->first('team_id')}}</span>
                        </div>







                        <div class="form-group col-md-3">
                          <span><span class="text-danger"></span> {{__('County')}}</span>
                          <input  name="county" type="text" class="form-control form-control-sm " autocomplete="off" id="county" required>
                        </div>
                        <div class="form-group col-md-3">
                          <span><span class="text-danger"></span> {{__('Zip')}}</span>
                          <input  name="zip" type="number" class="form-control form-control-sm " autocomplete="off" id="zip" required>
                        </div>
                      </div>



                      <div class="form-row mb-3">
                        <div class="form-group col-md-6">
                          <span><span class="text-danger"></span> {{__('Beds')}}</span>
                          <input  name="beds" type="number" class="form-control form-control-sm " autocomplete="off" id="beds" required>
                        </div>
                        <div class="form-group col-md-4">
                          <span><span class="text-danger"></span> {{__('Baths')}}</span>
                          <input  name="baths" type="number" class="form-control form-control-sm " autocomplete="off" id="baths" required>
                        </div>
                        <div class="form-group col-md-2">
                          <span><span class="text-danger"></span> {{__('Sqft')}}</span>
                          <input name="sqft" type="number" class="form-control form-control-sm " autocomplete="off" id="sqft" required>
                        </div>
                      </div>


                      <div class="form-row mb-3">
                        <div class="form-group col-md-6">
                          <span><span class="text-danger"></span> {{__('Zestimate')}}</span>
                          <input  name="zestimate" type="number" class="form-control form-control-sm " autocomplete="off" id="zestimate" required>
                        </div>
                        <div class="form-group col-md-6">
                          <span><span class="text-danger"></span> {{__('Zillow Link')}}</span>
                          <input  name="zillow_url" type="text" class="form-control form-control-sm " autocomplete="off" id="zillow_url" required>
                        </div>

                      </div>



                    </div>
                    <div class="tab-pane fade" id="pills-notes" role="tabpanel" aria-labelledby="pills-notes-tab">

                      <div class="col-md-12 col-sm-12">
                        <span>{{__('Notes')}}</span>
                        <div class="input-group">
                          <textarea class="form-control form-control-sm " autocomplete="off" rows="5" name="notes" id="notes" placeholder="{{__('Notes Here')}}"></textarea>
                        </div>
                      </div>



                    </div>
                    <div class="form-row">
                      <div class="col-12">
                        <button type="submit" class="btn btn-dark my-4 float-right">Save changes</button>
                      </div>
                    </div>

                  </div>
                </form>






      </div>
 
    </div>
  </div>
</div>


