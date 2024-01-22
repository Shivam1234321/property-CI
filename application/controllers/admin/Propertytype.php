<?php 
  defined("BASEPATH") OR exit("No direct script access allowed.");

  class Propertytype extends MY_Controller{

  	function __construct(){
  		parent::__construct();
  		if(empty($this->session->userdata("adminid"))){
           return redirect(BASE_URL."adminlogin");
        }
        $this->adminid=$this->session->userdata("adminid");
        $this->load->model("PropertyModel","cm");
  	}

  	public function index(){
	  $data['page']="Manage Property Type";
	  $data['property_type']=$this->cm->getData("property_type","property_type_id","DESC");
	  $this->load->view("admin/manage-property-type",$data);
	}


	public function addPropertyType(){

		$output['status']=0;
		$output['msg']="";
		$output['data']=array();

		$name=$this->input->post("name");

		$submit=$this->input->post("submit");

		if($this->form_validation->run("property_type")){
			$data=array("name"=>$name);
			if($submit=="addPropertyType"){
				$data['status']=1;
				$data['date']=$this->data['date'];
				$data['time']=$this->data['time'];
				$res=$this->cm->addData("property_type",$data);
				if($res){
					$output['status']=1;
					$output['msg']="Property type added";
				}else{
					$output['msg']="Property type not found.";
				}
		
			}else{
				$property_type_id  = $this->input->post("property_type_id");
				$res=$this->cm->updateData("property_type",$data,array("property_type_id "=>$property_type_id ));
				if($res){
					$output['status']=1;
					$output['msg']="Property type updated.";
				}else{
					$output['msg']="Property type not updated.";
				}
				
			}
		}else{
			$output['msg']=strip_tags(validation_errors());
		}
		echo json_encode([$output],JSON_UNESCAPED_SLASHES);

	}




  }
 ?>