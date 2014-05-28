<?php
class Home extends CI_Controller {

    public function index()
    {
    	$this->load->model('BrainModel');

    	if (isset($_POST['say'])){

    		$comprehend = str_word_count($_POST['say'],1);
    		for ($i=0;$i<count($comprehend);$i++) {
    			$reply=$this->BrainModel->search($comprehend[$i]);
    		}
        } else {
            $reply="";
        }

        $data['reply']=$reply;
        $this->load->view('home/main', $data);
    }
}
?>