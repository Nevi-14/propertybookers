<!-- Modal -->
<div class="modal fade" id="calculator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info text-uppercase text-bold" id="exampleModalLabel">property tracker calculator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="formControlRange">Example Range input</label>
 <input type="range" value="0" class="form-control-range" min="1" max="100" id="formControlRange" onInput="$('#rangeval').html($(this).val())">
      <span id="rangeval">0<!-- Default value --></span><span class="percent mr-1">%</span>
  </div>
  <div class="form-group col-md-6">
  <label for="formControlRange">Example Range input</label>
 <input type="range" value="0" class="form-control-range" min="1" max="100" id="formControlRange" onInput="$('#rangeval').html($(this).val())">
      <span id="rangeval">0<!-- Default value --></span><span class="percent mr-1">%</span>
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>


</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>