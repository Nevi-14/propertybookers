
<!-- Modal -->
<div class="modal fade" id="files" tabindex="-1" aria-labelledby="files" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable modal-lg" style="height:600px">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info text-bold" id="exampleModalLabel">FILE MANAGER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 400px;">


<div class="row">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-newfile-tab" data-toggle="pill" href="#v-pills-newfile" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-folder-plus mr-2"></i>New File</a>
      <a class="nav-link" id="v-pills-files-tab" data-toggle="pill" href="#v-pills-files" role="tab" aria-controls="v-pills-files" aria-selected="false"><i class="fas fa-folder-open mr-2"></i>Show Files</a>
     
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-newfile" role="tabpanel" aria-labelledby="v-pills-newfile-tab">
      
      <form method="POST" action="{{route('upload.file',['lead_id' => $propertyTracker->id] )}}"  enctype="multipart/form-data">
    @csrf
    
      <div class="form-row">
      <div class="col-12 mb-3">
      
      <h5 class="text-info text-bold">UPLOAD NEW  FILES</h5>
      </div>
<div class="col-12 mb-3">

<span>{{__('Title')}}</span>
<input type="text" name="title" class="form-control" autocomplete="off" required>
</div>

<div class="col-12 mb-3">

<div class="custom-file">

  <input type="file" class="custom-file-input" id="file" name="file[]" multiple required>
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
</div>
<div class="col-12 mb-3">
<span>{{__('Description')}}</span>
    <textarea  name="description" class="form-control" id="description" rows="3" autocomplete="off" required></textarea>
  </div>
  
  

                     <div class="col-12">
                     <button type="submit" class="btn btn-dark my-4 float-right">SAVE FILE</button>
                     </div>
                   </div>




</form>
      
      
      
      </div>
      <div class="tab-pane fade" id="v-pills-files" role="tabpanel" aria-labelledby="v-pills-files-tab">

<h5 class="text-info text-bold">UPLOADED FILES</h5>


<ul class="list-group list-group-flush">
@foreach($propertyTracker->files as $file)

<li class="list-group-item">Title: {{$file->title}}  / Description: {{$file->description}} / Submitted by: {{$file->userfile->name}}  <a href="/download_local/?file={{$file->file}}" class="btn btn-secondary float-right" download="{{$file->file}}"><i class="fas fa-download"></i></a> </li>

 
@endforeach
</ul>
      </div>
    
    </div>
  </div>
</div>







      </div>



                 
                    </div>
                   

      </div>


 
    </div>
  </div>
</div>


