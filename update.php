<?php
$connection = mysqli_connect("localhost", "root", '', 'mysqli_test');

session_start();

$stu_id = $_POST['rollno'];
$stu_name = $_POST['name'];
$stu_email = $_POST['email'];
$stu_phone = $_POST['phone'];

$sql = "UPDATE student SET name= '{$stu_name}', email= '{$stu_email}', phone = '{$stu_phone}' WHERE rollno = {$stu_id}";
$result = mysqli_query($connection,$sql);
if($result)
{
    header('Location:tables.php');
    $_SESSION['editstudent'] = "Student Data Updated Successfully!!";
}
else{
    $_SESSION['notedit'] = "Student data is not Updated!!";
}


?>