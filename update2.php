<?php
$connection = mysqli_connect("localhost", "root", '', 'mysqli_test');
session_start();
$user_id = $_POST['id'];
$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_password = $_POST['password'];

$sql = "UPDATE users SET  name= '{$user_name}', email= '{$user_email}',password= '{$user_password}' WHERE id = {$user_id}";
$result = mysqli_query($connection,$sql);
if(isset($sql))
{
    header('Location:users.php');
    $_SESSION['updateuser'] = "User Data Updated Successfully!!";
}
else{
    $_SESSION['notupdate'] = "User Data Not Updated!!";
}
?>