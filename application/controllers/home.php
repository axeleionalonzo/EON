<?php
class Home extends CI_Controller {

    public function index()
    {
    	$this->load->model('BrainModel');

    	$reply=array();
    	if (isset($_POST['say'])){
            $reply=$this->BrainModel->think($_POST['say']);
            if (array()==$reply) {
                $this->learn();
            } else {
                $data['reply']=$reply;
                $this->load->view('home/main', $data);
            }
        } else {
            $data['reply']=$reply;
            $this->load->view('home/main', $data);
        }

    }

    public function learn()
    {
        $this->load->model('BrainModel');
        $reply=$this->BrainModel->confuse();

        $data['reply']=$reply;
        $data['define']=$define = $_POST['say'];
        $this->load->view('home/learn', $data);
    }

    public function remember()
    {
        $this->load->model('BrainModel');

        $this->form_validation->set_rules('memory', 'Memory', 'trim|required|xss_clean');
        $this->form_validation->set_rules('knowledge', 'Knowledge', 'trim|required|is_unique[brain.knowledge]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            
            $this->index();
        } else {
            $this->BrainModel->learn();
            $this->index();
        }
        
    }

}
?>