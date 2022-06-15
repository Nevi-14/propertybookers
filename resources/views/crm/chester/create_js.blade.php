<script>

  


  $('#add_product').on('click', () => {



    var product_row = `
    <div class="col-12 col-md-6 mb-2">
<div class="row">
<div class="col-md-12">
                      <span>{{__('Timeline')}}</span>
                      <input type="date" name="timeline[]" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-12">
                      <span>{{__('Timeline Note')}}</span>
                      <textarea class="form-control form-control-sm" rows="5" name="timelinenote[]" placeholder="{{__('Notes Here')}}"></textarea>
                    </div> 
</div>
    </div> 

    `;

    $('#timelinesection').prepend(product_row);

  })
</script>