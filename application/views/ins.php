<html>
<head>
        <style>
            th{
                padding: 10px;
            }
            td{
                padding: 5px;
            }
        </style>
    </head>
<body>
<?php
echo form_open('formex/add');

echo form_label('Username ');
$data = array(
    'name'          => 'username',
    'id'            => 'username'
);
echo form_input($data);
echo "<br><br>";

echo form_label('password ');
echo form_password('password');
echo "<br><br>";

echo form_label('Cars ');
$options = array(
    'volvo'       => 'volvo',
    'benz'        => 'benz',
    'nissan'      => 'nissan',
);
echo form_dropdown('car', $options);
echo "<br><br>";

echo form_label('DOB ');
$data = array(
    'type'          => 'date',
    'name'          => 'dob'
);
echo form_input($data);
echo "<br><br>";

echo form_label('address ');
echo "<br>";
$data = array(
    'name'        => 'address',
    'rows'        => '8',
    'cols'        => '30'
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


<div>
<table border="1">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Cars</th>
                <th>Address</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            foreach($records as $value)
            {
                echo "<tr>";
                echo "<td>".$value->username."</td>";
                echo "<td>".$value->password."</td>";
                echo "<td>".$value->car."</td>";
                echo "<td>".$value->address."</td>";
                echo "<td>".$value->gender."</td>";
                echo "<td>".$value->dob."</td>";
                echo '<td><a href="'.site_url().'/formex/edit/'.$value->id.'">Edit</td>';
                echo '<td><a href="'.site_url().'/formex/del/'.$value->id.'">Delete</td>';
                echo "</tr>";
            } ?>
            </table>
            </body>
            </html>
