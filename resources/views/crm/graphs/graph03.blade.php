
<div class="row">
  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-funnel-dollar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ucwords(__('total revenue'))}}</span>
        <span class="info-box-number">
          {{@$base_currency->symbol ?? '$'}}{{@$invoice_count['invoice_revenue']}}
        </span>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-funnel-dollar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ucwords(__('paid invoices'))}}</span>
        <span class="info-box-number">
          {{@$invoice_count['total_paid_invoices_count']}}/{{@$invoice_count['total_invoices']}} ({{number_format(@$invoice_count['paid_invoices_avg'], 2)}}<small>%</small>)
        </span>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon elevation-1 bg-info"><i class="fas fa-funnel-dollar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ucwords(__('won leads'))}}</span>
        <span class="info-box-number">
          {{@$leads_count['total_won_leads_count']}}/{{@$leads_count['total_leads']}} ({{number_format(@$leads_count['won_leads_avg'], 2)}}<small>%</small>)
        </span>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-funnel-dollar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ucwords(__('completed tasks'))}}</span>
        <span class="info-box-number">
          {{@$tasks_count['total_completed_tasks_count']}}/{{@$tasks_count['total_tasks']}} ({{number_format(@$tasks_count['completed_tasks_avg'], 2)}}<small>%</small>)
        </span>
      </div>
    </div>
  </div>

</div>