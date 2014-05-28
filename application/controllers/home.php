<?php
class Home extends CI_Controller {

    public function index()
    {
    	$this->load->model('BrainModel');

    	$reply=array();
    	if (isset($_POST['say'])){
            $reply=$this->BrainModel->think($_POST['say']);
        }

        $data['reply']=$reply;
        $this->load->view('home/main', $data);
    }
}
?>