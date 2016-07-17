<?php
session_start();
/**
 * Created by IntelliJ IDEA.
 * User: ilyas
 * Date: 7/16/2016
 * Time: 2:52 AM
 */
?>

<?php
include('connect.php');
include ('header.php');
?>
<div style="text-align: center; font-size:25px;">
    <h2> Your Data</h2>
<?php
$email = $_SESSION["user"];
$q = mysqli_query($con, "select * from student where email = '$email'");
if (mysqli_num_rows($q) == 0)
    echo "Error WHile loading Data";
else {
    $row = mysqli_fetch_array($q);
    echo "<br /> ";
    echo $row["email"] . "<br />";
    echo $row["name"] . "<br />";
    echo $row["fname"] . "<br />";
    echo $row["phone"] . " <br />";
    echo $row["cnic"] . " <br />";
    echo $row["address"] . "<br />";
}

$q = mysqli_query($con, "select * from academics where email = '$email'");
if (mysqli_num_rows($q) == 0)
    echo "You have't Added your Data Please Insert them <br /></br >";
else {
    $row = mysqli_fetch_array($q);
    echo "<br />";
    echo $row["mmarks"] . " <br />";
    echo $row["mtmarks"] . "<br />";
    echo $row["fmarks"] . "<br />";
    echo $row["ftmarks"] . " <br />";
}
?>
<a href="editdata.php" >Edit Data</a>
</div>