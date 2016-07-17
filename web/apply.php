<?php
session_start();
/**
 * Created by IntelliJ IDEA.
 * User: ilyas
 * Date: 7/16/2016
 * Time: 2:52 AM
 */
include('connect.php');
include('header.php');
?>
    <div style="text-align: center; font-size:25px;">
        <h2><b> Your Data</b></h2>
<?php
$email = $_SESSION["user"];
$q = mysqli_query($con, "select * from student where email = '$email'");
if (mysqli_num_rows($q) == 0)
    echo "Error WHile loading Data";
else {
    $row = mysqli_fetch_array($q);
    echo "<br / > ";
    echo "<b>Email: </b> ".$row["email"] . "<br /> <br />";
    echo "<b>Name: </b>".$row["name"] . "<br /><br /> ";
   // echo "<b>Father Name: </b>".$row["fname"] . "<br /> <br />";
    echo "<b>Phone No: </b>".$row["phone"] . "<br /> <br />";
    echo "<b>CNIC: </b>".$row["cnic"] . "<br /> <br />";
    echo "<b>Address: </b>".$row["address"] . "<br /> ";
}

$q = mysqli_query($con, "select * from academics where email = '$email'");
if (mysqli_num_rows($q) == 0)
    echo "You have't Added your Data Please Insert them, or Else you cant Apply to Universities<br /></br >";
else {
    $row = mysqli_fetch_array($q);
    echo "<br />";
    echo "<b>Matric Marks: </b>".$row["mmarks"] . "<br /> <br />";
    echo "<b>Matric Total Marks: </b>".$row["mtmarks"] . "<br /> <br />";
    echo "<b>FSc Marks: </b>".$row["fmarks"] . "<br /> <br />";
    echo "<b>FSc Total Marks</b>".$row["ftmarks"] . "<br /> <br />";
    echo "<br /> <br />";
    echo "Do you Want to Edit    ";
    echo "<a href='editdata.php' >Edit Data</a> <br />";
    echo "<br />OR <br /> <br />";
    echo "<a href='apply_continue.php' >Apply to Universities</a> <br /><br /><br />";
}
?></div>
