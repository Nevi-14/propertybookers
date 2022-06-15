<?php

namespace App\Mail;

use App\Helpers\CRMHelper;
use App\Models\Reminder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reminder;
    public $company_details;

    public function __construct(Reminder $reminder)
    {
        $this->reminder = $reminder;
        $this->company_details = CRMHelper::company_details();
    }

    public function build()
    {
        $subject = config('app.name').__(" | Reminder #").$this->reminder->id;
        return $this
        ->subject($subject)
        ->markdown('crm.reminder.email.staff');
    }
}
