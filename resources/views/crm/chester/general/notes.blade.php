<div id="notes-show" class="card d-hide stage">
    <div class="card-header" id="headingOne">
        <div class="row">
            <div class="col-8 d-flex align-items-center">
                <h3 class="mb-0 text-bold text-dark ">
                    <i class="fas fa-angle-double-right  mr-1"></i> LEAD NOTES
                </h3>

            </div>

            <div class="col-4">

            <button class="btn btn-link  text-success  float-right" type="button" data-toggle="collapse" data-target="#lead-notes" aria-expanded="true" aria-controls="lead-notes">
     <h4><span class="badge badge-info">{{$propertyTracker->notes->count()}} </span></h4>
                </button>

            </div>

        </div>
    </div>

    <div id="lead-notes" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">


<div class="row">
<div class="col-sm-12 col-md-6 ">

<div class="alert alert-secondary text-uppercase d-flex justify-content-center" role="alert">
  in this section you will be able save notes about the lead.
</div>
</div>

<div class="col-sm-12 col-md-6">

<form method="POST" action="{{route('tracker.notes',['property_tracker_id' => $propertyTracker->id] )}}" >
@csrf

    <li class="media">

        <div class="media-body">
            <h5 class="media-heading mb-2">
        
                <small>
             Add New Note
                </small>
            </h5>
            <p>
            <textarea name="notes" class="form-control border-info" style="resize:none;" id="exampleFormControlTextarea1" rows="3"></textarea>
            </p>
        </div>
    </li>

    <button type="submit" class="btn btn-default btn-block">Save Note »</button>
    </form>

</div>
</div>


<div class="row sordable">

@foreach($propertyTracker->notes->sortByDesc('id') as $note)

<div class="col-12 col-md-4">
<div class="card bg-light  mb-3">
<div class="card-header text-uppercase"> {{$note->agent->name}} »  {{\Carbon\Carbon::parse($note->created_at)->format('Y-m-d')}}</div>
  <div class="card-body">
  <form method="POST" action={{url('/property/tracker/notes', $note->id)}}>
    @csrf
    @method('PUT')

    <textarea name="notes" class="form-control  " style="resize:none;" id="exampleFormControlTextarea1" rows="3">{{$note->notes}}</textarea>
    <button type="submit" class="btn btn-primary btn-block my-4">Edit Note </button>
    </form>
  </div>
</div>


 
</div>
@endforeach

</div>





      


        </div>
    </div>
</div>