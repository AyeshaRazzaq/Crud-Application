<?php
$connection = mysqli_connect("localhost" , "root" , '' , 'mysqli_test');

session_start();

if(isset($_POST['delete']) && isset($_POST['rollno'])){

    $rollno = $_POST['rollno'];
    $query = mysqli_query($connection,"DELETE From student where rollno = $rollno");
    if(isset($query)){
        // echo "data deleted successfully!";
        header('Location:tables.php');
        $_SESSION['delstudent'] = "Student Deleted Successfully!!";
        exit();
    }
    else{
        $_SESSION['notdel'] = "Student Not Deleted!!";
    }
}
    else{
       echo "invalid request";
    }
?>