<?php

class BrainModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function think($say)
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
}
?>