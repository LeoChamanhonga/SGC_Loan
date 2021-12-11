<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];

$sql = "SELECT * FROM beneficiarias WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
while($dados = mysqli_fetch_array($rs)){
    $numero_previsto = $dados['numero_previsto'];
    echo "<span>$numero_previsto</span>";
}
