<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="height:600px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info text-bold" id="staticBackdropLabel">New Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <hr>

                <form method="POST" action={{url('chester/lead', $propertyTracker)}}>
                    @csrf
      
 <div class="form-row">
 <div class="col-md-12 col-sm-12">
                          <span><span class="text-danger"> * </span> {{__('User')}}</span>
                          <div class="input-group">
                            <select name="user_id" id="userOncehub" class="form-control form-control-sm" data-validation="required" required>
                              <option selected disabled>{{__('Select Lead Owner')}}</option>
                              @foreach ($users as $user)
                              <option value="{{$user->id}}">{{$user->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <span class="text text-danger">{{@$errors->first('sales_agent_id')}}</span>
                        </div>
 
 </div>

                    <div class="form-row">
                        <div class="col-md-12 col-sm-12">
                            <span>{{__('ONCEHUB ID')}}</span>
                            <input type="text" class="form-control " name="name" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 col-sm-12">
                            <span>{{__('ONCEHUB DATA')}}</span>
                            <input type="text" class="form-control " name="name" autocomplete="off" required>
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
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>