<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register_Model extends CI_Model {

    private $table;
    public $primary_key;
    public $data;

    function __construct() {
        parent::__construct();
        $this->table = substr(strtolower(get_class($this)), 0, -6);
        $this->primary_key = array();
        $this->data = array();
    }

    private function reset() {
        $this->primary_key = array();
        $this->data = array();
    }
    
    private function reset_pk() {
        $this->primary_key = array();
    }
    
    private function reset_data() {
        $this->data = array();
    }
    public function insert() {		
        $this->db->insert($this->table, $this->data);
		$this->reset_data();        
        return true;
    }
    public function insert_data($table) {		
        $this->db->insert($table, $this->data);
		$this->reset_data();        
        return true;
    }
    public function update($table){
      
        $this->db->where($this->primary_key);
        $q = $this->db->update($table,$this->data);
        $this->reset();
        return true;
    }

    public function checkuser($field,$field_value){
        $this->db->select('*');
        $this->db->where($field,$field_value);
        $q = $this->db->get('customers');
        return $q->num_rows();  
    }

    public function get_user($email,$password){
        $this->db->where('(email =  "'.$email.'" OR username = "'.$email.'")');
        $this->db->where('password',md5($password));
        $this->db->select('*,customer_id as user_id');
        $query = $this->db->get('customers');
        $row = $query->row();
        return $row;
    }
    public function getuser($user_id) {
		$this->db->where('customer_id', $user_id);
        $query = $this->db->get('customers');
        return $query->row();
    }

    public function view_data($table){
        $this->db->select('*');
        $q = $this->db->get($table);
        return $q->result();
    }
    public function getdata($table){
        $this->db->select('*');
        $this->db->where($this->primary_key);
        $q = $this->db->get($table);
        $this->reset_pk();
        return $q->result();
    }
    public function getrow($table){
        $this->db->select('*');
        $this->db->where($this->primary_key);
        $q = $this->db->get($table);
        $this->reset_pk();
        return $q->row();
    }

    public function delete($table){
        $this->db->where($this->primary_key);
        $this->db->delete($table);
        return true;
    }

    
}