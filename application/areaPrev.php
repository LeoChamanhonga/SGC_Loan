<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$cultura = $_GET['cultura'];

$sql = "SELECT area_prevista FROM producao_cultura WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal' AND cultura = '$cultura'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
while($dados = mysqli_fetch_array($rs)){
    $area_prevista = $dados['area_prevista'];
    echo "<span>$area_prevista</span>";
}
