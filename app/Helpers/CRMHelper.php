<?php
namespace App\Helpers;

use App\Models\SingleRowData;

class CRMHelper{
  
  
  /***
   * Get Cron Status
   */
  public static function cron_status(){
    $cron_status = SingleRowData::where(['field_name'=>'cron_status'])->first();
    return $cron_status->field_value;
  }

  /**
   *  Get Company Office Details from the SingleRowData
   */
  public static function company_details(){
    $company_details = [];
    $company_name = SingleRowData::where('field_name','company_name')->first();
    array_push($company_details, $company_name);
    $company_address = SingleRowData::where('field_name','company_address')->first();
    array_push($company_details, $company_address);
    $company_city = SingleRowData::where('field_name','company_city')->first();
    array_push($company_details, $company_city);
    $company_state = SingleRowData::where('field_name','company_state')->first();
    array_push($company_details, $company_state);
    $company_country = SingleRowData::where('field_name','company_country')->first();
    array_push($company_details, $company_country);
    $company_zip = SingleRowData::where('field_name','company_zip')->first();
    array_push($company_details, $company_zip);
    $company_phone = SingleRowData::where('field_name','company_phone')->first();
    array_push($company_details, $company_phone);
    $company_email = SingleRowData::where('field_name','company_email')->first();
    array_push($company_details, $company_email);
    $logo_file = SingleRowData::where('field_name','logo_file')->first();
    array_push($company_details, $logo_file);
    return $company_details;
}



}


?>