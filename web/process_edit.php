<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyas
 * Date: 7/16/2016
 * Time: 4:14 AM
 */
session_start();
include('connect.php');

if (isset($_POST["submit"])) {
    $username = $_SESSION["user"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $mmarks = $_POST["mmarks"];
    $mtmarks = $_POST["mtmarks"];
    $fmarks = $_POST["fmarks"];
    $ftmarks = $_POST["ftmarks"];
    if (!empty($username) && !empty($phone) && !empty($address)) {
        $q = mysqli_query($con, "UPDATE student SET phone = '$phone', address = '$address' WHERE email='$username'");
        if ($q) {
            echo "Edit Successfull";
            header('Location: mydata.php');
        } else {
            header('Location: editdata.php?msg=e');
        }
    } else
        header('Location: editdata.php?msg=e');
    if (!empty($mmarks) && !empty($mtmarks) && !empty($fmarks) && !empty($ftmarks)) {
        $t = mysqli_query($con, "SELECT * FROM academics WHERE email='$username'");
        if(!mysqli_num_rows($q)==0){
            $q = mysqli_query($con, "UPDATE academics SET mmarks = '$mtmarks', mtmarks = '$mtmarks', fmarks='$fmarks',
                              ftmarks='$ftmarks'WHERE email='$username'");
            if ($q) {
                echo "Edit Successfull";
                header('Location: mydata.php');
            } else {
                header('Location: editdata.php?msg=e');
            }
        } else {
            $q = mysqli_query($con, "INSERT INTO academics (email, mmarks, mtmarks, fmarks, ftmarks) 
              VALUES ('$username','$mmarks','$mtmarks','$fmarks','$ftmarks')");
            if ($q) {
                echo "Edit Successfull";
                header('Location: mydata.php');
            } else {
                header('Location: editdata.php?msg=e');
            }
        }
    } else
        header('Location: editdata.php?msg=e');
}
?>