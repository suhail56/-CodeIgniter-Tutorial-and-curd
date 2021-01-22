<?php
class Ajax1 extends CI_Controller {
 function index()
 {
  $this->load->view('ajaxview');
 }

 function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('ajaxmodel');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->ajaxmodel->fetch($query);
  $output .= '
     <table border="1">
      <tr>
       <th>id </th>
       <th>name</th>
       <th>place</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->id.'</td>
       <td>'.$row->name.'</td>
       <td>'.$row->place.'</td>
      </tr>
    ';
   }
  }
  $output .= '</table>';
  echo $output;
 }
}