<header>
    <h3>Excluir Paciente</h3>
</header>

<?php
include 'db/conexao.php';

$idPaciente = mysqli_real_escape_string($conexao,$_GET["idPaciente"]);
$sql =  "DELETE FROM paciente WHERE idPaciente = '{$idPaciente}'";

mysqli_query($conexao, $sql) or die ("Erro ao excluir paciente" . mysqli_error($conexao));
echo  "Paciente excluído com sucesso!";


?>