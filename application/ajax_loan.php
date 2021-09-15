<?php
// Establish Connection with MYSQL
include("../config/connect.php");
if($_POST['id'])
{
$id=$_POST['id'];
$sql=mysqli_query($link, "select * from loan_info where borrower='$id'");
while($row=mysqli_fetch_array($sql))
{
echo '<option value="'.$row['amount_topay'].'">'."Flexible(".$row['amount']."-"."&nbsp;"."bal:".$row['amount_topay'].")".'</option>';
}
}
?>