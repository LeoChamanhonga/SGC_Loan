<?php
error_reporting(0);
$appurl = $_POST['appurl'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Instalador de SGC</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../img/ass.png"> 
    <style type="text/css">

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>


</head>
<body style='background-color: #deead3;'>
<div class='main-container'>
    <div class='header'>
        <div class="header-box wrapper">
            <div class="hd-logo"><a href="#"><img src="../../img/ass.png" width="50" height="50" alt="LMS"/></a></div>
        </div>

    </div>
    <!--  contents area start  -->
    <div class="col-lg-12">
        <h4>Advance LMS Auto Installer </h4>

        <p>
            <strong>Congratulations!</strong><br>
            You have just install SGC Management System with Savings System & SMS Notification!<br>
            <p><b>To Login Admin Portal:</b><p>
            Use this link -
            <?php
            $cururl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $appurl = str_replace('/install/step5.php', '', $cururl);
            $orginal_path=str_replace('application','',$appurl);

            echo '<b><a href="' . $orginal_path .'">' . $orginal_path . '</a></b>';
            ?>
            <br>
            Utilizador: <b>admin</b><br>
            Password: <b>admin</b>
            <p>Depois do login , go to Setup -> System Settings to change other Configurations.</p>
        </p>

    </div>
</div>
<!--  contents area end  -->
</div>
<div class="footer">Copyright &copy; SBDCo <?php echo date("Y"); ?>Todos directos reservados<br/>
    <br/>
</div>
</body>
</html>