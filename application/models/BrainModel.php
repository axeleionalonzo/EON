<?php

class BrainModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function think($say)
    {
        $this->db->where('question', $say);
        $query = $this->db->get('memory');

        if($query->num_rows == 1) {
            $sql = "SELECT * FROM memory WHERE question LIKE ('%$say%')";
            $query = $this->db->query($sql, array($say));
        
            return $query->result();
        } else {
            $this->db->where('question', $say);
            $query = $this->db->get('learn');

            if($query->num_rows == 1) {
                $query = $this->db->get('learn');

                return $query->result();
            } else {
                $this->question = $say;
                $this->db->insert('learn', $this);
            }
        }
    }

    function get_topic()
    {
        $query = $this->db->get('learn');

        return $query->result();
    }

    function ask()
    {
        $query = $this->db->get('memory');

        return $query->result();
    }

    function memorize()
    {
        $this->question = $_POST['question'];
        $this->answer = $_POST['answer'];
        
        $this->db->insert('memory', $this);
    }

    function forget($learn_id)
    {
        $this->db->where('learn_id', $learn_id);
        $this->db->delete('learn');
    }
}
?>