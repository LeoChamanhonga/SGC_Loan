<?php include("include/header.php"); ?>
<?php
$id = $_GET['id'];
$sql = "SELECT account FROM borrowers WHERE id = '$id'";
$rs = mysqli_query($link, $sql);
while($dados = mysqli_fetch_array($rs)){
    echo '<option value="'.$dados['account'].'">'.$dados['account'].'</option>';
}