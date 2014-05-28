<?php

class BrainModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function search($say)
    {
        $sql = "SELECT * FROM brain WHERE memory LIKE ('%$say%')";
        $query =$this->db->query($sql, array($say)); 
       
        return $query->result();
    }
}

?>