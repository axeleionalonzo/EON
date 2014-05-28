<?php
class Home extends CI_Controller {

    public function index()
    {
    	$this->load->model('BrainModel');

    	if (isset($_POST['say'])==null){
            $reply="...";
        } else {
        	$reply=$this->BrainModel->search($_POST['say']);
        }

        $data['reply']=$reply;
        $this->load->view('home/main', $data);
    }
}
?>