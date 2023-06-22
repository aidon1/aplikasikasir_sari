<?php 
 $app_id = "202cb962ac59075b964b07152d234b70";
$new_password = "admin123";

echo password_hash($new_password, PASSWORD_DEFAULT) ;

?>