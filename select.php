<?php
$connection = mysqli_connect("localhost" , "root" , '' , 'mysqli_test');

$query = mysqli_query($connection , "SELECT * FROM users");
$num = mysqli_num_rows($query);
echo $num;
echo "<br>";

// to fetch the number of recorded rows fetch assoc will be  used
if($num > 0){
    while($row = mysqli_fetch_assoc($query))
    {
        echo $row['name'] . " ". $row['email'] . " " . $row['password'];
        echo "<br>";
    }
}
?>