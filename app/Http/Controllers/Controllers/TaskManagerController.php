<?php

namespace App\Http\Controllers;

use App\TaskManager;
use Illuminate\Http\Request;


use App\Models\Task;
use App\Models\User;
use App\Mail\TaskMail;
use App\Models\Currency;
use App\Models\Leads\Lead;

use App\Jobs\Tasks\StaffEmailJob;
use App\Models\Customer\Customer;
use Illuminate\Support\Facades\Auth;
class TaskManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route_active = '/task/manager';
        $salesperson = User::where('status','active')->get();
        $user = Auth::user();
        $tasks = TaskManager::orderby('id','desc')->get();
   
      
        // This start_date_js array is to prevent inline js and to remove onclick from the blade file.
        $start_date_js = [];
        $end_date_js = [];
        $update_relation_js = [];
        $full_day_js = [];
        $repeat_task_js = [];
        $start_time_js = [];
        $end_time_js = [];
        $billable_js = [];
        foreach ($tasks as $task) {
            $start_date_js[$task->id] = "onclick=dateChange($task->id)";
            $end_date_js[$task->id] = "onclick=dateChange($task->id)";
            $update_relation_js[$task->id] = "onchange=update_relation($task->id)";
            $full_day_js[$task->id] = "onchange=is_all_day_modal($task->id)";
            $repeat_task_js[$task->id] = "onchange=repeat_task_modal($task->id)";
            $start_time_js[$task->id] = "onchange=startTimeChange($task->id)";
            $end_time_js[$task->id] = "onchange=endTimeChange($task->id)";
            $billable_js[$task->id] = "onchange=billable_modal($task->id)";
        }
        $task_manager_ids = TaskManager::with('owner','requester')->get();


//        forEach( $task_manager_ids as $task){
  ////          dd($task->owner->name);
      //  }
        $task_ids = response()->json($task_manager_ids->modelKeys());
//dd($task_manager_ids);
        return view('crm.taskmanager.index', 
        compact([
            'route_active', 
            'salesperson',
            'task_ids',
            'tasks',
            'task_manager_ids',
            'start_date_js',
            'end_date_js'
        ]));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // return  response()->json($request->all());

        $validator = $request->validate([
            'title'=>'required',
            'requester_id'=>'required',
            'owner_id'=>'required',
            'priority'=>'required',
            'type'=>'required',
            'status'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'description'=>'required'
        ]);
    
            $task = TaskManager::create([
                'title'=>$request->title,
                'requester_id'=>$request->requester_id,
                'owner_id'=>$request->owner_id,
                'priority'=>$request->priority,
                'type'=>$request->type,
                'status'=>$request->status,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'description'=>$request->description
            ]);
            $notification = array(
                'message' => 'Task submitted successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskManager  $taskManager
     * @return \Illuminate\Http\Response
     */
    public function show(TaskManager $taskManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TaskManager  $taskManager
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskManager $taskManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskManager  $taskManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskManager $manager)
    {
        $validator = $request->validate([
            'title'=>'required',
            'requester_id'=>'required',
            'owner_id'=>'required',
            'priority'=>'required',
            'type'=>'required',
            'status'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        ]);

        if($validator){

            $manager->title = $request->title;
            $manager->requester_id = $request->requester_id;
            $manager->owner_id = $request->owner_id;
            $manager->priority = $request->priority;
            $manager->type = $request->type;
            $manager->status = $request->status;
            $manager->start_date = $request->start_date;
            $manager->end_date = $request->end_date;
            $manager->description = $request->description;
            $manager->save();
  

            $notification = array(
                'message' => 'Task updated successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskManager  $taskManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskManager $manager)
    {
        if ($manager->delete()) {
            $notification = array(
                'message' => 'Task deleted successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);  
        }else{
            $notification = array(
                'message' => 'Please try again or Contact admin!',
                'alert-type' => 'error'
            );
            return back()->with($notification);  
        }
    }
    
}
