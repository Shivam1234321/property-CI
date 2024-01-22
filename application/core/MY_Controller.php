<?php
 defined('BASEPATH') OR exit('No direct script access allowed.');

 class MY_Controller extends CI_Controller{
     var $data;

     function __construct(){
        parent:: __construct();

        date_default_timezone_set("Asia/Kolkata");
        
        $this->data=array(
            'company_name' => '#Sachin.',

            'company_link' => '#',

            'user_type' => '',
    
            'website' => '',

            'app_name' => 'Sachin',

            'app_link' => '',

            'date'=>date("Y-m-d"),

            'time'=>date("h:i:s a"),

            'day'=>date("l"),

            'otp'=>rand(100000,999999),
        );


     }

     public function status(){

         $output['status'] = 1;
         $output['msg'] = "";
         $output['data'] = array();

         $id = $this->input->post("id");
         $table = $this->input->post("table");
         $field = $this->input->post("field");
         $this->db->trans_start();
         $row = $this->dm->getSingleData($table,$field,$id);

         if($row['status']==1){
            $data['status']=0;
         }else{
            $data['status']=1;
         }

         $res=$this->dm->updateWhere($table,$data,array($field=>$id));

         if($res){
            $output['status'] = 1;
            $output['msg'] = "Status updated";
            $this->db->trans_complete();
         }else{
            $output['msg'] = "Status not updated";
            $this->db->trans_rollback();
         }
         echo json_encode([$output],JSON_UNESCAPED_SLASHES);
     }

     public function delete(){
        $output['status']=1;
        $output['msg']="";
        $output['data']=array();

        $id=$this->input->post("id");
        $table=$this->input->post("table");
        $field=$this->input->post("field");
        $this->db->trans_start();
        $res=$this->dm->getSingleData($table,$field,$id);
        $image="";
        if(!empty($res['image'])){
          $image=$res['image'];
        }

        $row=$this->dm->deleteData($table,array($field=>$id));

        if($row){
            if(!empty($res['image'])){
               unlink("./".$res['image_url'].$image) or die("not unlink");
            }
            $output['status']=1;
            $output['msg']=ucwords($table)." data id deleted.";
            $this->db->trans_complete();
        }else{
            $output['msg']="Data not deleted.";
            $this->db->trans_rollback();
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function timeago($datetime) {
      $timestamp = strtotime($datetime); 
      
      $strTime = array("second", "minute", "hour", "day", "month", "year");
      $length = array("60","60","24","30","12","10");
 
      $currentTime = time();
      if($currentTime >= $timestamp) {
       $diff     = time()- $timestamp;
       for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
       $diff = $diff / $length[$i];
       }
 
       $diff = round($diff);
       return $diff . " " . $strTime[$i] . "(s) ago ";
      }
   }

    
 }

?>