@extends('crm.layouts.app')

@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-primary btn-sm mb-1" id="addButton">{{__('Add New Task')}}</button>
									<button type="button" class=" btn btn-secondary btn-sm mb-1 d-hide" id="hideButton"> {{__('Hide Task Window')}}</button>
				<div class="card d-hide bg-light-gray" id="new_task_card">
					<form action="{{url('task/manager')}}" method="post">
						@csrf
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
					
										<div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                        <label for=""><span class="text-danger">*</span> {{__('Title ?')}} </label>
                                                       <input type="text" class="form-control form-control-sm" name="title" required placeholder="Task title" autocomplete="off">
                                                </div>
                                        </div>
											<div class="col-md-4">
													<div class="form-group">
															<label for=""><span class="text-danger">*</span> {{__('Request User ?')}} </label>
															<select name="requester_id"  class="relation form-control form-control-sm" required>
                                                            @foreach ($salesperson as $user)
                                                            
                                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                                            @endforeach
															</select>
													</div>
											</div>

											<div class="col-md-4">
													<div class="form-group">

															<label for=""><span class="text-danger">*</span> {{__('Assigned To (Task
																Owner)')}}</label>
															<select name="owner_id" class="form-control form-control-sm" required>
																	@foreach ($salesperson as $user)
																	<option value="{{$user->id}}">{{$user->name}}</option>
																	@endforeach
															</select>
													</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
														<label for="">{{__('Priority')}} </label>
														<select name="priority" class="form-control form-control-sm" required>
																@php
																$priorities = [
																	__('High'),
																	__('Medium'),
																	__('Low')
																];
																@endphp
																@foreach ($priorities as $priority)
															@if($priority == 'Low')
                                                            <option value="{{$priority}}" selected>{{$priority}}</option>
                                                            @else
                                                            <option value="{{$priority}}">{{$priority}}</option>
                                                            @endif
																@endforeach
														</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="">{{__('Type')}}</label>
													<select name="type" class="form-control form-control-sm" required>
															@php
															$types = [
																__('Developing'), 
																__('Design'), 
																__('Technical Support'), 
																__('Tools'),
                                                                __('User Access'), 
																__('Inf. Applications'), 
																__('Other')
																]
															@endphp
															@foreach ($types as $type)
                                                            @if($type == 'Other')
                                                            <option value="{{$type}}" selected>{{$type}}</option>
                                                            @else
                                                            <option value="{{$type}}">{{$type}}</option>
                                                            @endif


														
															@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="">{{__('Status')}}</label>
													<select name="status" class="form-control form-control-sm" required>
															@php
															$statusess = [
                                                                __('Assigned'),
																__('Waiting'),
																__('Started'), 
																__('In progress'), 
																__('Completed'), 
																__('Rejected')
																]
															@endphp
															@foreach ($statusess as $status)

                                                            @if($status == 'Assigned')
                                                            <option value="{{$status}}" selected>{{$status}}</option>
                                                            @else
                                                            <option value="{{$status}}">{{$status}}</option>
                                                            @endif



														
															@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-4">
													<div class="form-group">



												
														<label>{{__('Task Start Date')}}:</label>
														<div class="input-group date" id="start" data-target-input="nearest">
																<input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#start" name="start_date">
																<div class="input-group-append" data-target="#start" data-toggle="datetimepicker">
																		<div class="input-group-text"><i class="fa fa-calendar"></i></div>
																</div>
														</div>
															
													</div>
											</div>

											<div class="col-md-4">
                                            <div class="form-group">



												
														<label>{{__('Task End Date')}}:</label>
														<div class="input-group date" id="end" data-target-input="nearest">
																<input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#end" name="end_date">
																<div class="input-group-append" data-target="#end" data-toggle="datetimepicker">
																		<div class="input-group-text"><i class="fa fa-calendar"></i></div>
																</div>
														</div>
															
													</div>
											</div>											


                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">{{__('Task Description')}} </label>
                                            <textarea name="description" class="form-control form-control-sm" rows="3"
                                                    required></textarea>
                                    </div>
								</div>

							</div>

							
							<div class="row">
									<div class="col-md-12 com-sm-12 mt-3 mx-auto">
											<button class="btn btn-primary btn-block ">
													{{__('Save Task')}}
											</button>
									</div>
								
								
							</div>
						</div>
					</form>
				</div>
	
										<div class="card card-secondary">
												<div class="card-header bg-gray">
														<h3 class="card-title">{{__('Manage Tasks')}}</h3>
												</div>
												<div id="new_task_window"></div>
												<div class="card-body">
													<div class="table-responsive">
													<table id="tasksTable" class="table table-bordered table-striped">
														<thead>
															<th>{{__('ID')}}</th>
															<th>{{__('Task')}}</th>
                                                            <th>{{__('Requester')}}</th>
                                                            <th>{{__('Owner')}}</th>
															<th>{{__('Start Date')}}</th>
                                                            <th>{{__('End Date')}}</th>
															<th>{{__('Type')}}</th>
															<th>{{__('Status')}}</th>
															<th>{{__('Priority')}}</th>													
															<th>{{__('Actions')}}</th>
														</thead>
														<tbody>
															@foreach ($task_manager_ids as $task)
																	<tr>
																		<td>{{@$task->id}}</td>
																		<td>{{@$task->title}}</td>
                                                                        <td>{{@$task->requester->name}}</td>
                                                                        <td>{{@$task->owner->name}}</td>
																		<td>{{@$task->start_date}}</td>
                                                                        <td>{{@$task->end_date}}</td>
																		<td>{{@$task->type}}</td>
																		<td>{{@$task->status}}</td>
																		<td>
                                                                        
                                                                        @if(@$task->priority == 'Low')
                                                                        
                                                                        <i class="fas fa-flag text-success mr-1"></i>   {{@$task->priority}}
                                                                        
                                                                        @elseif(@$task->priority == 'Medium')

                                                                        <i class="fas fa-flag text-warning mr-1"></i>   {{@$task->priority}}
                                                                        @else
                                                                        <i class="fas fa-flag text-danger mr-1"></i>   {{@$task->priority}}
                                                                          @endif
                                                                        
                                                                        </td>
																	
																		<td>
																			<span>
	
																				@can('update-lead', User::class)
																				
																				<a class="text-primary mr-2" href="#" data-toggle="modal" data-target="#editTask{{$task->id}}">
																						<i class="fas fa-edit"></i>
																					</a>

{{-- Edit Modal starts --}}
<div class="modal fade bd-example-modal-md" id="editTask{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" >

    <div class="modal-content "  style="border-radius:0!important">
			<div class="modal-header text-info ">
				{{__('Task Edit')}} &nbsp;  #{{$task->id}}
			</div>
            <form method="POST" action="{{url('task/manager', $task)}}">
					@csrf
					@method('PUT')	
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
					
										<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                        <label for=""><span class="text-danger">*</span> {{__('Title ?')}} </label>
                                                       <input type="text" value="{{@$task->title}}" class="form-control form-control-sm" name="title" required placeholder="Task title" autocomplete="off">
                                                </div>
                                        </div>
											<div class="col-md-6">
													<div class="form-group">
															<label for=""><span class="text-danger">*</span> {{__('Request User ?')}} </label>
															<select name="requester_id"  class="relation form-control form-control-sm" required>
                                                            @foreach ($salesperson as $user)
                                                            
                                                            @if($task->requester_id == $user->id)
                                                            <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                                            @else
                                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                                            @endif
                                                          
                                                            @endforeach
															</select>
													</div>
											</div>

											<div class="col-md-6">
													<div class="form-group">

															<label for=""><span class="text-danger">*</span> {{__('Assigned To (Task
																Owner)')}}</label>
															<select name="owner_id" class="form-control form-control-sm" required>
																	@foreach ($salesperson as $user)
                                                                    @if($task->owner_id == $user->id)
                                                            <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                                            @else
                                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                                            @endif
                                                          
                                                          
																	@endforeach
															</select>
													</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
														<label for="">{{__('Priority')}} </label>
														<select name="priority" class="form-control form-control-sm" required>
																@php
																$priorities = [
																	__('High'),
																	__('Medium'),
																	__('Low')
																];
																@endphp
																@foreach ($priorities as $priority)
                                                                @if($task->priority == $priority)
                                                            <option value="{{$priority}}" selected>{{$priority}}</option>
                                                            @else
                                                            <option value="{{$priority}}">{{$priority}}</option>
                                                            @endif
                                                          
																@endforeach
														</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="">{{__('Type')}}</label>
													<select name="type" class="form-control form-control-sm" required>
															@php
															$types = [
                                                                __('Developing'), 
																__('Design'), 
																__('Technical Support'), 
																__('Tools'),
                                                                __('User Access'), 
																__('Inf. Applications'), 
																__('Other')
																]
															@endphp
															@foreach ($types as $type)
                                                            @if($task->type == $type)
                                                            <option value="{{$type}}" selected>{{$type}}</option>
                                                            @else
                                                            <option value="{{$type}}">{{$type}}</option>
                                                            @endif


														
															@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="">{{__('Status')}}</label>
													<select name="status" class="form-control form-control-sm" required>
                                                    @php
															$statusess = [
                                                                __('Assigned'),
																__('Waiting'),
																__('Started'), 
																__('In progress'), 
																__('Completed'), 
																__('Rejected')
																]
															@endphp
															@foreach ($statusess as $status)

                                                            @if($task->status == $status)
                                                            <option value="{{$status}}" selected>{{$status}}</option>
                                                            @else
                                                            <option value="{{$status}}">{{$status}}</option>
                                                            @endif



														
															@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-4">
											<div class="form-group">
											<label>{{__('Task Start Date')}}:</label>
										

                                            <div class="input-group date" id="start_date{{$task->id}}" data-target-input="nearest" >
														<input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#start_date{{$task->id}}" name="start_date" value="{{$task->start_date}}" >
														<div class="input-group-append" data-target="#start_date{{$task->id}}" data-toggle="datetimepicker">
																<div class="input-group-text" {{$start_date_js[$task->id]}} ><i class="fa fa-calendar"></i></div>
														</div>
												</div>
												
										</div>
											</div>

											<div class="col-md-4">
                                                <div class="form-group">
                                                    <label>{{__('Task End Date')}}:</label>
                                                
        
                                                        <div class="input-group date" id="end_date-update{{$task->id}}" data-target-input="nearest" >
                                                                <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#end_date-update{{$task->id}}" name="end_date" value="{{$task->start_date}}" >
                                                                <div class="input-group-append" data-target="#end_date-update{{$task->id}}" data-toggle="datetimepicker">
                                                                        <div class="input-group-text" {{$end_date_js[$task->id]}} ><i class="fa fa-calendar"></i></div>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
											</div>											


                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">{{__('Task Description')}} </label>
                                            <textarea name="description" class="form-control form-control-sm" rows="3"
                                                    required>{{$task->description}}</textarea>
                                    </div>
								</div>

							</div>

							<div id="repeat_window_show"></div>
							<div class="row">
									<div class="col-md-12 com-sm-12 mt-3">
											<button class="btn btn-secondary btn-block ">
													{{__('Update Task')}}
											</button>
									</div>
							
								
							</div>
						</div>
					</form>
    </div>
  </div>
</div>
{{-- edit modal ends --}}
																				@endcan
			
                                                                                @can('delete-lead', User::class)
																				<span id="delbtn{{@$task->id}}"></span>
																					<form id="delete-task-{{$task->id}}"
																							action="{{ url('task/manager', $task) }}"
																							method="POST">
																							@method('DELETE')
																							@csrf
																					</form>
																			
																			</span>
                                                                            @endcan  
																		</td>
																	</tr>
															@endforeach
														</tbody>
														<tfoot>
                                                        <th>{{__('ID')}}</th>
															<th>{{__('Task')}}</th>
                                                            <th>{{__('Requester')}}</th>
                                                            <th>{{__('Owner')}}</th>
															<th>{{__('Start Date')}}</th>
                                                            <th>{{__('End Date')}}</th>
															<th>{{__('Type')}}</th>
															<th>{{__('Status')}}</th>
															<th>{{__('Priority')}}</th>													
															<th>{{__('Actions')}}</th>
														</tfoot>
													</table>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		</section>
</div>


{{-- ANCHOR MODAL VIEW task --}}

@endsection

@section('scripts')
@include('crm.taskmanager.index_js')
@endsection
