<?php

class BrainModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function think_tag($say)
    {
        if ($say=="") {
            
        } elseif ($say==" ") {
            
        } else {
            $comprehend = str_word_count($say,1);
            $sql = "SELECT * FROM brain WHERE memory LIKE ('%$comprehend[0]%')" ;

                for ($i=1;$i<count($comprehend);$i++) {
                    $additionalSQL = " or memory LIKE ('%$comprehend[$i]%')";
                    $sql.=$additionalSQL;
                }

            $query =$this->db->query($sql, array($say)); 
           
            return $query->result();
        }
        
    }

    function think($say)
    {
        if ($say=="") {
            
        } elseif ($say==" ") {
            
        } else {
            $sql = "SELECT * FROM brain WHERE memory LIKE ('%$say%')";
            $query = $this->db->query($sql, array($say));
        
            return $query->result();
        }
        
    }

    function confuse()
    {
        $query = $this->db->get('confusion');

        return $query->result();
    }

    function learn()
    {
        $this->memory = $_POST['memory']; // please read the below note
        $this->knowledge = $_POST['knowledge'];
        
        $this->db->insert('brain', $this);
    }
}
?>