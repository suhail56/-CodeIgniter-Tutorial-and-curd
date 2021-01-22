<html>   
<body>  
    Welcome <?php echo $this->session->userdata('user'); ?>   
<br>  
<?php echo anchor('session1/logout', 'Logout'); ?>
</body>  
</html>  