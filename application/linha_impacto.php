<?php include("include/header.php"); ?>
<option>Selecione a linha de financiamento</option>
<?php
$id = $_GET['id'];
$getin = mysqli_query($link, "SELECT (SELECT tipo_credito FROM tipo_credito as t WHERE t.id = l.credito) as credito, (SELECT id FROM tipo_credito as t WHERE t.id = l.credito) as id FROM loan_info as l WHERE borrower = '$id'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($getin))
{
echo '<option value="'.$row['id'].'">'.$row['credito'].'</option>';
}
?>