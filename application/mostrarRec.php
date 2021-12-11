<?php include("include/header.php"); ?>
<option>Selecione a cultura</option>
<?php
$mutuario = $_GET['mutuario'];
$linha = $_GET['linha'];
$cadeia = $_GET['cadeia'];
$cadeiaVal = $_GET['cadeiaVal'];

$sql = "SELECT * FROM receita_cultura WHERE mutuario = '$mutuario' AND linha = '$linha' AND cadeia = '$cadeia' AND cadeiaval = '$cadeiaVal'";
$rs = mysqli_query($link, $sql) or die (mysqli_error($link));
while($dados = mysqli_fetch_array($rs)){
    $cultura = $dados['cultura'];
    echo "<option value='$cultura'>$cultura</option>";
}
