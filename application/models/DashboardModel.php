<?php
  defined("BASEPATH") OR exit("No direct script allowed.");

  class DashboardModel extends CI_Model{

    public  function getSingleData($table,$field,$value){
        $res=$this->db->select("*")
                      ->where([$field=>$value])
                      ->get($table);
        return $res->row_array();              
    }

    public function getAllDataWhere($table,array $where,$field,$order="ASC"){
      $res=$this->db->select("*")
                    ->where($where)
                    ->order_by($field,$order)
                    ->get($table);
      return $res->result_array();              
    }

    public function getAllData($table,$field,$order="ASC"){
      $res=$this->db->select("*")
                    ->order_by($field,$order)
                    ->get($table);
      return $res->result_array();              
    }

    public function updateWhere($table,array $data, array $where){
        $res=$this->db->where($where)
                      ->update($table,$data);
        return $res; 
    }
    
    public function deleteData($table, array $where){
      $res=$this->db->where($where)
                    ->delete($table);
      return $res; 
    }

    public function getSingleValueWhere($table,$field,array $where){
    $res=$this->db->select($field)
                  ->where($where)
                  ->get($table);

    if($res){
      foreach ($res->result() as $row){
        return $val = stripslashes($row->$field);
      }
    }
    else{
      return false;
    }
  }



  }
?>