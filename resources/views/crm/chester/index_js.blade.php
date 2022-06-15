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

    function load_data(date_sort = '', custom_range = '',team = '', acquisition_id='', owner_id = '', lead_status_id = '')
    {
      var table =      $('#leadsTable').DataTable({
          "order": [[ 0, "desc" ]],
          dom: '<"top"Bf>rt<"bottom"lip><"clear">',
          "columnDefs": [{
            "defaultContent": "-",
            "targets": "_all"
          }],
          pageLength: 5,
        lengthMenu: [
            [ 5, 10, 20,30, -1 ],
            [ '5 rows', '10 rows', '20 rows','30 rows', 'Show all' ]
        ],
        processing: true,
        serverSide: true,
        language: { processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only"></span> '},
        ajax: {
          ajax: "{{ route('tracker.index') }}",
          data:{
            date_sort: date_sort, 
            custom_range: custom_range, 
            team:team,
            acquisition_id: acquisition_id,
            owner_id: owner_id,
            lead_status_id: lead_status_id
          }
         
        },
        
        columns: [
            {
          data:'id',
          name:'id',
          className: 'text-info text-bold',
          render: function ( data, type, row ) {
            return 'lead #'+ data
        },
          },
          {
          data:'stage',
          name:'stage',
          render: function ( data, type, row ) {
            return 'Stage : '+ data
        },
          },
          {
          data:'agent.name',
          name:'agent.name',
          render: function ( data, type, row ) {
            return 'Agent : '+ data
        },
          },
          {
          data:'teams.name',
          name:'teams.name',
          render: function ( data, type, row ) {
            return 'Team : '+ data
        },
          },
       

          {
          data:'status.name',
          name:'status.name',
          render: function ( data, type, row ) {
            return 'Status : '+ data
        },
          },
  
          {
          data:'created_at',
          name:'created_at',
          render: function(data) {
                        return 'Created on '+ moment(data).format('DD/MM/YYYY');
                    }
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
                text: '<i class="fas fa-plus"></i>',
                titleAttr: 'CREATE A NEW LEAD',
                action: function ( e, dt, node, config ) {
                  $('#exampleModal').modal('show')
                }
            },
            {
                text: '<i class="fas fa-filter"></i>',
                titleAttr: 'FILTER OPTIONS',
                action: function ( e, dt, node, config ) {
                  $('#filter').modal('show')
                }
            },
            {
                text: '<i class="fas fa-users"></i>',
                titleAttr: 'CREATE A NEW LEAD TEAM',
                action: function ( e, dt, node, config ) {
                  $('#team').modal('show')
                }
            },
            {
                text: '<i class="far fa-clock"></i>',
                titleAttr: 'CREATE A NEW LEAD STATUS',
                action: function ( e, dt, node, config ) {
                  $('#status').modal('show')
                }
            },
            {
                text: '<i class="fas fa-search-location"></i>',
                titleAttr: 'CREATE A NEW LEAD STATE',
                action: function ( e, dt, node, config ) {
                  $('#state').modal('show')
                }
            },
    
            {
              text:'<i class="fas fa-file-pdf"></i>',
                extend: 'pdf',
                titleAttr: 'CREATE A PDF FILE',
                exportOptions: {
                  columns: [ 0, 1, 2, 3, 4, 5]
                }
            },
            
            {
                text:'<i class="fas fa-file-excel "></i>',
                extend: 'excel',
                titleAttr: 'CREATE AN EXCEL FILE',
                exportOptions: {
                  columns: [ 0, 1, 2, 3, 4, 5]
                }
            },
            {
                text: '<i class="fas fa-sync-alt"></i>',
                titleAttr: 'RESET TABLE AND FILTER OPTIONS',
                action: function ( e, dt, node, config ) {

      $('#date_sort').val(null).trigger("change");
      $('#custom_range').val(null).trigger("change");
        $('#team').val(null).trigger("change");
      $('#acquisition_id').val(null).trigger("change");
      $('#owner_id').val(null).trigger("change");
      $('#lead_status_id').val(null).trigger("change");
      $('#leadsTable').DataTable().destroy();
      load_data();
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
      var team = $('#team_filter').val();
      var acquisition_id = $('#acquisition_id').val();
      var owner_id = $('#owner_id').val();
      var lead_status_id = $('#lead_status_id').val();


      
      if ( date_sort != null || owner_id != null || owner_id != null  || lead_status_id != null ) {
        $('#leadsTable').DataTable().destroy();
        load_data(date_sort, custom_range, team,acquisition_id,owner_id, lead_status_id);
      
      } 
      else {
        alert('Select at least one filter!');
      }

    });

    $('#refresh').click(function(){
      $('#team').val(null).trigger("change");
      $('#acquisition_id').val(null).trigger("change");
      $('#owner_id').val(null).trigger("change");
      $('#lead_status_id').val(null).trigger("change");
      
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