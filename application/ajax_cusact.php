<?php
// Establish Connection with MYSQL
include("../config/connect.php");
if($_POST['id'])
{
$id=$_POST['id'];
$sql=mysqli_query($link,"select * from borrowers where id='$id'");
while($row=mysqli_fetch_array($sql))
{
echo '<option selected="selected">--Select Customer--</option>';
echo '<option value="'.$row['id'].'">'.$row['account'].'</option>';
}
}

?>