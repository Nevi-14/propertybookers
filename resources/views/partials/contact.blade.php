<div class="modal fade shadow " id="webform" tabindex="-1" aria-labelledby="webform" aria-hidden="true">
    <div class="modal-dialog webform  modal-md-lg">
        <div class="modal-content ">
            <div id="modal-header" class="modal-header">
                <h5 class="modal-title" id="webformLabel">PROPERTY BOOKERS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action={{url('/lead/web')}} method="POST" class="form">
                    @csrf
                    <div class="form-row">

                        <div class="col-12 col-md-6 mb-3">
                            <label for="first_name">Complete Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" autocomplete="off"
                                required placeholder="Complete Name">
                        </div>


                        <div class="col-12 col-md-6 mb-3">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name"
                                autocomplete="off" required placeholder="Company Name">
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="col-12 col-md-6 mb-3">
                            <label for="phone">Contact Number </label>
                            <input type="text" class="form-control" id="phone" name="phone" autocomplete="off"
                                placeholder="Contact Number">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required
                                placeholder="Email address">
                        </div>

                    </div>



                    <div class="form-row">

                        <div class="col-12 mb-3">

                            <label for="exampleFormControlTextarea1">Total properties per year</label>
                            <input type="number" class="form-control" id="total_properties_year"
                                name="total_properties_year" autocomplete="off"
                                placeholder="How many properties do you handle per year?">
                        </div>



                    </div>



                    <div class="form-row">
                        <div class="col-12 col-md-4 mb-3 ml-auto">

                            <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                        </div>
                    </div>
                    <div class="footer-modal">
                        <i class="fas fa-phone-alt mx-2"></i>+1 (609)549-8014
                        <i class="far fa-envelope mx-2"></i>info@propertybookers.us
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

