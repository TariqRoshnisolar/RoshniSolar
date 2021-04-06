<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Composesms_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertrecord($data){
        $query = $this->db->insert('composesmsreport', $data);
        if($query){
            return $this->db->insert_id();
        }
        else{
            return false;
        }
    }

    public function updaterecord($id, $smssendstatus){
        $query = $this->db->where('id', $id)->update('composesmsreport', $smssendstatus);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    public function getreport($fromdate, $todate, $mobileno, $sms_type_id){

        $query = $this->db->query("select report.*, sms_types.title as 'smstype' from composesmsreport report inner join sms_types on (sms_types.id=report.smstype) where date(report.date) >= '$fromdate' and date(report.date) <= '$todate' and (report.mobile='$mobileno' or '$mobileno'='') and (report.smstype='$sms_type_id' or '$sms_type_id'='all') order by `date` DESC ");

        if($query){
            return $query->result_array();
        }
        elseif(!$query){
            return 'Please check database query';
        }
    }

    public function getpendingsms(){
        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d H:i:s');
        $query = $this->db->query("select sms.* from composesmsreport sms where sms.status='pending' and sms.date <= '$date'; ");
        if($query){
            $smsrecievers = $query->result_array();
            return $smsrecievers;
        }
    }

    public function totalsentsmscount($fromdate, $todate){
        $query = $this->db->query("select count(com.id) as smscount from composesmsreport com where com.status='sent' and date(com.date) >= '$fromdate' and date(com.date) <= '$todate'");
        if($query){
            $smscount = $query->row_array();
            return $smscount = $smscount['smscount'];
        }

    }

    

}
