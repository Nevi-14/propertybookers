


<!-- Modal -->
<div class="modal fade" id="details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">LEAD DETAILS / Created On: {{\Carbon\Carbon::parse($propertyTracker->created_at)->format('Y-m-d')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-borderless mb-3">
      <thead class="thead-dark">
    <tr>

      <th colspan="4" scope="col" class="text-center">GENERAL DETAILS</th>
    </tr>
  </thead>
  <thead class="bg-transparent  text-dark">
    <tr>
      <th scope="col">Team</th>
      <th scope="col">Status</th>
      <th scope="col">Sales Agent</th>
      <th scope="col">Sales agent email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td> {{$propertyTracker->teams->name}}</td>
      <td> {{$propertyTracker->status->name}}</td>
      <td> {{$propertyTracker->agent->name}}</td>
      <td> {{$propertyTracker->agent->email}}</td>
    </tr>
    
  </tbody>
</table>

<table class="table table-borderless">
<thead class="thead-dark">
    <tr>

      <th colspan="4" scope="col" class="text-center">PROPERTY OWENER DETAILS</th>
    </tr>
  </thead>
  <thead class="bg-transparent  text-dark">
    <tr>
      <th scope="col">Complete name</th>
      <th scope="col">Company name</th>
      <th scope="col">Contact number</th>
      <th scope="col">Email</th>
  
    </tr>
  </thead>
  <tbody>
    <tr>
<td>{{$propertyTracker->propertyowner->first_name}} {{$propertyTracker->propertyowner->last_name}} </td>
<td>{{$propertyTracker->propertyowner->company_name}}</td>
      <td>{{$propertyTracker->propertyowner->phone}}</td>
      <td>{{$propertyTracker->propertyowner->email}}</td>

    </tr>
   
  </tbody>
</table>
<table class="table table-borderless">
<thead class="thead-dark">
    <tr>

      <th colspan="5" scope="col" class="text-center">PROPERTY  DETAILS</th>
    </tr>
  </thead>
  <thead class="bg-transparent  text-dark">
    <tr>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">County</th>
      <th>Zip</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>{{$propertyTracker->propertyowner->propertydetails->first()->address}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->city}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->state->name}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->county}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->zip}}</td>
    </tr>
   
  </tbody>

  <thead class="bg-transparent  text-dark">
    <tr>
      <th scope="col">Beds</th>
      <th scope="col">Baths</th>
      <th scope="col">Sqft</th>
      <th scope="col">Zestimate</th>
      <th>Zillow Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>{{$propertyTracker->propertyowner->propertydetails->first()->beds}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->baths}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->sqft}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->zestimate}}</td>
      <td><a target="blank" href="{{$propertyTracker->propertyowner->propertydetails->first()->zillow_url}}" class="btn btn-info"><i class="fas fa-link"></i></a></td>
    </tr>
   
  </tbody>
</table>

<table class="table table-borderless">

  <thead class="bg-transparent  text-dark">
    <tr>
      <th scope="col">Caller</th>
      <th scope="col">Asking price</th>
      <th scope="col">Max cash offer</th>
      <th scope="col">Condition</th>
      <th scope="col">Motivation</th>
      <th scope="col">Last sold</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>{{$propertyTracker->agent->name}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->asking_price}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->max_cash_offer}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->condition}}</td>
      <td>{{$propertyTracker->propertyowner->propertydetails->first()->motivation}}</td>
      <td>{{\Carbon\Carbon::parse($propertyTracker->propertyowner->propertyDetails->first()->last_sold)->format('Y-m-d')}}</td>
    </tr>
   
  </tbody>

</table>
      </div>

    </div>
  </div>
</div>