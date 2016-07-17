<?php
session_start();
if(isset($_SESSION["user"])) {
    echo "Something ";
    header('Location: index.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title> Sign Up </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <!-- chart -->
    <script src="js/Chart.js"></script>
    <!-- //chart -->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Meters graphs -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

</head>

<body class="sign-in-up">
<section>
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-in-form">
                <div class="sign-in-form-top">
                    <p><span>Sign Up Here</span></p>

                    <?php
                    if(isset($_GET['msg'])) { ?>
                        <div style="color:red">Sign Up Error Try Again</div>
                        <?php
                    }
                    ?>

                </div>
                <div class="signin">
                    <form action="process_signup.php" method="post" accept-charset="utf-8" role="form">
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="text" class="user" name="username" value="" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="password" class="lock" name="password" value="" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="text" class="user" name="name" value="" placeholder="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name:';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="text" class="user" name="phone" value="" placeholder="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="text" class="user" name="cnic" value="" placeholder="CNIC" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'CNIC';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="text" class="user" name="sex" value="" placeholder="Sex" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Sex';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="text" class="user" name="address" value="" placeholder="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <input type="submit" name="submit" value="Sign Up" /></form>
                    </form>
                </div>
                <div class="new_people">
                    <h4>Already Have an account</h4><br><br>
                    <a href="login.php">Log In Here</a>
                </div>
            </div>
        </div>
    </div>
    <!--footer section start-->
    <footer>
        <p>&copy 2016. All Rights Reserved</p>
    </footer>
    <!--footer section end-->
</section>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>