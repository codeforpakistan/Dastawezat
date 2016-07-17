<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyas
 * Date: 7/16/2016
 * Time: 4:02 AM
 */
session_start();
include('header.php');
?>
<div>
    <div class="container">
        <div class="col-sm-5" style="width: 100%;align-content: center">

            <?php
            if(isset($_GET['msg'])) { ?>
                <div >Error While Editing the Data Please Try Again</div>
                <?php
            }
            ?>

            <h2>Edit Your Data</h2>
            <form action="process_edit.php" method="post" accept-charset="utf-8" role="form">

                <input type="text" name="phone" value=""  placeholder="Phone No"  /><br><br>
                <input type="text" name="address" value=""  placeholder="Address"  /><br>
                <h2 > Matriculation </h2>
                <input type="text" name="mmarks" value=""  placeholder="Marks Obtained"  /><br><br>
                <input type="text" name="mtmarks" value=""  placeholder="Total Marks"  /><br>
                <h2 > F.A/F.Sc </h2>
                <input type="text" name="fmarks" value=""  placeholder="Marks Obtained"  /><br><br>
                <input type="text" name="ftmarks" value=""  placeholder="Total Marks"  /><br>
                <input type="submit" name="submit" value="Save Changes" /></form>
        </div>
    </div>
</div>