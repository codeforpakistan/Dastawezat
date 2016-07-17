<?php
session_start();
/**
 * Created by IntelliJ IDEA.
 * User: ilyas
 * Date: 7/16/2016
 * Time: 5:22 AM
 */
include('connect.php');
$name=$fname=$email=$phone=$cnic=$address=$sex=$mmarks=$mtmarks=$fmarks=$ftmarks=$major=$departments="";
if(isset($_POST["submit"]))
{
    $username = $_SESSION["user"];
    if(!empty($username))
    {
        $q = mysqli_query($con,"select * from student where email = '$username'");
        if(mysqli_num_rows($q)==0)
            echo "Data not Found in db";
        else
        {
            $row = mysqli_fetch_array($q);
            $email=$row["email"];
            $name=$row["name"];
            $fname=$row["fname"];
            $phone=$row["phone"];
            $cnic=$row["cnic"];
            $address=$row["address"];
            $sex=$row["sex"];
        }
        $t = mysqli_query($con,"select * from academics where email = '$username'");
        if(mysqli_num_rows($t)==0)
            echo "Data not Found in db";
        else
        {
            $row = mysqli_fetch_array($t);
            $mmarks=$row["mmarks"];
            $mtmarks=$row["mtmarks"];
            $fmarks=$row["fmarks"];
            $ftmarks=$row["ftmarks"];
        }
    }
}

$major = $_POST["major"];
$departments = "CIVIL, ELECTRICAL, MECHANICAL";
$a=0;
if (isset($_POST['nust']) && $_POST['nust'] == 'nust') {
    $a=1;
    $q = mysqli_query($con,"INSERT INTO nust (name,fname,email, phone, cnic, address, sex,mmarks,mtmarks,fmarks,ftmarks,major,departments) 
              VALUES ('$name','$fname','$email','$phone','$cnic','$address','$sex','$mmarks','$mtmarks','$fmarks','$ftmarks','$major','$departments')");
    if($q) {
        echo "Submitted Successfully to Nust <br> <br>";
    }
    else {
        echo "Error";
    }
}
if (isset($_POST['giki']) && $_POST['giki'] == 'giki') {
    $a=1;
    $q = mysqli_query($con,"INSERT INTO giki (name,fname,email, phone, cnic, address, sex,mmarks,mtmarks,fmarks,ftmarks,major,departments) 
              VALUES ('$name','$fname','$email','$phone','$cnic','$address','$sex','$mmarks','$mtmarks','$fmarks','$ftmarks','$major','$departments')");
    if($q) {
        echo "Submitted Successfully to Giki <br> <br>";
    }
    else {
        echo "Error";
    }
}
if (isset($_POST['uet']) && $_POST['uet'] == 'uet') {
    $a=1;
    $q = mysqli_query($con,"INSERT INTO uet (name,fname,email, phone, cnic, address, sex,mmarks,mtmarks,fmarks,ftmarks,major,departments) 
              VALUES ('$name','$fname','$email','$phone','$cnic','$address','$sex','$mmarks','$mtmarks','$fmarks','$ftmarks','$major','$departments')");
    if($q) {
        echo "Submitted Successfully to UET Lahore <br> <br>";
    }
    else {
        echo "Error applying to UET";
    }
}
if($a==0){
    echo "You Have't selected any University";
}
?>