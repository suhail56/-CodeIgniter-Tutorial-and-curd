<?php
class sec extends CI_Controller
{
    public function ok()
    {
        $dt["a"] = "10";
        $dt["b"] = "23";
        $dt["c"] = array('car' => 'volvo','color' => 'black');
        $this->load->view('test',$dt);
    }
}
?>