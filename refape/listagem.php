<html>
<head> 
<style>
     table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
</head>
<body>
<?php
require_once("conexao.php");
$sql = "SELECT * FROM tcc_refape.funcionarios";
$resultado=pg_query($conexao,$sql);
echo "Funcion&aacute;rios j&aacute; cadastrados:<br/><br/>";
echo "<table>";
echo "<strong>";
echo "<tr><th>Nome</th><th>CPF</th><th>RA</th><th>Ocupa&ccedil;&atilde;o</th><th>Data de nascimento</th></tr>";
while($row = pg_fetch_assoc($resultado)){
     echo "<tr> <td>".$row['nome']."</td><td>".$row['cpf']."</td><td>".$row['ra']."</td><td>".$row['ocupacao']."</td><td>".$row['data_nascimento']."</td></tr>";
}
echo "</table>";
pg_close($conexao);
echo "<br/><br/>";
echo "<input type='button' value='Voltar' onClick='javascript:history.back();'/>";
?>
</body>
</html>