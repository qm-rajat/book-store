<?php

$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "ERROR";
}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Username_Log=$_POST['Username_Log'];
        $Password_Log=$_POST['Password_Log'];

        $sql="SELECT * FROM `registration_test` WHERE `Username` like '$Username_Log'";

        $result=mysqli_query($conn,$sql);

        $rows=mysqli_num_rows($result);
        echo $rows;

        if($rows==1){
            while($row=mysqli_fetch_assoc($result)){
                if(password_verify($Password_Log,$row['Password'])){

                    echo 'Success';
                    header('location: main.php');
                }
                else{
                    $m = "Invalid username or password";
                    $url = "index.php";
                    echo "<script type='text/javascript'>";
                    echo "alert('$m');";
                    echo "window.location.href = '$url';";
                    echo "</script>";
                }
            }
        }
        else{
            $m = "Invalid username or password";
                    $url = "index.php";
                    echo "<script type='text/javascript'>";
                    echo "alert('$m');";
                    echo "window.location.href = '$url';";
                    echo "</script>";
        }
    }
    else{
        $m = "Data not found";
                    $url = "index.php";
                    echo "<script type='text/javascript'>";
                    echo "alert('$m');";
                    echo "window.location.href = '$url';";
                    echo "</script>";
    }
?>