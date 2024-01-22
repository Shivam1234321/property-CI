<?php
  defined("BASEPATH") OR exit("No direct script access allowed");

  class PropertyModel extends CI_Model{
      public function getData($table,$field,$order){
        $res=$this->db->select('*')
                 ->order_by($field,$order)
                 ->get($table);
        return $res->result_array();         
      }

      public function getWhereData($table,array $where,$field,$order="ASC"){
        $res=$this->db->select('*')
                  ->where($where)
                  ->order_by($field,$order)
                  ->get($table);
        return $res->result_array();         
      }

      public function addData($table,array $data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
      }

      public function singleData($table,array $where){
        $res=$this->db->select("*")
                      ->where($where)
                      ->get($table);
        return $res->row_array();                
      }
      public function updateData($table,array $data,array $where){
        return $this->db->where($where)
                        ->update($table,$data);
      }
  }

?>