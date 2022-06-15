
<!-- Modal -->
<div class="modal fade" id="team" tabindex="-1" aria-labelledby="team" aria-hidden="true">
<div class="modal-dialog">
<form method="POST" action={{url('/team')}}>
    @csrf
    <div class="modal-content">

      <div class="modal-body">
      <div class="form-row">
<div class="col-12">

<span>{{__('Team name')}}</span>
<input type="text" name="name" class="form-control" autocomplete="off" placeholder="team name" required>
</div>
      </div>


                   <div class="form-row">
                     <div class="col-12">
                     <button type="submit" class="btn btn-dark my-4 float-right">Save</button>
                     </div>
                   </div>

                 
                    </div>
                   

      </div>
    </form>
 
    </div>
  </div>
</div>


