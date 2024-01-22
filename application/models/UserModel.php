<?php
 defined("BASEPATH") OR exit("No direct script allowd access.");
 class UserModel extends CI_Model{
    public function selectWhereDataLimitOffset($table,$where,$limit,$offset,$field,$order="ASC"){
        $q=$this->db->select("*")
                    ->where($where)
                    ->limit($limit,$offset)
                    ->order_by($field,$order)
                    ->get($table);
                  
        return $q->result_array();            
    }

    public function selectWhereData($table,$where,$field,$order="ASC"){
        $q=$this->db->select("*")
                    ->where($where)
                    ->order_by($field,$order)
                    ->get($table);
                  
        return $q->result_array();            
    }

    public function selectWhereDataLimit($table,$where,$field,$order="ASC"){
        $q=$this->db->select("*")
                    ->where($where)
                    ->order_by($field,$order)
                    ->limit('5')
                    ->get($table);
        return $q->result_array();            
    }

    public function getAllDataWhere($table,array $where,$field,$order="ASC"){
      $res=$this->db->select("*")
                    ->where($where)
                    ->order_by($field,$order)
                    ->get($table);
      return $res->result_array();              
    }

    public function getSingleData($table,$field,$value){
        $res=$this->db->where([$field=>$value])
                      ->get($table);
        return $res->row_array();              
    }

    public function addData($table, array $data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    public function updateWhere($table,array $data, array $where){
        $res=$this->db->where($where)
                      ->update($table,$data);
        return $res; 
    }

    public function countingWhere($table,$where){
        $query=$this->db->where($where)
                     ->get($table);
        return $query->num_rows();

    }

    public function deleteData($table, array $where){
      $res=$this->db->where($where)
                    ->delete($table);
      return $res; 
    }
    public function gethomepagemovigstory()
    {
        $res=$this->db->select("*")
            ->where('show_on_homepage',1)
            ->get('tbl_moving_story');
        return $res->result_array();
    }
 }
?>