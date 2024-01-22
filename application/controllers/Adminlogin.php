<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Adminlogin extends MY_Controller{
      function __construct(){
          parent::__construct();
          if(!empty($this->session->userdata("adminid"))){
            return redirect(BASE_URL."dashboard");
          }
          $this->load->model("Login","al");
      }

      public function index(){
        $data['page']="Admin Login";
        $this->load->view("admin/login",$data);
      }

      public function loginAuth(){

        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $email=$this->input->post('email');
        $password=$this->input->post('password');

        if($this->form_validation->run("adminlogin")){
          $res = $this->al->adminAuth("adminlogin",array("email"=>$email));
          if(!empty($res->admin_id)){
            if($res->password==$password){

              $this->session->set_userdata(["adminid"=>$res->admin_id,"email"=>$res->email]);
              $this->session->set_flashdata("success","Login successfull.");

              $output['status']=1;
              $output['msg']="Login successfull.";
            }else{
              $output['msg']="Password wrong";
            }
          }else{
            $output['msg']="Email wrong.";
          }
        }else{
          $output['msg']=strip_tags(validation_errors());
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
      }
  }
  
?>