<?php
  defined('BASEPATH') OR exit('No direct script access allowd');

  class Dashboard extends MY_Controller{

      function __construct(){
        parent::__construct();
        if(empty($this->session->userdata("adminid"))){
           return redirect(BASE_URL."adminlogin");
        }
        $this->adminid=$this->session->userdata("adminid");
        $this->load->model("DashboardModel","dm");

      }

      public function index(){
        $data['page']="Home";
        $this->load->view("admin/index",$data);
      }

      public function CP(){
        $data['page']="Change Password";
        $this->load->view("admin/change-password",$data);
      }

      public function changePassword(){

        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $opass=$this->input->post('opass');
        $cpass=$this->input->post('cpass');
        $npass=$this->input->post('npass');
        
        if($this->form_validation->run("admincp")){
          $res=$this->dm->getSingleData("adminlogin","admin_id",$this->adminid);
          if(!empty($res['admin_id'])){
            if($res['password']==$opass){
              if($npass==$cpass){
                $where=array("admin_id"=>$this['adminid']);
                $data=array("password"=>$npass);
                $res=$this->dm->updateWhere("adminlogin",$data,$where);
                if($res){
                  $output['status']=1;
                  $output['msg']="Password changed.";
                }else{
                  $output['msg']="Password not changed.";
                }
              }else{
                $output['msg']="Password doesn't match";
              }
            }else{
              $output['msg']="Your old password wrong.";
            }
          }else{
            $output['msg']="You are wrong user.";
            return redirect(BASE_URL."adminlogout");
          }
        }else{
          $output['msg']=strip_tags(validation_errors());
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
      }

      public function users(){
        $data['page']="Users";
        $data['users']=$this->dm->getAllDataWhere("register",array('otp_status'=>'1'),"uid","DESC");
        $this->load->view("admin/manage-users",$data);
      }

      public function contacts(){
        $data['page']="Manage Contact";
        $data['contacts']=$this->dm->getAllDataWhere("contact",array('status'=>'1'),"id","DESC");
        $this->load->view("admin/manage-contacts",$data);
      }

      public function adminMovingStory(){
        $data['page']="Users Moving Stories";
        $data['stories']=$this->dm->getAllData("moving_story","moving_story_id","DESC");
        $this->load->view("admin/manage-moving-stories",$data);
      }

      public function adminlogout(){
        $this->session->sess_destroy();
        return redirect(BASE_URL.'adminlogin');
     }
  }

?>