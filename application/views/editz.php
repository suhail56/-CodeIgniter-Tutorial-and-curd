<?php
echo form_open('formex/update');
echo form_hidden('id',$y);

echo form_label('Username ');
$data = array(
    'name'          => 'username',
    'id'            => 'username',
    'value'=>$records[0]->username
);
echo form_input($data);
echo "<br><br>";

echo form_label('password ');
$data = array(
    'type'          => 'password',
    'name'          => 'password',
    'value'=>$records[0]->password
);
echo form_input($data);
echo "<br><br>";

echo form_label('Cars ');
$options = array(
    'volvo'       => 'volvo',
    'benz'        => 'benz',
    'nissan'      => 'nissan',
);
echo form_dropdown('car',$options);
echo "<br><br>";

echo form_label('DOB ');
$data = array(
    'type'          => 'date',
    'name'          => 'dob',
    'value'=>$records[0]->dob
);
echo form_input($data);
echo "<br><br>";

echo form_label('address ');
echo "<br>";
$data = array(
    'name'        => 'address',
    'rows'        => '8',
    'cols'        => '30',
    'value'=>$records[0]->address
);
echo form_textarea($data);
echo "<br><br>";

echo form_label('male ');
echo form_radio('gender', 'male');
echo form_label('female ');
echo form_radio('gender', 'female');
echo "<br><br>";

echo form_submit('mysubmit', 'Submit');
echo form_close();
?>