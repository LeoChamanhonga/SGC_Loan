<?php include("include/header.php"); ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM loan_info WHERE borrower = '$id'";
$rs = mysqli_query($link, $sql);
while($dados = mysqli_fetch_array($rs)){
    echo '<option value="'.$dados['amount_topay'].'">'."Flexible(".$dados['amount']."-"."&nbsp;"."bal:".$dados['amount_topay'].")".'</option>';
}