<?php 
 defined("BASEPATH") OR exit("No direct script access allowed.");

 class Property extends MY_Controller{
 	  function __construct(){
      parent::__construct();
      $this->load->model("PropertyModel","pm");
      $this->load->model("DashboardModel","dm");
  	}

  	public function index(){
  		$data['page']="Manage Property";
  		$data['property']=$this->pm->getData("property","property_id","DESC");

      $this->load->view("admin/manage-property",$data);
  	}

  	public function addProperty(){
  		$data['page']="Add Property";
      $data['city']=$this->pm->getWhereData("city",array("status"=>1),"city_id","DESC");
      $data['property_type']=$this->pm->getWhereData("property_type",array("status"=>1),"property_type_id","DESC");
  		$this->load->view("admin/add-property",$data);
  	}

  	public function editProperty(){
  		  $data['page']="Edit Property";
  		  $property_id=$this->uri->segment(2);
  		  $res = $this->pm->singleData("property",["property_id"=>$property_id]);
        $data['property'] = $res;
        $data['city']=$this->pm->getWhereData("city",array("status"=>1),"city_id","DESC");
        $data['property_type']=$this->pm->getWhereData("property_type",array("status"=>1),"property_type_id","DESC");
        if(!empty($res['property_id'])){
            $this->load->view("admin/edit-property",$data);
        }else{
            return redirect(BASE_URL."Property");
        }
  	}

    public function viewProperty(){
        $data['page']="View Property";
        $property_id=$this->uri->segment(2);
        $res = $this->pm->singleData("property",["property_id"=>$property_id]);
        $data['property'] = $res;
        $data['gallery']=$this->pm->getWhereData("property_gallery",array("property_id"=>$property_id),"id","DESC");

        if(!empty($res['property_id'])){
            $this->load->view("admin/viewProperty",$data);
        }else{
            return redirect(BASE_URL."Property");
        } 
    }

    public function submitProperty(){
        
        $output=array("status"=>0,"msg"=>"","data"=>array());

        $value = $this->security->xss_clean($this->input->post());
        $category = $value['category'];
        $name = $value['name'];
        $title = $value['title'];
        $slug = $value['slug'];
        $property_type = $value['property_type'];
        $address = $value['address'];
        $lat = $value['lat'];
        $long = $value['long'];
        $price = $value['price'];
        $no_of_bedroom = $value['no_of_bedroom'];
        $no_of_bathroom = $value['no_of_bathroom'];
        $city = $value['city'];
        $furnish_type = $value['furnish_type'];
        $size = $value['size'];
        $let_type = $value['let_type'];
        $let_available_date = $value['let_available_date'];
        $is_available_for_student = $value['is_available_for_student'];
        $tags = $value['tags'];
        $description = $value['description'];
        $submit = $value['submit'];

        if($submit=="addProperty"){

          $floor_map="floor_map".md5($_FILES['floor_map']['name'].rand(100,999)).".".pathinfo($_FILES['floor_map']['name'],PATHINFO_EXTENSION);
          $config['upload_path']="./uploads/property/";
          $config['allowed_types']="png|jpg|jpeg|JPEG|JPG|PNG";
          $config['max_size']="2048";
          $config['overwrite']=FALSE;
          $config['file_name']=$floor_map;

          $this->db->trans_start();

          $this->upload->initialize($config);

          $tour_video=md5(time().rand(10000,99999)).'.'.pathinfo($_FILES["tour_video"]["name"],PATHINFO_EXTENSION);
          $config1['upload_path']     = "./uploads/property/";
          $config1['allowed_types']   = '*';
          //$config['max_size']             = 2048;
          $config1['overwrite']       = FALSE;
          $config1['file_name']       = $tour_video;
       }
        


        if($this->form_validation->run("property")){

          $data=array("category"=>$category,"name"=>$name,"title"=>$title,"slug"=>$slug,"property_type"=>$property_type,"address"=>$address,"latitude"=>$lat,"longitude"=>$long,"price"=>$price,"no_of_bedroom"=>$no_of_bedroom,"no_of_bathroom"=>$no_of_bathroom,"region"=>$city,"furnish_type"=>$furnish_type,"let_type"=>$let_type,"let_available_date"=>$let_available_date,"tags"=>$tags,"description"=>$description,"status"=>1,"date"=>$this->data['date'],"time"=>$this->data['time'],"size"=>$size,"image_url"=>"uploads/property/","is_available_for_student"=>$is_available_for_student);

          if($submit=="addProperty"){
            if($this->upload->do_upload("floor_map")){

              $data['floor_map']=$floor_map;
              $this->upload->initialize($config1);
              if($this->upload->do_upload("tour_video")){
                $data['tour_video']=$tour_video;

                $res=$this->pm->addData("property",$data);

                if($res){

                  if(count($_FILES['galleryimage']['name'])>0){
                      for($i=0;$i<count($_FILES['galleryimage']['name']);$i++){

                          $_FILES['file']['name']=$_FILES['galleryimage']['name'][$i];
                          $_FILES['file']['tmp_name']=$_FILES['galleryimage']['tmp_name'][$i];
                          $_FILES['file']['size']=$_FILES['galleryimage']['size'][$i];

                          $image=md5($_FILES['file']['name'].rand(1000,9999)).".".pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
                          $config['upload_path']="./uploads/property/";
                          $config['allowed_types']="png|jpg|jpeg|JPEG|JPG|PNG";
                          $config['max_size']="6144";
                          $config['overwrite']=FALSE;
                          $config['file_name']=$image;

                          $result=0;
                          $data1=array("property_id"=>$res,"image"=>$image);

                          $this->upload->initialize($config);

                          if($this->upload->do_upload("file")){
                              $result=$this->pm->addData("property_gallery",$data1);
                          }else{
                              $output['msg']=strip_tags($this->upload->display_errors());
                              $this->db->trans_rollback();
                              exit;
                          }

                          if($result){
                              $output['status']=1;
                              $output['msg']="Property added.";
                              $this->db->trans_complete();
                          }else{
                              $output['msg']="Property not added.";
                              $this->db->trans_rollback();
                          }
                      }
                  }

                }else{
                  unlink("./uploads/property/".$floor_map);
                  unlink("./uploads/property/".$tour_video);
                  $output['msg']="Property not added";
                  $this->db->trans_rollback();
                }
              }else{
                $output['msg']=strip_tags($this->upload->display_errors())."video";
                $this->db->trans_rollback();
              }
            }else{
              $output['msg']=strip_tags($this->upload->display_errors())."floor_map".$_FILES['floor_map']['type'];
              $this->db->trans_rollback();
            }
          }else{

            // Update Property
            $property_id=$this->input->post("property_id");
            $result=$this->pm->updateData("property",$data,array("property_id"=>$property_id));

            if($result){
                $output['status']=1;
                $output['msg']="Property updated.";
                $this->db->trans_complete();
            }else{
                $output['msg']="Property not updated.";
                $this->db->trans_rollback();
            }

          }
        }else{
          $output['msg']=strip_tags(validation_errors());
          $this->db->trans_rollback();
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function galleryImageUpload(){
      $output['status']=0;
      $output['msg']="";
      $output['data']=array();

      $image_id=$this->input->post("image_id");
      $oimg=$this->input->post("oimg");

      if(!empty($image_id)){

        $res=$this->dm->getSingleData("property_gallery","id",$image_id);

        $image = md5($_FILES['image']['name']).rand(1000,9999).".".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        $config['upload_path']="./uploads/property/";
        $config['allowed_types']="png|jpg|jpeg|JPEG|JPG|PNG";
            $config['max_size']="6144";
            $config['overwrite']=FALSE;
            $config['file_name']=$image;
            $this->upload->initialize($config);

            if($this->upload->do_upload("image")){
              $data=array("image"=>$image);
              $res=$this->dm->updateWhere("property_gallery",$data,array("id"=>$image_id));
              if($res){
                if(!empty($oimg) && file_exists("./".$oimg)){
                  unlink("./".$oimg); 
                }
                $output['status']=1;
                $output['msg']="Gallery image uploaded.";
              }else{
                $output['msg']="Gallery image not updated";
              }
            }else{
              $output['msg']=strip_tags($this->upload->display_errors());
            }
        }else{
        $output['msg']="Gallery id wrong.";
      }
      echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function floorImageUpload(){
      $output['status']=0;
      $output['msg']="";
      $output['data']=array();

      $property_id=$this->input->post("property_id");
      $oimg=$this->input->post("oimg");

      if(!empty($property_id)){

        $res=$this->dm->getSingleData("property","property_id",$property_id);

        $image = md5($_FILES['image1']['name']).rand(1000,9999).".".pathinfo($_FILES['image1']['name'],PATHINFO_EXTENSION);
        $config['upload_path']="./uploads/property/";
        $config['allowed_types']="png|jpg|jpeg|JPEG|JPG|PNG";
            $config['max_size']="6144";
            $config['overwrite']=FALSE;
            $config['file_name']=$image;
            $this->upload->initialize($config);

            if($this->upload->do_upload("image1")){
              $data=array("floor_map"=>$image);
              $res=$this->dm->updateWhere("property",$data,array("property_id"=>$property_id));
              if($res){
                if(!empty($oimg) && file_exists("./".$oimg)){
                  unlink("./".$oimg); 
                }
                $output['status']=1;
                $output['msg']="Floor Map image uploaded.";
              }else{
                $output['msg']="Floor Map image not updated";
              }
            }else{
              $output['msg']=strip_tags($this->upload->display_errors());
            }
        }else{
        $output['msg']="Property id wrong.";
      }
      echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }


    public function StudentStatus(){

         $output['status'] = 1;
         $output['msg'] = "";
         $output['data'] = array();

         $id = $this->input->post("id");
         $table = $this->input->post("table");
         $field = $this->input->post("field");
         $this->db->trans_start();
         $row = $this->dm->getSingleData($table,$field,$id);

         if($row['is_available_for_student']==1){
            $data['is_available_for_student']=0;
         }else{
            $data['is_available_for_student']=1;
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



 }

?>