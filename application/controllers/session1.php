<?php
class session1 extends CI_Controller
{
    public function abc()
    {
        $this->load->view('sessionview');
    }
    public function log()  
    {  
        $username = $this->input->post('user');  
        $password = $this->input->post('pass'); 
     
        if ($username=='arun' && $password=='123')
        {
            $this->session->set_userdata('user',$username); 
            $this->load->view('logview'); 
        }  
        else
        {
            $this->load->view('sessionview');
        }
    } 
    public function logout()  
    {   
        $this->session->unset_userdata('user');  
        redirect("session1/abc");  
    }  
}
?>