<script>
  $(function(){
    'use strict';

    var paymentmodes = <?php echo(($paymentmode_ids->content())) ?>;
    for(const id of paymentmodes) {
        var btn = `
            <a href="#" onclick="confirmDelete('${id}')">
                <i class="fas fa-trash text-danger"></i>
            </a>
        `;
        $(`#delbtn${id}`).append(btn);
    }
    
    $('#paymentModesTable').DataTable();
  });

  
  function confirmDelete(id){
      let choice = confirm(`{{__('paymentModeDeletewarning')}}`)
      if(choice){
          document.getElementById('delete-paymentMode-'+id).submit();
      }
  }
</script>