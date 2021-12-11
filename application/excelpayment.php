<?php
include "../config/session.php"; 

// Nome do Arquivo do Excel que será gerado
$arquivo = 'Pagamentos.xls';

echo "<style>
table{
    text-align: center;
}
</style>";

// Criamos uma tabela HTML com o formato da planilha para excel
$tabela = '<table border="1" cellpadding="5">';
$tabela .= '<tr>';
$tabela .= '<td colspan="21">Tabela de Pagamentos</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>ID</b></td>';
$tabela .= '<td><b>Numero de Conta</b></td>';
$tabela .= '<td><b>Mutuario</b></td>';
$tabela .= '<td><b>Emprestimo</b></td>';
$tabela .= '<td><b>Data do Pagamento</b></td>';
$tabela .= '<td><b>Valor a Pagar</b></td>';
$tabela .= '<td><b>Referencia do Deposito</b></td>';
$tabela .= '<td><b>Conta de Deposito</b></td>';
$tabela .= '<td><b>Comentarios</b></td>';
$tabela .= '</tr>';


// Puxando dados do Banco de dados
 
$SQL = "SELECT `id`, (SELECT account FROM borrowers as b WHERE b.id = p.customer) as conta, (SELECT CONCAT(fname,' ', lname) as nome FROM borrowers as b WHERE b.id = p.customer) as nomecompleto, `loan`, `pay_date`, `amount_to_pay`, `referencia`, `conta`, `remarks` from payments p";
$resultado = mysqli_query ($link,$SQL ) or die ("Sql error : " . mysqli_error( ) );

while($dados = mysqli_fetch_array($resultado))
{
$tabela .= '<tr>';
$tabela .= '<td>'.$dados['id'].'</td>';
$tabela .= '<td>'.$dados['conta'].'</td>';
$tabela .= '<td>'.$dados['nomecompleto'].'</td>';
$tabela .= '<td>'.$dados['loan'].'</td>';
$tabela .= '<td>'.$dados['pay_date'].'</td>';
$tabela .= '<td>'.$dados['amount_to_pay'].'</td>';
$tabela .= '<td>'.$dados['referencia'].'</td>';
$tabela .= '<td>'.$dados['conta'].'</td>';
$tabela .= '<td>'.$dados['remarks'].'</td>';

$tabela .= '</tr>';
}

$tabela .= '</table>';

// Força o Download do Arquivo Gerado
header ('Cache-Control: no-cache, must-revalidate');
header ('Pragma: no-cache');
header('Content-Type: application/x-msexcel');
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"");
echo $tabela;
 
?>