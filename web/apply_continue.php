<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyas
 * Date: 7/16/2016
 * Time: 5:21 AM
 */
session_start();
include('header.php');
?>
<div>
    <div class="container">
        <div class="col-sm-5">
            <?php
            if (isset($_GET['msg'])) { ?>
                <div>Invalid username or password</div>
                <?php
            }
            ?>
            <div style="text-align: center; font-size:25px;">
            <h3>University Details</h3>
            <form action="process_apply.php" method="post" accept-charset="utf-8" role="form">
                <h2>Departments Detail</h2>
                <input type="text" name="major" value="Engineering" placeholder="Major"/><br>
                <input type="checkbox" name="ee" value="ee">Electrical Engineering<br>
                <input type="checkbox" name="me" value="me">Mechanical Engineering<br>
                <input type="checkbox" name="cg" value="cg">Computer Engineering<br>
                <input type="checkbox" name="ce" value="ce">Civil Engineering<br>
                <br/>
                <h2> Select Universities </h2>
                <br/>
                <input type="checkbox" name="nust" value="nust">NUST<br>
                <input type="checkbox" name="giki" value="giki">GIKI<br>
                <input type="checkbox" name="uet" value="uet">UET Lahore<br>
                <br>
                <input type="submit" name="submit" value="Submit"/></form>
        </div>
    </div>
</div>