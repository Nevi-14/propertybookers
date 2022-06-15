@extends('crm.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
  <!-- Main content -->
  <div class="container-fluid">

    <div class="fixed-plugin">
      <ul>
      <li class="zoom"> <a  id="files-btn" class="btn text-info bold" > <i class="fas fa-folder-open"></i></a></li>
      <li class="zoom"> <a  id="notes-btn" class="btn text-info bold" > <i class="fas fa-comment"></i></a></li>
        <li class="zoom"> <a data-toggle="modal" class="btn text-info bold" data-target="#details"> <i class="fas fa-info-circle"></i></a></li>
      
        <li class="zoom"> <a target="blank" class="btn text-info bold" href="{{$propertyTracker->propertyowner->propertydetails->first()->zillow_url}}"> <i class="fas fa-link"></i></a></li>
       
        <li class="zoom"> <a data-toggle="modal" class="btn text-info bold " data-target="#appointment"> <i class="fas fa-calendar-plus"></i></a></li>  
        <li class="zoom"> <a data-toggle="modal" class="btn text-info bold disabled" data-target="#calculator"> <i class="fas fa-calculator"></i></a></li>
        <li class="zoom"> <a target="blank" class="btn text-info bold disabled" href=""> <i class="fas fa-envelope"></i></a></li>
      







        <!--   <li> <a target="blank" href="https://account.oncehub.com/signin?login_challenge=d7e0478a377342528ed878c8223517c7" class="whatsapp"> <img src="images/onehub.png" alt=""
                  class="pic-icon zoom"></a></li>-->
      </ul>
    </div>


    <div class="row">

    <div class="col-10 col-md-10 mx-auto  mt-4">
        <h2 class="text-bold text-info ml-2">WHOLESALING SOLUTIONS</h2>
      </div>
      



      <div class="col-10 col-md-10   mx-auto  mt-4">
        <div class="accordion sordable" id="accordionExample">
        
        <!-- FILES  -->

        @include('crm.chester.general.files')
               <!-- NOTES  -->

               @include('crm.chester.general.notes')
                      <!-- APPOINTMENTS  -->

        @include('crm.chester.general.appointments')

               <!-- REMINDERS  -->

               @include('crm.chester.general.reminders')

                      <!-- FOLLOW UPS  -->

        @include('crm.chester.general.follow-ups')






        <!-- STAGE 1 -->


        @include('crm.chester.stages.lead')


        <!-- STAGE 2 -->
    @include('crm.chester.stages.prospect')

     
        <!-- STAGE 3 -->
        @include('crm.chester.stages.opportunity')

    
          </div>

        </div>

      </div>

    </div>




  </div>


</div>
<!-- /.content -->
</div>

{{-- ANCHOR STATUS MODAL starts here --}}
<div class="modal fade" id="addStatusModal" tabindex="-1" role="dialog" aria-labelledby="addStatusLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-light-gray">
      <div class="modal-header bg-gray">
        <h5 class="modal-title" id="addStatusLabel">{{__('Add Status')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="{{url('lead')}}">
          @csrf
          <label for="">{{__('Enter a Unique Status')}}</label>

          <input type="hidden" name="return_to" value="lead">
          <input type="text" name="name" id="new_lead_status" class="form-control form-control-sm" />
          @if($errors)
          @foreach ($errors->all() as $error)
          <div class="text text-danger">{{ $error }}</div>
          @endforeach
          @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
        <button type="submit" class="btn btn-info" id="addStatusBtn" data-dismiss="modal">{{__('Add Status')}}</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- STATUS MODAL starts here --}}

{{-- ANCHOR SOURCE MODAL starts here --}}
<div class="modal fade" id="addSourceModal" tabindex="-1" role="dialog" aria-labelledby="addSourceLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content bg-light-gray">
      <div class="modal-header bg-gray">
        <h5 class="modal-title" id="addSourceLabel">{{__('Add Source')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST">
          <label for="">{{__('Enter a Unique Source')}}</label>
          <input type="hidden" name="return_to" value="lead">
          <input type="text" name="name" id="new_lead_source" class="form-control form-control-sm" />
          @if($errors)
          @foreach ($errors->all() as $error)
          <div class="text text-danger">{{ $error }}</div>
          @endforeach
          @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
        <button type="submit" class="btn btn-info" id="addSourceBtn" data-dismiss="modal">{{__('Add Source')}}</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- SOURCE MODAL starts here --}}


{{-- ANCHOR TITLE MODAL starts Here --}}
<div class="modal fade" id="addTitleModal" tabindex="-1" role="dialog" aria-labelledby="addTitleLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-light-gray">
      <div class="modal-header bg-gray">
        <h5 class="modal-title" id="addTitleLabel">{{__('Add Title')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST">
          <label for="">{{__('Enter a Unique Title')}}</label>
          <input type="hidden" name="return_to" value="lead">
          <input type="text" name="name" id="new_lead_title" class="form-control form-control-sm" />
          @if($errors)
          @foreach ($errors->all() as $error)
          <div class="text text-danger">{{ $error }}</div>
          @endforeach
          @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
        <button type="submit" class="btn btn-info" id="addTitleBtn" data-dismiss="modal">{{__('Add Title')}}</button>
      </div>
      </form>
    </div>
  </div>
</div>
@include('crm.chester.notes')
@include('crm.team.create')
@include('crm.status.create')
@include('crm.oncehub.create')
@include('crm.states.create')
@include('crm.chester.details')
@include('crm.chester.calculator')
@include('crm.appointments.create')
@include('crm.chester.files')
{{-- Title Modal Ends Here --}}
@endsection


@section('scripts')
<script>

$('.meeting').click(function() {

   if($('.meeting').is(':checked')) {

    var value = $(this).val();

    if( value == 'N'){
      $('#appointment-scheduler').show();
      }else{
        $('#appointment-scheduler').hide();
      }


   
    
    
    }
});

  
$('#type').on('change',()=>{
    var reminder =$('#type').val();

      if( reminder == 'follow-up' || reminder == 'reminder'){
        $('#date_range_col').show();
      }else{
        $('#date_range_col').hide();
      }
  });



  $('.add-new-appointment').on('click',() =>{
    var reminder = $('.add-new-appointment').val();
      alert(reminder)
    if ($('.add-new-appointment').is(':checked')) {

var appointment_row = `
<div class="card-body ">
<div class="form-row">
<div class="form-group col-md-12">
<h5 class="card-title text-bold text-info text-uppercase">New appointment</h5>
</div>
<div class="form-group col-md-12">
             <div for="" class="mb-2">{{__('Subject')}}</div>
               <input name="subject" type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Appointment title" required autocomplete="off">
             </div>
               <div class="form-group col-md-6">
               <div for="" class="mb-2">{{__('Date')}}</div>
               <input name="date" type="date" class="form-control form-control-sm" required >
               </div>
               <div class="form-group col-md-6">
               <div for="" class="mb-2">{{__('Time')}}</div>
               <input name="time" type="time" class="form-control form-control-sm" required >
               </div>

</div>
</div>

`;

$('#new-appointment').prepend(appointment_row);
}else{

$('#new-appointment').html('');

}


 })


  $('#type').on('click', () => {



    var product_row = `
    <div class="col-12 col-md-6 mb-2">
<div class="row">
<div class="col-md-12">
                      <div class="mb-2">{{__('Timeline')}}</div>
                      <input type="date" name="timeline[]" class="form-control form-control-sm" required> 
                    </div>
                    <div class="col-md-12">
                      <div class="mb-2">{{__('Timeline Note')}}</div>
                      <textarea class="form-control form-control-sm" rows="5" name="timelinenote[]" placeholder="{{__('Notes Here')}}" required></textarea>
                    </div> 
</div>
    </div> 

    `;

    $('#timelinesection').prepend(product_row);

  })
</script>
<script type="application/javascript">
  $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $('.custom-file-label').html(fileName);
  });
</script>
<script>  

$('#files-btn').on('click', function(){

$('#files-show').toggle('show')

})

$('#notes-btn').on('click', function(){

$('#notes-show').toggle('show')

})

      $(function () {  
          $(".sordable").sortable();  
          $(".sordable").disableSelection();  
      });  
  </script>  
@include('crm.chester.create_js')


@endsection