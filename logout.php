<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyas
 * Date: 7/16/2016
 * Time: 10:41 PM
 */
session_start();

//session_start();
session_unset();
session_destroy();

header("Location: login.php");
?>
