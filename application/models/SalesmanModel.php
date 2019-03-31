<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class SalesmanModel extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
 /**
     * Insert Method
     * @param tableName
     * @param dataObject
     */
    public function insert( $tableName ,$data ){
        if ($this->db->insert($tableName, $data) ) {
            return $insert_id = $this->db->insert_id();
        } 
        return false;
    }


    public function getAllfromTable( $tableName ) {
        $this->db->select('*');
        $this->db->from( $tableName );
        $this->db->where( 'is_delete', 0 );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;        
    } 

    public function salesman_login_check_info( $data ) {
        $this->db->select('id, name, username');
        $this->db->from( 'salesman' );
        $this->db->where( 'username', $data['username'] );
        $this->db->where( 'password', $data['password'] );
        $this->db->where( 'is_delete', 0 );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;     
    } 

    
  
    public function delete($table, $id, $data) {
      
        $this->db->where('md5(id)', $id);
        $this->db->update($table, $data );

    }  


}