<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Homecontroller extends MY_Controller{
      function __construct(){
          parent::__construct();
          $this->load->model("Login","al");
          $this->load->model("UserModel","um");
      }

      public function update_banner()
      {
        $data['page']="Manage Banner";
        $data['banner']=$this->um->getAllDataWhere("tbl_banner",array(),"id","DESC");
        $this->load->view("admin/update_banner",$data);
      }
      public function change_banner()
      {
         $id = $this->input->post('id');
          $config = array(
            'upload_path' => './assets/banner/',
            'allowed_types' => "*",
            'overwrite' => TRUE,
            'max_size' => "2048000"
            );
        $this->load->library('upload');
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('banner'))
        { 
            $data['imageError'] =  $this->upload->display_errors();
            $this->session->set_flashdata('error','Image not uploaded');
            redirect('admin/update_banner');

        }
        else
        {
            $imageDetailArray = $this->upload->data();
            $image =  $imageDetailArray['file_name'];
            $arraydata = array(
                'banner'=>$image
                );
            $update = $this->um->updateWhere("tbl_banner",$arraydata,array('id'=>$id));
            if($update)
            {
                 $this->session->set_flashdata('success','Banner updated');
                redirect('admin/update_banner');
            }
            else
            {
                $this->session->set_flashdata('error','Something went wrong');
                redirect('admin/update_banner');
            }
        }
        
        
      }
  }