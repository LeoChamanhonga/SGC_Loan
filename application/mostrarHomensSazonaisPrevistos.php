<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];

$sql = "SELECT * FROM numero_empregos_sazonais WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
while($dados = mysqli_fetch_array($rs)){
    $homens_previstos = $dados['homens_previstos'];
    echo "<span>$homens_previstos</span>";
}
