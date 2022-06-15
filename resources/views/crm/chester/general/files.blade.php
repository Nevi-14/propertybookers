<div id="files-show" class="card stage  d-hide">
    <div class="card-header" id="headingOne">
        <div class="row">
            <div class="col-8 d-flex align-items-center">
                <h3 class="mb-0 text-bold text-dark ">
                    <i class="fas fa-angle-double-right  mr-1"></i> LEAD FILES
                </h3>

            </div>

            <div class="col-4">

            <button class="btn btn-link  text-success  float-right" type="button" data-toggle="collapse" data-target="#files" aria-expanded="true" aria-controls="files">
               <h4> <span class="badge badge-info">{{$propertyTracker->files->count()}} </span></h4>
                </button>

            </div>

        </div>
    </div>

    <div id="files" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">


<div class="row">

<div class="col-sm-12 col-md-6 ">

<div class="alert alert-secondary text-uppercase d-flex justify-content-center text-bold" role="alert">
  in this section you will be able to upload up to 10 files in a row,
  description is required to identify what the file is about.
</div>
</div>

<div class="col-12 col-md-6">

<form method="POST" action="{{route('upload.file',['lead_id' => $propertyTracker->id] )}}"  enctype="multipart/form-data">
    @csrf
      <div class="form-row">

<div class="col-12 mb-3">

<div class="custom-file">

  <input type="file" class="custom-file-input" id="file" name="file[]" multiple required >
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
</div>
<div class="col-12 mb-3">
<span>{{__('Description')}}</span>
<textarea name="description" class="form-control border-info" style="resize:none;" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  
                   </div>
                   <div class="form-row">
<div class="col-12">
<button type="submit" class="btn btn-default btn-block">Save File </button>
                     </div>
</div>



</form>
</div>

</div>

<div class="row">

@foreach($propertyTracker->files->sortByDesc('id') as $file)

<div class="col-12 col-md-2">
<div class="card ">
  <div class="card-body">

    <p class="card-text"> {{$file->userfile->name}} » {{$file->description}}</p>
    <a type="submit" href="/download_local/?file={{$file->file}}"  class="btn btn-primary" download="{{$file->file}}">Download File</a>   
  </div>
</div>


 
</div>
@endforeach
</div>


      


        </div>
    </div>
</div>