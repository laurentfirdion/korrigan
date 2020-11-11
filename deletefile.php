<?php

$file_name = $_POST['file'];
$dir = '/Applications/MAMP/htdocs/wordpress-korrigans/wp-content/uploads/partage/'; 

        
unlink($dir . $file_name); 
        

?>