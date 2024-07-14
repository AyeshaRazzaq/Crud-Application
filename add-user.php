<?php 
    session_start();
    
    $connection = mysqli_connect("localhost" , "root" , '' , 'mysqli_test');
    $name = $_POST['fname'] . " " . $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ( (!empty($_POST['fname']))  && (!empty($_POST['lname'])) ) {
      
        $query = mysqli_query($connection , "INSERT INTO users (`name` , `email` , `password`) VALUES ('$name' ,
        '$email' , '$password')");
        
        if (isset($query)) {
          $_SESSION['status']= "Data inserted Successfully";
          header('Location:register.php');
          exit;
        }else{
          $_SESSION['submit'] = "data not inserted";
          
        }
    }else{
      $_SESSION['submit'] = "please fill out first name and Last name";
      header('Location:register.php');
    }
    die;
    // $query = mysqli_query('connection' , 'query that will executed');
?>                    