<?php
 $connection = mysqli_connect("localhost" , "root" , '' , 'mysqli_test');
 if($connection){
    echo "connection successful";
 }else{
    echo "connection not successful";
 }
 
?>