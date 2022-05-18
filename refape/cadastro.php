<?php
require_once("conexao.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$ra = $_POST['ra']; 
$op = $_POST['ocupacao'];
$dt=$_POST['data_nascimento'];
echo "Nome: $nome" ."<br/>"."CPF: $cpf"."<br/>"."Registro acad&ecirc;mico: $ra"."<br/>"."Ocupa&ccedil;&atilde;o: $op "."<br/>"."Data de nascimento: $dt"."<br/>";
$sql = " INSERT INTO tcc_refape.funcionarios (nome, cpf, ra, ocupacao, data_nascimento) VALUES ( '$nome', '$cpf', '$ra', '$op', '$dt');";
$resultado=pg_query($conexao, $sql);
if(!$resultado){
    echo "Erro ao inserir! ".pg_result_error($resultado);
}else{
    echo  "Funcion&aacute;rio $nome inserido com sucesso!";
}
pg_close($conexao);
echo "<br/><br/>";
echo "<input type='button' value='Voltar' onClick='javascript:history.back();'/>";
?>

