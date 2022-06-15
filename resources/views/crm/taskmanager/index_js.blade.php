<script>
    $(function(){
      'use strict';
      var tasks = <?php echo(($task_ids->content())) ?>;
      for(const id of tasks) {
          var btn = `
              <a href="#" onclick="confirmDelete('${id}')">
                  <i class="fas fa-trash text-danger"></i>
              </a>
          `;
          $(`#delbtn${id}`).append(btn);
      }
    });
  
    function dateChange(id){
      $(`#start_date${id},#end_date${id},#start_date-update${id},#end_date-update${id},#start,#end`).datetimepicker({
          format: 'DD/MM/YYYY'
        });
    }
  
    $(`#start,#end`).datetimepicker({
          format: 'DD/MM/YYYY'
        });
  $(document).ready(()=>{
  
    $('#tasksTable').DataTable( {
      "order": [[ 0, "desc" ]],
      dom: '<"top"Bf>rt<"bottom"lip><"clear">',
      lengthMenu: [
          [ 10, 25, 50,100, -1 ],
          [ '10 rows', '25 rows', '50 rows','100 rows', 'Show all' ]
      ],
      buttons: [
          {
              extend: 'copyHtml5',
              exportOptions: {
                  columns: [ 0, 1, 2, 3, 4, 5, 6]
              }
          },
          {
              extend: 'csv',
              exportOptions: {
                  columns: [ 0, 1, 2, 3, 4, 5, 6]
              }
          },
          {
              extend: 'excel',
              exportOptions: {
                  columns: [ 0, 1, 2, 3, 4, 5, 6]
              }
          },
          {
              extend: 'pdf',
              exportOptions: {
                  columns: [ 0, 1, 2, 3, 4, 5, 6]
              }
          },
          {
              extend: 'print',
              exportOptions: {
                  columns: [ 0, 1, 2, 3, 4, 5, 6]
              }
          },
      ]
    } );
  
    
  
    $('#addButton').on('click',()=>{
      $('#new_task_card').show();
      $('#hideButton').show();
      $('#addButton').hide();
    })
  
    $('#hideButton').on('click',()=>{
      $('#new_task_card').hide();
      $('#hideButton').hide();
      $('#addButton').show();
    })
  
    
  });
  
  
  
    function billable_modal(id){
      // is a function
        if ($(`#billable_modal${id}`).is(":checked")) {
          $(`#bill_amount_modal${id}`).show();
        }else{
          $(`#bill_amount_modal${id}`).hide();
        }
    }
  
    $('select').select2({
      width:'100%'
    });
  

    function confirmDelete(id) {
        let choice = confirm("Are you sure, you want to delete this task and related data ?")
        if (choice) {
            document.getElementById('delete-task-' + id).submit();
        }
    }


  

  
  
  </script>