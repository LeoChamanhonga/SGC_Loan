

<?php

include "../config/session.php"; 

// Nome do Arquivo do Excel que será gerado
$arquivo = 'mutuarios.xls';

echo "<style>
table{
    text-align: center;
}
</style>";

// Criamos uma tabela HTML com o formato da planilha para excel
$tabela = '<table border="1" cellpadding="5">';
$tabela .= '<tr>';
$tabela .= '<td colspan="30">Tabela de Mutuarios</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>ID</b></td>';
$tabela .= '<td><b>Numero de Conta</b></td>';
$tabela .= '<td><b>Nome</b></td>';
$tabela .= '<td><b>Apelido</b></td>';
$tabela .= '<td><b>Data de Nascimento</b></td>';
$tabela .= '<td><b>Sexo</b></td>';
$tabela .= '<td><b>Naturalidade</b></td>';
$tabela .= '<td><b>Filiacao</b></td>';
$tabela .= '<td><b>Estado Civil</b></td>';
$tabela .= '<td><b>Local de Residencia</b></td>';
$tabela .= '<td><b>Documento</b></td>';
$tabela .= '<td><b>Numero do Documento</b></td>';
$tabela .= '<td><b>Nuit</b></td>';
$tabela .= '<td><b>Data da Emissao</b></td>';
$tabela .= '<td><b>Validade</b></td>';
$tabela .= '<td><b>Local de Emissao</b></td>';
$tabela .= '<td><b>Email</b></td>';
$tabela .= '<td><b>Telemovel</b></td>';
$tabela .= '<td><b>Povoado</b></td>';
$tabela .= '<td><b>Localidade</b></td>';
$tabela .= '<td><b>Posto Administrativo</b></td>';
$tabela .= '<td><b>Distrito</b></td>';
$tabela .= '<td><b>Cidade</b></td>';
$tabela .= '<td><b>Provincia</b></td>';
$tabela .= '<td><b>Codigo</b></td>';
$tabela .= '<td><b>Pais</b></td>';
$tabela .= '<td><b>Categoria de Beneficiario</b></td>';
$tabela .= '<td><b>Membros do Grupo (Opcional)</b></td>';
$tabela .= '<td><b>Comentários</b></td>';
$tabela .= '<td><b>Status</b></td>';
$tabela .= '</tr>';


// Puxando dados do Banco de dados
 
$SQL = "SELECT * from borrowers";
$resultado = mysqli_query ($link,$SQL ) or die ("Sql error : " . mysqli_error( ) );

while($dados = mysqli_fetch_array($resultado))
{
$tabela .= '<tr>';
$tabela .= '<td>'.$dados['id'].'</td>';
$tabela .= '<td>'.$dados['account'].'</td>';
$tabela .= '<td>'.$dados['fname'].'</td>';
$tabela .= '<td>'.$dados['lname'].'</td>';
$tabela .= '<td>'.$dados['data_nascimento'].'</td>';
$tabela .= '<td>'.$dados['sexo'].'</td>';
$tabela .= '<td>'.$dados['naturalidade'].'</td>';
$tabela .= '<td>'.$dados['filiacao'].'</td>';
$tabela .= '<td>'.$dados['estado_civil'].'</td>';
$tabela .= '<td>'.$dados['residencia'].'</td>';
$tabela .= '<td>'.$dados['documento'].'</td>';
$tabela .= '<td>'.$dados['numero_documento'].'</td>';
$tabela .= '<td>'.$dados['nuit'].'</td>';
$tabela .= '<td>'.$dados['emissao'].'</td>';
$tabela .= '<td>'.$dados['validade'].'</td>';
$tabela .= '<td>'.$dados['localEmit'].'</td>';
$tabela .= '<td>'.$dados['email'].'</td>';
$tabela .= '<td>'.$dados['phone'].'</td>';
$tabela .= '<td>'.$dados['povoado'].'</td>';
$tabela .= '<td>'.$dados['localidade'].'</td>';
$tabela .= '<td>'.$dados['posto'].'</td>';
$tabela .= '<td>'.$dados['distrito'].'</td>';
$tabela .= '<td>'.$dados['city'].'</td>';
$tabela .= '<td>'.$dados['state'].'</td>';
$tabela .= '<td>'.$dados['zip'].'</td>';
$tabela .= '<td>'.$dados['country'].'</td>';
$tabela .= '<td>'.$dados['beneficiario'].'</td>';
$tabela .= '<td>'.$dados['membros'].'</td>';
$tabela .= '<td>'.$dados['comment'].'</td>';
$tabela .= '<td>'.$dados['status'].'</td>';
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