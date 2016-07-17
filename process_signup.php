<?php
session_start();
include('connect.php');
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $cnic = $_POST["cnic"];
    $sex = $_POST["sex"];
    $address = $_POST["address"];

    if(!empty($username)&&!empty($password)&&!empty($name)&&!empty($phone)&&!empty($cnic)&&!empty($sex)&&!empty($address))
    {
        $q = mysqli_query($con,"INSERT INTO student (email, password, name, phone, cnic, sex, address) 
              VALUES ('$username','$password','$name','$phone','$cnic','$sex','$address')");
        if($q) {
            echo "Sign Up Successfull";
            $_SESSION["user"]=$username;
            header('Location: ./web/index.html');
        }
        else {
            header('Location: signup.php?msg=e');
        }
    }
    else
        header('Location: signup.php?msg=e');
}
?>