<!-- Modal -->
<div class="modal fade" id="staticBackdrop"  data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" style="height:600px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info text-bold" id="staticBackdropLabel">NOTES MANAGER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-newnote-tab" data-toggle="pill" href="#v-pills-newnote" role="tab" aria-controls="v-pills-newnote" aria-selected="true"><i class="fas fa-folder-plus mr-2"></i>New Note</a>
              <a class="nav-link" id="v-pills-notes-tab" data-toggle="pill" href="#v-pills-notes" role="tab" aria-controls="v-pills-notes" aria-selected="false"><i class="fas fa-folder-open mr-2"></i>Show Notes</a>

            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-newnote" role="tabpanel" aria-labelledby="v-pills-newnote-tab">
                <form method="POST" action={{url('chester/lead', $propertyTracker)}}>
                  @csrf
                  @method('PUT')
                  <div class="form-row">
                    <div class="col-12 mb-3">

                      <h5 class="text-info text-bold">NEW NOTE</h5>
                    </div>


                    <div class="col-md-12 col-sm-12">

                      <div class="input-group">
                        <textarea class="form-control form-control-sm" rows="5" name="notes" id="notes" placeholder="{{__('Notes Here')}}"></textarea>
                      </div>
                    </div>

                  </div>

                  <div class="form-row">
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark my-4 float-right">Save changes</button>
                    </div>
                  </div>


                </form>



              </div>
              <div class="tab-pane fade" id="v-pills-notes" role="tabpanel" aria-labelledby="v-pills-notes-tab">
<div class="row">

<div class="col-12 mb-3">
      
      <h5 class="text-info text-bold">NOTES HISTORY</h5>
      </div>
</div>

                <ul class="list-unstyled">
                  @foreach($propertyTracker->notes as $note)

                  <li class="media">

                    <div class="media-body">
                      <h6 class="mt-0 mb-1"><i class="fas fa-user mr-2"></i>{{$note->agent->name}} <i class="far fa-clock mx-2 text-info"></i><span class="text-info">{{$note->created_at}}</span></h6>

                      <form method="POST" action={{url('notes/lead', $note->id)}}>
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                          <div class="col-12 mb-3">
                            <textarea name="notes" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$note->notes}}</textarea>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-dark float-right">Edit</button>
                          </div>

                        </div>


                      </form>

                    </div>
                  </li>
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