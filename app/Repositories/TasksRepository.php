<?php

namespace App\Repositories;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TasksRepository
{
    /**
     * @var task
     */
    protected $task;

    /**
     * @TasksRepository Constructory
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function getTotalTasksCount(){
        $query = Task::query();
        if (Auth::user()->role_id != 1) {
            $query = $query->where('owner_id','=',Auth::user()->id)->orWhere('created_by_id','=',Auth::user()->id);
        }
        return $query->count();
    }

    public function getTotalCompletedTasksCount(){
        $query = Task::where('status','=','Completed');
        if (Auth::user()->role_id != 1) {
            $query = $query->where('owner_id','=',Auth::user()->id)->orWhere('created_by_id','=',Auth::user()->id);
        }
        return $query->count();
    }

    public function getCompletedTasksAvg(){
        $total_tasks = $this->getTotalTasksCount();
        $total_completed_tasks = $this->getTotalCompletedTasksCount();
        if ($total_tasks > 0) {
            return ($total_completed_tasks*100)/$total_tasks;
        }else{
            return '0';
        }
    }
}

?>