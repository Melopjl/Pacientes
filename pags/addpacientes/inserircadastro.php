<header>
    <h3>Inserir Cadastro</h3>
</header>

<?php
include 'db/conexao.php';

$nomePaciente = mysqli_real_escape_string($conexao, $_POST["nomePaciente"]);
$telefonePaciente = mysqli_real_escape_string($conexao, $_POST["telefonePaciente"]);
$cpfPaciente = mysqli_real_escape_string($conexao, $_POST["cpfPaciente"]);
$sexoPaciente = mysqli_real_escape_string($conexao, $_POST["sexoPaciente"]);
$datanascPaciente = mysqli_real_escape_string($conexao, $_POST["datanascPaciente"]);
$idadePaciente = mysqli_real_escape_string($conexao, $_POST["idadePaciente"]);
$causaPaciente = mysqli_real_escape_string($conexao, $_POST["causaPaciente"]);

$sql = "INSERT INTO paciente (
    nomePaciente, 
    telefonePaciente, 
    cpfPaciente, 
    sexoPaciente, 
    datanascPaciente,
    idadePaciente,
    causaPaciente
) VALUES (
    '{$nomePaciente}',
    '{$telefonePaciente}',
    '{$cpfPaciente}',
    '{$sexoPaciente}',
    '{$datanascPaciente}',
    '{$idadePaciente}',
    '{$causaPaciente}'
)";


if (mysqli_query($conexao, $sql)) {
    echo "O cadastro foi criado com sucesso!";
} else {
    echo "Erro ao executar a consulta: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
