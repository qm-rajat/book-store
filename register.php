<?php

$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "ERROR";
}

$username=$_POST['Username'];
    $password=$_POST['Password'];
    $email=$_POST['Email'];
    $hash=password_hash($password,PASSWORD_DEFAULT);


    $sql="INSERT INTO `registration_test` (`id`, `Username`, `Email`, `Password`) VALUES (NULL, '$username', '$email', '$hash');";

    $result=mysqli_query($conn,$sql);

    if ($result) {
        $m = "Successful";
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "alert('$m');";
        echo "window.location.href = '$url';";
        echo "</script>";
    }    
?>