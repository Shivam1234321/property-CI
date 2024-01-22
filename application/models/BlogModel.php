<?php
  defined("BASEPATH") OR exit("No direct script access allowed");

  class BlogModel extends CI_Model{
      public function getBlogData($table,$field,$order){
        $res=$this->db->select('*')
                 ->order_by($field,$order)
                 ->get($table);
        return $res->result_array();         
      }

      public function addBlog($table,array $data){
        $this->db->insert($table,$data); 
        return $this->db->insert_id();
      }

      public function singleBlog($table,array $where){
        $res=$this->db->select("*")
                      ->where($where)
                      ->get($table);
        return $res->row_array();                
      }
      public function updateBlog($table,array $data,array $where){
        return $this->db->where($where)
                        ->update($table,$data);
      }
    public function changeBlogStatus($id)
    {
        $this->db->set('show_on_homepage',0)
                        ->update('tbl_moving_story');
                        
        return $this->db->where('moving_story_id',$id)->set('show_on_homepage',1)
                        ->update('tbl_moving_story');
    }
  }

?>