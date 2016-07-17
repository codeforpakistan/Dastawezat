<?php
    session_start();
?>


<?php
include ("./template/header.php");
echo "Hello  ". $_SESSION["user"];
/**
 * Created by IntelliJ IDEA.
 * User: ilyas
 * Date: 7/16/2016
 * Time: 2:39 AM
 */
?>