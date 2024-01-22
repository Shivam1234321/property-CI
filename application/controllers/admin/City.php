<?php 
  defined("BASEPATH") OR exit("No direct script access allowed.");

  class City extends MY_Controller{

  	function __construct(){
  		parent::__construct();
  		if(empty($this->session->userdata("adminid"))){
           return redirect(BASE_URL."adminlogin");
        }
        $this->adminid=$this->session->userdata("adminid");
        $this->load->model("PropertyModel","cm");
  	}

  	public function index(){
	  $data['page']="Manage City";
	  $data['city']=$this->cm->getData("city","city_id","DESC");
	  $this->load->view("admin/manage-city",$data);
	}


	public function addCity(){

		$output['status']=0;
		$output['msg']="";
		$output['data']=array();

		$city=$this->input->post("city");

		$submit=$this->input->post("submit");

		if($this->form_validation->run("city")){
			$data=array("city"=>$city);
			if($submit=="addCity"){
				$data['status']=1;
				$data['date']=$this->data['date'];
				$data['time']=$this->data['time'];
				$res=$this->cm->addData("city",$data);
				if($res){
					$output['status']=1;
					$output['msg']="City added";
				}else{
					$output['msg']="City not found.";
				}
		
			}else{
				$city_id  = $this->input->post("city_id");
				$res=$this->cm->updateData("city",$data,array("city_id "=>$city_id));
				if($res){
					$output['status']=1;
					$output['msg']="City updated.";
				}else{
					$output['msg']="City not updated.";
				}
				
			}
		}else{
			$output['msg']=strip_tags(validation_errors());
		}
		echo json_encode([$output],JSON_UNESCAPED_SLASHES);

	}




  }
 ?>