<?php
  defined("BASEPATH") OR exit("No direct script access allowd");

  class User extends MY_Controller{
      public function __construct(){
          parent::__construct();
          $this->load->model("UserModel","um");
      }

      public function index(){
          $data['page']="Home";
          $data['moving_story']=$this->um->gethomepagemovigstory();
          $data['banner']=$this->um->getAllDataWhere("tbl_banner",array(),"id","DESC");
          $this->load->view("user/index",$data);
          
      }

      public function allBlog(){
        $type = $this->uri->segment(2);
        $this->session->set_userdata("type",$type); 
        return redirect(BASE_URL."Blogs");
      }

      public function Blogs(){
        $data['page']="Blog";

        $offset=$this->uri->segment(2);
       
        $totalrow=$this->um->countingWhere("blog","status='1'");
        if(!empty($this->session->userdata("type"))){
            $type = str_replace("%20"," ",$this->session->userdata("type"));
            $totalrow=$this->um->countingWhere("blog","status='1' and type='$type'");
        }

        $config=[
            'base_url' => BASE_URL."Blogs",
            'per_page' =>10,
            'total_rows' => $totalrow,
            'full_tag_open'=>"<ul class='pagination mt-50'>",
            'full_tag_close'=>"</ul>",
            'next_tag_open' =>"<li class='page-item'>",
            'next_tag_close' =>"</li>",
            'prev_tag_open' =>"<li class='page-item'>",
            'prev_tag_close' =>"</li>",
            'num_tag_open' =>"<li class='page-item'>",
            'num_tag_close' =>"<li>",
            'cur_tag_open' =>"<li class='page-item'><a class='page-link active'>",
            'cur_tag_close' =>"</a></li>"
        ];

        $this->pagination->initialize($config);
        $where = "status='1'";
        if(!empty($this->session->userdata("type"))){
            $type = str_replace("%20"," ",$this->session->userdata("type"));
            $where.=" and type='$type'";
        }

        $data['blog']=$this->um->selectWhereDataLimitOffset("blog",$where,$config['per_page'],$offset,"blog_id","DESC");
        $this->load->view("user/blog",$data);
    }

    public function singleBlog(){
        $data['page']="Single Blog";
        $slug=$this->uri->segment(2);
       
        $data['blog']=$this->um->getSingleData("blog","slug",$slug);

        $blog_id=$data['blog']['blog_id'];

        $data['reply'] = $this->um->selectWhereDataLimit("blog_comment",array("blog_id"=>$blog_id),"id","DESC");
        
        $where = "status='1'";
        if(!empty($this->session->userdata("type"))){
            $type = str_replace("%20"," ",$this->session->userdata("type"));
            $where.=" and type='$type'";
        }

        $data['blog1']=$this->um->selectWhereData("blog",$where,"blog_id","DESC");

        if(!empty($data['blog'])){
            $this->load->view("user/blog_details",$data);
        }else{
            return redirect(BASE_URL."Blogs");
        }
        

    }

    public function blogComment(){

        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $blog_id = $this->input->post("blog_id");
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $comment = $this->input->post("comment");

        if($this->form_validation->run("blog_comment")){
            $data=array("blog_id"=>$blog_id,"name"=>$name,"email"=>$email,"comment"=>$comment,"status"=>1,"date"=>$this->data['date'],"time"=>$this->data['time']);
            $res=$this->um->addData("blog_comment",$data);
            if($res){
                $output['status']=1;
                $output['msg']="Comment added";
            }else{
                $output['msg']="Comment not added";
            }
        }else{
            $output['msg']=strip_tags(validation_errors());
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function register(){
        if(empty($this->session->userdata("uid"))){
            $data['page']="Register";
            $this->load->view("user/register",$data);
        }else{
            return redirect(BASE_URL);
        }
    }

    public function registerUser(){
        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $name=$this->input->post("name");
        $address=$this->input->post("address");
        $mobile=$this->input->post("mobile");
        $email=$this->input->post("email");
        $password=$this->input->post("password");
        $cpassword=$this->input->post("cpassword");
        $otp=$this->data['otp'];

        if($this->form_validation->run("register")){

            $data=array("name"=>$name,"mobile"=>$mobile,"email"=>$email,"password"=>$password,"otp_status"=>1,"otp"=>$otp,"date"=>$this->data['date'],"time"=>$this->data['time'],"address"=>$address);
            $res=$this->um->addData("register",$data);
            if($res){
                $output['status']=1;
                $output['msg']="Your account register";
            }else{
                $output['msg']="Your account not created";
            }
        }
        else{
          $output['msg']=strip_tags(validation_errors());
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function login(){
        if(empty($this->session->userdata("uid"))){
          $data['page']="Login";
          $this->load->view("user/login",$data);
        }else{
            return redirect(BASE_URL);
        }
    }

    public function userLogin(){

        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $email=$this->input->post("email");
        $password=$this->input->post("password");
        if($this->form_validation->run("login")){
            $res=$this->um->getSingleData("register","email",$email);
            if(!empty($res['uid'])){
                if($res['password']==$password){
                    $this->session->set_userdata(["uid"=>$res['uid'],"email"=>$res['email']]);
                    $output['status']=1;
                    $output['msg']="Login successfull";
                }else{
                    $output['msg']="Password not matched.";
                }
            }else{
                $output['msg']="Email id wrong.";
            }
        }else{
            $output['msg']=strip_tags(validation_errors());
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function Account(){
        if(!empty($this->session->userdata("uid"))){
            $data['page']="Account";
            $uid=$this->session->userdata('uid');
            $data['user']=$this->um->getSingleData("register","uid",$uid);
            $this->load->view("user/account",$data);
        }else{
            return redirect(BASE_URL."login");
        }
    }

    public function accountDetails(){
        
        if(!empty($this->session->userdata("uid"))){
            $data['page']="Account Details";
            $uid=$this->session->userdata('uid');
            $data['user']=$this->um->getSingleData("register","uid",$uid);
            $this->load->view("user/account-details",$data);
        }else{
            return redirect(BASE_URL."login");
        }
    }

    public function changePassword(){
        if(!empty($this->session->userdata("uid"))){
            $data['page']="Change Password ";
            $uid=$this->session->userdata('uid');
            $data['user']=$this->um->getSingleData("register","uid",$uid);
            $this->load->view("user/change-your-password",$data);
        }else{
            return redirect(BASE_URL."login");
        }
    }

    public function changeEmail(){
        if(!empty($this->session->userdata("uid"))){
            $data['page']="Change Email";
            $uid=$this->session->userdata('uid');
            $data['user']=$this->um->getSingleData("register","uid",$uid);
            $this->load->view("user/change-your-email",$data);
        }else{
            return redirect(BASE_URL."login");
        }
    }

    public function changeEmailSubmit(){
        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $cemail=$this->input->post('cemail');
        $uid=$this->session->userdata("uid");

        if(!empty($this->session->userdata("uid"))){
            if($this->form_validation->run("useremailchange")){
            $res=$this->um->getSingleData("register","uid",$uid);
            if(!empty($res['uid'])){
                if($res['password']==$password){
                if($email==$cemail){
                    $where=array("uid"=>$res['uid']);
                    $data=array("email"=>$email);
                    $res=$this->um->updateWhere("register",$data,$where);
                    if($res){
                    $output['status']=2;
                    $output['msg']="Email changed.";
                    }else{
                    $output['msg']="Email not changed.";
                    }
                }else{
                    $output['msg']="Email doesn't match";
                }
                }else{
                  $output['msg']="Your old password wrong.";
                }
            }else{
                $output['status']=1;
                $output['msg']="You are wrong user.";
                //return redirect(BASE_URL."login");
            }
            }else{
            $output['msg']=strip_tags(validation_errors());
            }
        }else{
            $output['status']=1;
            $output['msg']="User session expire";
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function deleteAccount(){
        if(!empty($this->session->userdata("uid"))){
            $data['page']="Delete Account Email";
            $uid=$this->session->userdata('uid');
            $data['user']=$this->um->getSingleData("register","uid",$uid);
            $this->load->view("user/delete-account",$data);
        }else{
            return redirect(BASE_URL."login");
        }
    }

    public function deleteAccountSubmit(){
        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $password=$this->input->post('password');
        $uid=$this->session->userdata("uid");

        if(!empty($this->session->userdata("uid"))){
            $res=$this->um->getSingleData("register","uid",$uid);
            if(!empty($res['uid'])){
                if($res['password']==$password){
                    $where=array("uid"=>$res['uid']);
                    $res=$this->um->deleteData("register",$where);
                    if($res){
                      $this->session->sess_destroy();    
                      $output['status']=2;
                      $output['msg']="Account deleted.";
                    }else{
                       $output['msg']="Account not deleted.";
                    }
                }else{
                  $output['msg']="Your password wrong.";
                }
            }else{
                $output['status']=1;
                $output['msg']="You are wrong user.";
                //return redirect(BASE_URL."login");
            }
        }else{
            $output['status']=1;
            $output['msg']="User session expire";
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    

    public function Contact(){
        $data['page']="Contact Us";
        $this->load->view('user/contact',$data);
    }

    public function submitContact(){
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $subject=$this->input->post('subject');
        $message=$this->input->post('message');
        if($this->form_validation->run("contactus")){
            $data=array("name"=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message,"status"=>1,"date"=>$this->data['date'],"time"=>$this->data['time']);
            $res=$this->um->addData("contact",$data);
            if($res){
                $output['status']=1;
                $output['msg']="Contact details submitted.";
            }else{
                $output['msg']="Contact details not submitted.";
            }
        }else{
            $output['msg']=strip_tags(validation_errors());
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function changePasswordSubmit(){
        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $opass=$this->input->post('opass');
        $cpass=$this->input->post('cpass');
        $npass=$this->input->post('npass');
        $uid=$this->session->userdata("uid");

        if(!empty($this->session->userdata("uid"))){
            if($this->form_validation->run("usercp")){
            $res=$this->um->getSingleData("register","uid",$uid);
            if(!empty($res['uid'])){
                if($res['password']==$opass){
                if($npass==$cpass){
                    $where=array("uid"=>$res['uid']);
                    $data=array("password"=>$npass);
                    $res=$this->um->updateWhere("register",$data,$where);
                    if($res){
                    $output['status']=2;
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
                $output['status']=1;
                $output['msg']="You are wrong user.";
                //return redirect(BASE_URL."login");
            }
            }else{
            $output['msg']=strip_tags(validation_errors());
            }
        }else{
            $output['status']=1;
            $output['msg']="User session expire";
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function updateProfile(){
        $output['status']=0;
        $output['msg']="";
        $output['data']=array();
        $name=$this->input->post("name");
        $mobile=$this->input->post("mobile");
        $email=$this->input->post("email");
        $address=$this->input->post("address");
        $city=$this->input->post("city");
        $pincode=$this->input->post("pincode");
        if(!empty($this->session->userdata("uid"))){
            $data=array("name"=>$name,"address"=>$address,"city"=>$city,"pincode"=>$pincode);
            $res=$this->um->updateWhere("register",$data,array("uid"=>$this->session->userdata('uid')));
            if($res){
                $output['status']=2;
                $output['msg']="Profile update";
            }else{
                $output['msg']="Profile not update";
            }
        }else{
            $output['status']=1;
            $output['msg']="Session destroy";
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);

    }

    public function shareYourMovingStory(){
        $data['page']="Share Your Moving Story";
        $this->load->view("user/share-your-moving-story",$data);
    }

    public  function movingStorySubmit(){
        $output['status']=0;
        $output['msg']="";
        $output['data']=array();
        $fname=$this->input->post("fname");
        $lname=$this->input->post("lname");
        $email=$this->input->post("email");
        $mobile=$this->input->post("mobile");
        $type=$this->input->post("type");
        $decision=$this->input->post("decision");
        $challenge=$this->input->post("challenge");
        $happy=$this->input->post("happy");
        $moving_stories=$this->input->post("moving_stories");
        $this->db->trans_start();

        if($this->form_validation->run("moving_stories")){

            $data=array("fname"=>$fname,"lname"=>$lname,"email"=>$email,"mobile"=>$mobile,"type"=>$type,"decision"=>$decision,"challenge"=>$challenge,"happy"=>$happy,"moving_story"=>$moving_stories,"date"=>$this->data['date'],"time"=>$this->data['time'],"status"=>0);
            $res=$this->um->addData("moving_story",$data);
            if($res){
                if(count($_FILES['image']['name'])>0){
                    for($i=0;$i<count($_FILES['image']['name']);$i++){

                        $_FILES['file']['name']=$_FILES['image']['name'][$i];
                        $_FILES['file']['tmp_name']=$_FILES['image']['tmp_name'][$i];
                        $_FILES['file']['size']=$_FILES['image']['size'][$i];

                        $image=md5($_FILES['file']['name'].rand(1000,9999)).".".pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
                        $config['upload_path']="./uploads/moving_story/";
                        $config['allowed_types']="png|jpg|jpeg|JPEG|JPG|PNG";
                        $config['max_size']="6144";
                        $config['overwrite']=FALSE;
                        $config['file_name']=$image;

                        $result=0;
                        $data1=array("moving_story_id"=>$res,"image"=>$image,"image_url"=>"uploads/moving_story/");

                        $this->upload->initialize($config);

                        if($this->upload->do_upload("file")){
                            $result=$this->um->addData("moving_story_image",$data1);
                        }else{
                            $output['msg']=strip_tags($this->upload->display_errors());
                            $this->db->trans_rollback();
                            exit;
                        }

                        if($result){
                            $output['status']=1;
                            $output['msg']="Moving Story added.";
                            $this->db->trans_complete();
                        }else{
                            $output['msg']="Moving story not added.";
                            $this->db->trans_rollback();
                        }
                    }
                }else{
                    $output['msg']="Image must be uploaded.";
                    $this->db->trans_rollback();
                }
            }else{
                $output['msg']="Moving story not added.";
                $this->db->trans_rollback();
            }
        }else{
            $output['msg']=strip_tags(validation_errors());
            $this->db->trans_rollback();
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function movingStory(){
        $data['page']="Moving Stories";

        $offset=$this->uri->segment(2);
       
        $totalrow=$this->um->countingWhere("moving_story","status='1'");

        if(!empty($this->session->userdata("mstype"))){

            $type = str_replace("%20"," ",$this->session->userdata("mstype"));
            $totalrow=$this->um->countingWhere("moving_story","status='1' and type='$type'");
        }

        $config=[
            'base_url' => BASE_URL."Blogs",
            'per_page' =>10,
            'total_rows' => $totalrow,
            'full_tag_open'=>"<ul class='pagination mt-50'>",
            'full_tag_close'=>"</ul>",
            'next_tag_open' =>"<li class='page-item'>",
            'next_tag_close' =>"</li>",
            'prev_tag_open' =>"<li class='page-item'>",
            'prev_tag_close' =>"</li>",
            'num_tag_open' =>"<li class='page-item'>",
            'num_tag_close' =>"<li>",
            'cur_tag_open' =>"<li class='page-item'><a class='page-link active'>",
            'cur_tag_close' =>"</a></li>"
        ];

        $this->pagination->initialize($config);
        $where = "status='1'";

        if(!empty($this->session->userdata("mstype"))){
            $type = str_replace(""," ",$this->session->userdata("mstype"));
            $where.=" and type='$type'";
        }

        $data['story']=$this->um->selectWhereDataLimitOffset("moving_story",$where,$config['per_page'],$offset,"moving_story_id ","DESC");

        $this->load->view("user/moving-stories",$data);
    }

    public function singleMovingStory(){
        $data['page']="Single Moving Story";
        $id=$this->uri->segment(2);
       
        $data['moving_story']=$this->um->getSingleData("moving_story","moving_story_id",$id);

        $moving_story_id=$data['moving_story']['moving_story_id'];

        $data['reply'] = $this->um->selectWhereDataLimit("moving_story_comment",array("moving_story_id"=>$moving_story_id),"id","DESC");
        
        $where = "status='1'";
        if(!empty($this->session->userdata("mstype"))){
            $type = str_replace("%20"," ",$this->session->userdata("mstype"));
            $where.=" and type='$type'";
        }

        $data['moving_story1']=$this->um->selectWhereData("moving_story",$where,"moving_story_id","DESC");

        if(!empty($data['moving_story'])){
            $this->load->view("user/user-share-blog",$data);
        }else{
            return redirect(BASE_URL."movingStory");
        }

    }

    public function movingStoryComment(){
        $output['status']=0;
        $output['msg']="";
        $output['data']=array();

        $moving_story_id = $this->input->post("moving_story_id");
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $comment = $this->input->post("comment");

        if($this->form_validation->run("blog_comment")){
            $data=array("moving_story_id"=>$moving_story_id,"name"=>$name,"email"=>$email,"comment"=>$comment,"status"=>1,"date"=>$this->data['date'],"time"=>$this->data['time']);
            $res=$this->um->addData("moving_story_comment",$data);
            if($res){
                $output['status']=1;
                $output['msg']="Comment added";
            }else{
                $output['msg']="Comment not added";
            }
        }else{
            $output['msg']=strip_tags(validation_errors());
        }
        echo json_encode([$output],JSON_UNESCAPED_SLASHES);
    }

    public function userlogout(){
        $this->session->sess_destroy();
        return redirect(BASE_URL.'login');
    }

  }

?>