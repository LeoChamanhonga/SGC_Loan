<?php include("include/header.php"); ?>
<html>
<head>
    <title>Ficha de Mutuario</title>
</head>
<body>

<style>
    .ficha{
        width: 95%;
        margin: 10px auto;
    }
    .ficha fieldset{
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
    }
    .ficha fieldset .primeiro{
        width: 30%;
        margin-right: 5%;
    }
    .ficha fieldset .segundo{
        width: 30%;
    }
    @media print { 
        button { display:none; } 
        body { background: #fff; }
    }

</style>
<div class="ficha">
<?php 
$id = $_GET['id'];
$sql = "SELECT * FROM borrowers WHERE id = '$id'";
$rs = mysqli_query($link, $sql) or die(mysqli_erros($db));
while($dados = mysqli_fetch_assoc($rs)){
?>
    <fieldset><legend><h2>Ficha de Mutuario - <? echo $dados['fname']." ".$dados['lname']; ?></h2></legend>
      
    </fieldset>
    <fieldset><legend>Dados pessoais</legend>
        <div class="primeiro">
            <p><span>Nome</span>: <span><? echo $dados['fname']; ?></span></p>
            <p><span>Apelido</span>: <span<? echo $dados['lname']; ?></span></p>
            <p><span>Data de Nascimento</span>: <span><? echo $dados['data_nascimento']; ?></span></p>
            <p><span>Sexo</span>: <span><? echo $dados['sexo']; ?></span></p>
        </div>
        <div class="segundo">
            <p><span>Naturalidade</span>: <span><? echo $dados['naturalidade']; ?></span></p>
            <p><span>Filiacao</span>: <span><? echo $dados['filiacao']; ?></span></p>
            <p><span>Estado Civil</span>: <span><? echo $dados['estado_civil']; ?></span></p>
            <p><span>Numero de Conta</span>: <span><? echo $dados['account']; ?></span></p>
        </div>
    </fieldset>
    <fieldset><legend>Dados do Documento</legend>
        <div class="primeiro">
            <p><span>Documento</span>: <span><? echo $dados['documento']; ?></span></p>
            <p><span>Numero do Documento</span>: <span><? echo $dados['numero_documento	']; ?></span></p>
            <p><span>Data de Emissao</span>: <span><? echo $dados['emissao']; ?></span></p>
        </div>
        <div class="segundo">
            <p><span>Validade</span>: <span><? echo $dados['validade']; ?></span></p>
            <p><span>Local de Emissao</span>: <span><? echo $dados['localEmit']; ?></span></p>
            <p><span>Nuit</span>: <span><? echo $dados['nuit']; ?></span></p>
        </div>
    </fieldset>
    <fieldset><legend>Dados da Localizacao</legend>
        <div class="primeiro">
            <p><span>Residencia</span>: <span><? echo $dados['residencia']; ?></span></p>
            <p><span>Distrito</span>: <span><? echo $dados['distrito']; ?></span></p>
            
            
        </div>
        <div class="segundo">
            <p><span>Provincia</span>: <span><? echo $dados['state']; ?></span></p>
            <p><span>Pais</span>: <span><? echo $dados['country']; ?></span></p>
        </div>
    </fieldset>
    <fieldset><legend>Dados Adicionais e Contactos</legend>
        <div class="primeiro">
            
            <p><span>Email</span>: <span><? echo $dados['email']; ?></span></p>
            <p><span>Telefone</span>: <span><? echo $dados['phone']; ?></span></p>
        </div>
        <div class="segundo">
            <p><span>Beneficiario</span>: <span><? echo $dados['beneficiario']; ?></span></p>
            <p><span>Membros</span>: <span><? echo $dados['membros']; ?></span></p>
        </div>
    </fieldset>
    <?php } ?>
    <style>
        table{
            width: 100%;
        }
        table tr td{
            padding:8px;
        }
    </style>
    <br>
    <br>
    <br>
    <fieldset><legend>Dados de Financiamentos</legend>
    <table>
        <thead>
            <th>Linha de Financiamento</th>
            <th>Tipo de Credito</th>
            <th>Emprestimo</th>
            <th>Valor em Divida</th>
            <th>Data de Aprovacao</th>
        </thead>
        <tbody>
    <?php 
$id = $_GET['id'];
$sql = "SELECT (SELECT tipo_credito FROM tipo_credito as t WHERE t.id = l.credito) as credito, cadeia, amount, amount_topay, date_release FROM loan_info as l WHERE borrower = '$id'";
$rs = mysqli_query($link, $sql) or die(mysqli_erros($db));
while($row = mysqli_fetch_assoc($rs)){
    $credito = $row['credito'];
    $cadeia = $row['cadeia'];
    $valor = $row['amount'];
    $valor_pagar = $row['amount_topay'];
    $data_aprovacao = $row['date_release'];
    $mt = "Mt "; 
?> 

    <tr>
        <td><?php echo $credito?></td>
        <td><?php echo $cadeia?></td>
        <td><?php echo $mt.number_format($valor,2,".",","); ?></td>
        <td><?php echo $mt.number_format($valor_pagar,2,".",",");?></td>
        <td><?php echo $data_aprovacao?></td>
    </tr>
<?php } ?>
</tbody>
</table>
 </fieldset><br><br><br>
<button type="button" onclick="window.print();">
        Imprimir
    </button>
</div>
</body>
</html>