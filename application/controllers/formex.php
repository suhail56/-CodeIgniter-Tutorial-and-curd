<?php
class formex extends CI_Controller
{
    public function abc()
    {
        $query= $this->db->get("ab");
        $res["records"]=$query->result();
        $this->load->view("ins",$res);
    }
    public function add()
    {
        $username= $this->input->post('username'); 
        $password= $this->input->post('password'); 
        $car=  $this->input->post('car');
        $dob=  $this->input->post('dob'); 
        $add=  $this->input->post('address'); 
        $gender=  $this->input->post('gender');

        $data=array("username"=>$username,"car"=>$car,"dob"=>$dob,"address"=>$add,"gender"=>$gender,"password"=>$password);

        $op= $this->formex_model->lmn($data);
        if($op==TRUE){
            redirect('formex/abc');  }
    }
    public function del()
    {
        $id= $this->uri->segment('3');
        $delete=$this->formex_model->delete($id);
        if($delete==TRUE)
        {
            redirect('formex/abc');
        }
    }
    public function edit()
    {
        $id= $this->uri->segment('3');
        $data['records']= $this->formex_model->get($id);
        $data['y']=$id;
        $this->load->view("editz",$data);
    }
    public function update()
    {
        $id= $this->input->post('id');
        $username= $this->input->post('username'); 
        $password= $this->input->post('password'); 
        $car=  $this->input->post('car');
        $dob=  $this->input->post('dob'); 
        $add=  $this->input->post('address'); 
        $gender=  $this->input->post('gender');
        $data=array("username"=>$username,"car"=>$car,"dob"=>$dob,"address"=>$add,"gender"=>$gender,"password"=>$password);
        
        $op= $this->formex_model->upd($data,$id);
        if($op==TRUE){
            redirect('formex/abc');  }
    }
}
?>