<?php include("include/header.php"); ?>
<option>Selecione a cadeia de valores</option>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM cadeia_valores WHERE tipo_credito = '$id'";
$rs = mysqli_query($link, $sql);
while($dados = mysqli_fetch_array($rs)){
    $id = $dados['id'];
    $cadeia = $dados['cadeia_valores'];
    echo "<option value='$cadeia'>$cadeia</option>";
}