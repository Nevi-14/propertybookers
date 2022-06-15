<?php

namespace App\Mail;

use App\Models\Task;
use App\Helpers\CRMHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TaskMail extends Mailable
{
    use Queueable, SerializesModels;
    public $task;
    public $currency;
    public $company_details;

    public function __construct(Task $task, $currency)
    {
        $this->task = $task;
        $this->currency = $currency;
        $this->company_details = CRMHelper::company_details();
    }

    public function build()
    {
        $subject = config('app.name').__(" | Task #").$this->task->id;
        return $this
        ->subject($subject)
        ->markdown('crm.task.email.staff');
    }
}
