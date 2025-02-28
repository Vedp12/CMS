<?php 
session_start();
session_destroy();
header('location: /CMS/Connected_code/login.php')
?>