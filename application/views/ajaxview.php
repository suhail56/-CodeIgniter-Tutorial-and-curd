<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
Search: 
<input type="text" id="one"><br><br>
<div id="sec"></div>
</body>
</html>

<script>
$(document).ready(function(){
  load ();
function load(q)
{
  $.ajax({url:"<?php echo base_url(); ?>ajax1/fetch", method:"POST",data:{query:q}, success:function(data) {$('#sec').html(data);}})
}

$('#one').keyup(function(){
var srh = $(this).val();
if(srh != '')
{ load(srh); }
else { load(); }
 });
});
</script>