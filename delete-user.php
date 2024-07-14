<?php
$connection = mysqli_connect("localhost" , "root" , '' , 'mysqli_test');
session_start();
if(isset($_POST['delete']) && isset($_POST['id'])){

    $id = $_POST['id'];
    $query = mysqli_query($connection,"DELETE From users where id = $id");
    if(isset($query)){
        // echo "data deleted successfully!";
        header('Location:users.php');
        $_SESSION['deluser'] = "Student Deleted Successfully!!";
        exit();
    }
    else{
        $_SESSION['notdel'] = "Student not Deleted!!";
    }
}
    else{
       echo "invalid request";
    }
?>