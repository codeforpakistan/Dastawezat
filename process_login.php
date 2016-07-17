<?php
session_start();
include('connect.php');
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(!empty($username)&&!empty($password))
    {
        echo $username. $password;
       $q = mysqli_query($con,"select * from student where email = '$username' && password='$password'");
        if(mysqli_num_rows($q)==0)
            header('Location: login.php?msg=e');
        else
        {
            $row = mysqli_fetch_array($q);
            $_SESSION["user"]=$row["email"];
            header('Location: ./web/index.html');
        }
    }
    else
        header('Location: login.php?msg=e');
}
else{
    echo "Error";
}
?>