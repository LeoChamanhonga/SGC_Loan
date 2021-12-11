<?php
include "../config/session.php"; 

// Nome do Arquivo do Excel que será gerado
$arquivo = 'Emprestimos.xls';

echo "<style>
table{
    text-align: center;
}
</style>";

// Criamos uma tabela HTML com o formato da planilha para excel
$tabela = '<table border="1" cellpadding="5">';
$tabela .= '<tr>';
$tabela .= '<td colspan="21">Tabela de Emprestimos</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>ID</b></td>';
$tabela .= '<td><b>Numero de Conta</b></td>';
$tabela .= '<td><b>Mutuario</b></td>';
$tabela .= '<td><b>Tipo de Credito</b></td>';
$tabela .= '<td><b>Cadeia de Valores</b></td>';
$tabela .= '<td><b>Valor</b></td>';
$tabela .= '<td><b>Descricao</b></td>';
$tabela .= '<td><b>Caucao</b></td>';
$tabela .= '<td><b>Comparticipacao</b></td>';
$tabela .= '<td><b>Data de Aprovacao</b></td>';
$tabela .= '<td><b>Status</b></td>';
$tabela .= '<td><b>Comentarios</b></td>';
$tabela .= '<td><b>Data do Pagamento</b></td>';
$tabela .= '<td><b>Valor a Pagar</b></td>';
$tabela .= '<td><b>Faturado Por</b></td>';
$tabela .= '<td><b>Comentarios</b></td>';
$tabela .= '<td><b>Estado de Aprovacao</b></td>';
$tabela .= '</tr>';


// Puxando dados do Banco de dados
 
$SQL = "SELECT `id`, (SELECT CONCAT(fname,' ', lname) as nome FROM borrowers as b WHERE b.id = l.borrower) as nomecompleto, (SELECT account FROM borrowers as b WHERE b.id = l.borrower) as conta, (SELECT tipo_credito FROM tipo_credito as t WHERE t.id = l.credito) as credito, `cadeia`, `desc`, `amount`, `caucao`, `comparticipacao`, `date_release`, `agent`, `remarks`, `status`, `pay_date`, `amount_topay`, `teller`, `remark`, `upstatus` from loan_info as l";
$resultado = mysqli_query ($link,$SQL ) or die ("Sql error : " . mysqli_error( ) );

while($dados = mysqli_fetch_array($resultado))
{
$tabela .= '<tr>';
$tabela .= '<td>'.$dados['id'].'</td>';
$tabela .= '<td>'.$dados['conta'].'</td>';
$tabela .= '<td>'.$dados['nomecompleto'].'</td>';
$tabela .= '<td>'.$dados['credito'].'</td>';
$tabela .= '<td>'.$dados['cadeia'].'</td>';
$tabela .= '<td>'.$dados['amount'].'</td>';
$tabela .= '<td>'.$dados['desc'].'</td>';
$tabela .= '<td>'.$dados['caucao'].'</td>';
$tabela .= '<td>'.$dados['comparticipacao'].'</td>';
$tabela .= '<td>'.$dados['date_release'].'</td>';
$tabela .= '<td>'.$dados['status'].'</td>';
$tabela .= '<td>'.$dados['remarks'].'</td>';
$tabela .= '<td>'.$dados['pay_date'].'</td>';
$tabela .= '<td>'.$dados['amount_topay'].'</td>';
$tabela .= '<td>'.$dados['teller'].'</td>';
$tabela .= '<td>'.$dados['remark'].'</td>';
$tabela .= '<td>'.$dados['upstatus'].'</td>';

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