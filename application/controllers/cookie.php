<?php
class cookie extends CI_Controller
{
    public function cook()
    {
        set_cookie('hai','abc','3600'); 
         $this->load->view('cookieview'); 
    }
    public function displaycookie() 
    { 
        echo get_cookie('hai'); 
        $this->load->view('cookieview');
    }
    public function deletecookie()
    { 
        delete_cookie('hai'); 
        redirect('cookie/display'); 
    }
}
?>