<script>
  $(function () {
    "use strict";
    $('#date_sort').on('change',()=>{
    var date_sort = $('#date_sort').val();
      if(date_sort == 'custom'){
        $('#date_range_col').show();
      }else{
        $('#date_range_col').hide();
      }
  });
  
  //Date range picker
    $('#custom_range').daterangepicker({
      locale: {
        format: 'YYYY-MM-DD'
      }
    })

    $('.input-daterange').datepicker({
      todayBtn:'linked',
      format:'yyyy-mm-dd',
      autoclose:true
    });

    load_data();

    function load_data(date_sort = '', custom_range = '', owner_id = '', lead_source_id = '', lead_status_id = '', score = '', prospect_status = '',  lead_temprature = '')
    {
        $('#leadsTable').DataTable({
          "order": [[ 0, "desc" ]],
          dom: '<"top"Bf>rt<"bottom"lip><"clear">',
          "columnDefs": [{
            "defaultContent": "-",
            "targets": "_all"
          }],
          
        lengthMenu: [
            [ 10, 25, 50,100, -1 ],
            [ '10 rows', '25 rows', '50 rows','100 rows', 'Show all' ]
        ],
        processing: true,
        serverSide: true,
        ajax: {
          url:'{{ url("lead") }}',
          data:{
            date_sort: date_sort, 
            custom_range: custom_range, 
            owner_id: owner_id, 
            lead_source_id: lead_source_id, 
            lead_status_id: lead_status_id, 
            score: score,
            prospect_status: prospect_status,
            lead_temprature: lead_temprature
          }
        },
        
        columns: [
          {
          data:'lead_id',
          name:'lead_id'
          },
          {
          data:'name',
          name:'name'
          },
          {
          data:'email',
          name:'email'
          },
          {
          data:'phone',
          name:'phone'
          },
          {
          data:'lead_owner',
          name:'lead_owner',
          },
          {
          data:'lead_source',
          name:'lead_source',
          },
          {
          data:'lead_status',
          name:'lead_status',
          },
          {
          data:'prospect_status',
          name:'prospect_status',
          },
          {
          data:'lead_temprature',
          name:'lead_temprature',
          },        
          {
          data:'score',
          name:'score',
          },
          {
          data:'created_at',
          name:'created_at'
          },
          {
              data: 'action',
              name: 'action',
              orderable: false
          }
        ],
        buttons: [
          // 'colvis',
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
        ],
        initComplete: ()=>{

        }
      });
    }


    $('#filter').click(function () {
      var date_sort = $('#date_sort').val();
      var custom_range = $('#custom_range').val();
      var owner_id = $('#owner_id').val();
      var lead_source_id = $('#lead_source_id').val();
      var lead_status_id = $('#lead_status_id').val();
      var score = $('#score').val();
      var prospect_status = $('#prospect_status').val();
      var lead_temprature = $('#lead_temprature').val();
      
      if (date_sort != null || owner_id != null || lead_source_id != null || lead_status_id != null || score != null || prospect_status != null || lead_temprature != null) {
        $('#leadsTable').DataTable().destroy();
        load_data(date_sort, custom_range, owner_id, lead_source_id, lead_status_id, score, prospect_status, lead_temprature);
      } 
      else {
        alert('Select at least one filter!');
      }

    });

    $('#refresh').click(function(){
      $('#date_sort').val('');
      $('#custom_range').val('');
      $('#owner_id').val('');
      $('#lead_source_id').val('');
      $('#lead_status_id').val('');
      $('#score').val('');
      $('#prospect_status').val('');
      $('#lead_temprature').val('');
      
      $('#leadsTable').DataTable().destroy();
      load_data();
    });

  });

  function confirmDelete(id){
      let choice = confirm("{{__('Are you sure, you want to delete this lead and related data ?')}}")
      if(choice){
          document.getElementById('delete-lead-'+id).submit();
      }
  }

</script>