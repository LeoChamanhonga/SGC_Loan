<?php

error_reporting(0);

$db_host = $_POST['dbhost'];
$db_user = $_POST['dbuser'];
$db_password = $_POST['dbpass'];
$db_name = $_POST['dbname'];
$cn = '1';

if ($cn == '1') {
    $input1 = "<?php ";
	$input2 = "$";
	$input3 = "link";
	$input4 = " =";
	$input5 = " mysqli_connect('$db_host','$db_user','$db_password','$db_name') or die('Unable to Connect to Database'); ";
	$input6 = "?>";

    $wConfig = '../../config/connect.php';	

	$fh = fopen($wConfig, 'w');

    if ($fh==false) {

        echo "can't create config file, your server does not support 'fopen' function, please provide the permisson of your root folder or create a file named - connect.php with following contents in config folder.";
        echo "<pre>";
        echo htmlentities($input1);
		echo htmlentities($input2);
		echo htmlentities($input3);
		echo htmlentities($input4);
		echo htmlentities($input5);
		echo htmlentities($input6);
        exit();

    }

    fwrite($fh, $input1);
	fwrite($fh, $input2);
	fwrite($fh, $input3);
	fwrite($fh, $input4);
	fwrite($fh, $input5);
	fwrite($fh, $input6);
    fclose($fh);

    $dbh = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $sql = file_get_contents('loan.sql');
    $qr = $dbh->exec($sql);
} else {
    header("location: step3.php?_error=1");
    exit;
}
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
        <?php
        if ($cn == '1') {
            $cururl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $appurl = str_replace('/install/step4.php', '', $cururl);
            $orginal_path=str_replace('application','',$appurl);
            ?>
            <p>
                <strong>Config File Created and Database Imported.</strong><br>
            </p>
            <form action="step5.php" method="post">
                <fieldset>
                    <legend>Configure your Application URL in the Database</legend>
                    <label>URL</label>
                    <input type='text' name="appurl" class="form-control" value="<?php echo $orginal_path; ?>">
                    <span class='help-block'>Please do not edit above url if you are unsure. Just click continue.</span>

                    <button type='submit' class='btn btn-primary'>Continue</button>
                </fieldset>
            </form>
        <?php
        } elseif ($cn == '2') {
            ?>
            <p>
                MySQL Connection was successful. An error occurred while adding data on MySQL. Unsuccessful
                Installation. Please refer manual installation in the Documentation or Contact leochamanhonga@gmail.com for
                helping on installation
            </p>

        <?php
        } else {
            ?>
    <p> MySQL Connection Failed. </p>
        <?php

        }
        ?>
    </div>
</div>
<!--  contents area end  -->
</div>
<div class="footer">Copyright &copy; SBDCo 2018 Todos directos reservados<br/>
    <br/>
</div>
</body>
</html>

