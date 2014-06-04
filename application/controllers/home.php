<?php
class Home extends CI_Controller {

    public function index()
    {
        $this->load->model('BrainModel');
        if (isset($_POST['say'])){
            $say=$this->BrainModel->think($_POST['say']);
            if ($say==NULL) {
                $this->change_topic();
            } else {
                $data['say']=$say;
                $this->load->view('home/main', $data);
            }
        } else {
            $this->change_topic();
        }
    }

    public function change_topic()
    {
        $this->load->model('BrainModel');
        $say=$this->BrainModel->get_topic();

        $data['say']=$say;
        $this->load->view('home/learn', $data);
    }

    public function remember()
    {
        $this->load->model('BrainModel');
        $learn_id = $_POST['learn_id'];
        $answer = $_POST['answer'];

        $this->form_validation->set_rules('answer', 'Answer', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            
            $this->index();
        } else {
            $this->BrainModel->memorize();
            $this->BrainModel->get_topic($answer);
            $this->BrainModel->forget($learn_id);
            $this->index();
        }
        
    }

}
?>