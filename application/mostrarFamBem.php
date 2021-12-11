<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];

$sql = "SELECT * FROM familias_beneficiarias WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
while($dados = mysqli_fetch_array($rs)){
    $numero_previsto = $dados['numero_previsto'];
    echo "<span>$numero_previsto</span>";
}
