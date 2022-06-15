
<!-- Modal -->
<div class="modal fade" id="state" tabindex="-1" aria-labelledby="state" aria-hidden="true">
<div class="modal-dialog">
<form method="POST" action={{url('/state')}}>
    @csrf
    <div class="modal-content">

      <div class="modal-body">
      <div class="form-row">
<div class="col-12">

<span>{{__('State name')}}</span>
<input type="text" name="name" class="form-control"  autocomplete="off" placeholder="state name" required>
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


