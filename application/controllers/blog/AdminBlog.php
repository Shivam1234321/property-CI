<?php
 defined("BASEPATH") OR exit("No direct script access allowed.");

 class AdminBlog extends MY_Controller{
    public function __construct(){
        parent::__construct();
        if(empty($this->session->userdata("adminid"))){
            return redirect(BASE_URL."adminlogin");
        }
        $this->load->model("BlogModel","bm");
    }

    public function index(){
        $data['page']="Manage Property Blog";
        $data['blog']=$this->bm->getBlogData("blog","blog_id","DESC");
        $this->load->view("admin/manage-blog",$data);
    }

    public function addBlog(){
        $data['page']="Add Property Blog";
        $this->load->view("admin/add-blog",$data);
    }

    public function submitBlog(){

        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $title = $this->input->post("title");
        $slug = $this->input->post("slug");
        $author = $this->input->post("author");
        $subject = $this->input->post("subject");
        $description = $this->input->post("description");
        $tags=$this->input->post('tags');

        

        $submit=$this->input->post("submit");
        
        $image=md5($_FILES['image']['name']).".".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        $config['upload_path']="./uploads/blog/";
        $config['allowed_types']="png|jpg|jpeg|JPEG|JPG|PNG";
        $config['max_size']="2048";
        $config['overwrite']=FALSE;
        $config['file_name']=$image;

        $this->db->trans_start();

        $this->upload->initialize($config);

        if($this->form_validation->run("blog")){

          $data=array("title"=>$title,"author"=>$author,"subject"=>$subject,"image"=>$image,"image_url"=>"uploads/blog/","description"=>$description,"type"=>"Property Blog","slug"=>$slug,"tags"=>$tags);

          if($submit=="addBlog"){
            if($this->upload->do_upload("image")){
                $data['date'] = $this->data['date'];
                $data["time"] = $this->data['time'];
                $data["status"] = '1';  
                $res = $this->bm->addBlog("blog",$data);
                if($res){
                    $output['status'] = 1;
                    $output['msg'] = "Blog added successfully.";
                    $this->db->trans_complete();
                }else{
                    $this->db->trans_rollback();
                }
            }else{
              $output['msg'] = strip_tags($this->upload->display_errors());
              $this->db->trans_rollback();
            }  
          }else{
            if(!empty($_FILES['image']['name'])){
                if(!$this->upload->do_upload("image")){
                    $output['msg'] = strip_tags($this->upload->display_errors());
                    $this->db->trans_rollback();
                    echo json_encode([$output],JSON_UNESCAPED_SLASHES);
                    die();
                }
                unlink("./uploads/blog/".$this->input->post("oimg")) or die("Not moved");
                $data['image']=$image;
            }else{
                $data['image']=$this->input->post("oimg");
            }
            $res=$this->bm->updateBlog("blog",$data,array("blog_id"=>$this->input->post('blog_id')));
            if($res){
                $output['status'] = 1;
                $output['msg'] = "Blog updated";
                $this->db->trans_complete();
            }else{
                $output['msg'] = "Blog not updated.";
                $this->db->trans_rollback();
            }
          }
        }else{
           $output['msg'] = strip_tags(validation_errors());
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function editBlog(){
        $data['page'] = "Edit Property Blog";
        $blog_id = $this->uri->segment(2);
        $res = $this->bm->singleBlog("blog",["blog_id"=>$blog_id]);
        $data['blog'] = $res;
        if(!empty($res['blog_id'])){
            $this->load->view("admin/edit-blog",$data);
        }else{
            return redirect(BASE_URL."Blog");
        }
    }
    
    public function addMovingStory(){
        $data['page']="Add Moving Story";
        $this->load->view("admin/add_moving_story",$data);
    }
    
    public function homepageStatus()
    {
        $id = $this->input->post("id");
        $res = $this->bm->changeBlogStatus($id);
        if($res)
        {
            $output['status'] = 1;
            $output['msg'] = "Blog status changed.";
        }
        else
        {
            $output['status'] = 0;
            $output['msg'] = "Something went wrong";
        }
        echo json_encode($output);
    }



 }

?>