<?php include("include/header.php"); ?>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];
$mulheres_fixo = $_GET['mulheres_fixo'];
$homens_fixo = $_GET['homens_fixo'];

$sql = "INSERT INTO numero_empregos_fixos(mulheres_previstas, homens_previstos, mutuario, linha, cadeia, cadeiaval)VALUES('$mulheres_fixo', '$homens_fixo', '$mutuario', '$linha', '$cadeia', '$cadeiaVal')";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
if($rs > 0){
    echo "Emprego fixo adicionado com sucesso!";
}else{
    echo "Erro ao adicionar emprego!";
}