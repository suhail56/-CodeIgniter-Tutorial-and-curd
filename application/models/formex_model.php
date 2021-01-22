<?php
class formex_model extends CI_Model 
{
    public function lmn($data)
    {
       if($this->db->insert('ab',$data))
       {
           return TRUE;
       }
    }
    public function delete($id)
    {
        if($this->db->delete("ab","id=".$id))
        {
            return TRUE;
        }
    }
    public function get($id)
    {
        $query= $this->db->get_where("ab",array("id"=>$id));
        $data["records"]=$query->result();
        return $query->result();
    }
    public function upd($data,$id)
    {
        // var_dump($id);exit;
        $this->db->set($data);
        $this->db->where("id",$id);
        if($this->db->update('ab'))
        {
            return TRUE;
        }
    }
}
?>