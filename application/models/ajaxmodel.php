<?php
class ajaxmodel extends CI_Model
{
    function fetch($query)
    {
        $this->db->select("*");
        $this->db->from("od");
        $this->db->like('name', $query);
        $this->db->or_like('place', $query);
        return $this->db->get();
    }
}
?>