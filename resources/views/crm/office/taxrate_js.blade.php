<script>
  $(function(){
    'use strict';
    var taxrates = <?php echo(($taxRate_ids->content())) ?>;
    for(const id of taxrates) {
        var btn = `
            <a href="#" onclick="confirmDelete('${id}')">
                <i class="fas fa-trash text-danger"></i>
            </a>
        `;
        $(`#delbtn${id}`).append(btn);
    }
    $('#taxRatesTable').DataTable();
  });
  function confirmDelete(id){
      let choice = confirm(`{{__('taxRateDeleteWarning')}}`)
      if(choice){
          document.getElementById('delete-taxRate-'+id).submit();
      }
  }
  
</script>