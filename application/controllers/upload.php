<?php
class upload extends CI_Controller
{
    public function up()
    {
        $this->load->view('uploadview');
    }
    public function save()
    {
        $config=['upload_path'=>'./images','allowed_types'=>'gif|png|jp|jpeg'];
        $this->load->library('upload',$config);
        if($this->upload->do_upload())
        {
            echo "ha";
            $data=$this->input->post();
            $info=$this->upload->data();
            $imgpath=base_url("images/".$info['raw_name'].$info['file_ext']);
            $data["path"]=$imgpath;
            $data['name']=$this->input->post('name');
        }
    }
}
?>