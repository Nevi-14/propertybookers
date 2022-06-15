<?php
namespace App\Services;

use App\Repositories\InvoiceRepository;
use App\Repositories\LeadsRepository;
use App\Repositories\TasksRepository;

class DashboardAllService
{
    protected $leadsRepository, $tasksRepository, $invoiceRepository;

    public function __construct(
        LeadsRepository $leadsRepository,
        TasksRepository $tasksRepository,
        InvoiceRepository $invoiceRepository
    )
    {
        $this->leadsRepository = $leadsRepository;
        $this->tasksRepository = $tasksRepository;
        $this->invoiceRepository = $invoiceRepository;
    }

    public function leadsCount(){
        return [
            'total_leads'=> $this->leadsRepository->getTotalLeadsCount(),
            'total_won_leads_count'=> $this->leadsRepository->getTotalWonLeadsCount(),
            'won_leads_avg'=> $this->leadsRepository->getWonLeadsAvg()
        ];
    }


    public function tasksCount(){
        return [
            'total_tasks'=> $this->tasksRepository->getTotalTasksCount(),
            'total_completed_tasks_count'=> $this->tasksRepository->getTotalCompletedTasksCount(),
            'completed_tasks_avg'=> $this->tasksRepository->getCompletedTasksAvg()
        ];
    }

    public function invoiceCount(){
        return [
            'total_invoices' => $this->invoiceRepository->getTotalInvoicesCount(),
            'total_paid_invoices_count' => $this->invoiceRepository->getTotalPaidInvoicesCount(),
            'paid_invoices_avg' => $this->invoiceRepository->getPaidInvoicesAvg(),
            'invoice_revenue' => $this->invoiceRepository->revenue()
        ];
    }


}
?>
