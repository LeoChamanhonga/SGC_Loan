<?php include ('connect.php');
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['tid']) || (trim($_SESSION['tid']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php 
}
$session_id=$_SESSION['tid'];

$user_query = mysqli_query($link, "select * from user where id = '$session_id'")or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);
$name = $user_row['name'];
$email = $user_row['email'];

?>