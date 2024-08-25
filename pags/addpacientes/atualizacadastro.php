<header>
    <h3>Atualizar Cadastro</h3>
</header>

<?php
include 'db/conexao.php';


if (!isset($_POST["idPaciente"], $_POST["nomePaciente"], $_POST["telefonePaciente"], $_POST["cpfPaciente"], $_POST["sexoPaciente"], $_POST["datanascPaciente"], $_POST["idadePaciente"], $_POST["causaPaciente"])) {
    die("Erro: Dados incompletos.");
}

$idPaciente = mysqli_real_escape_string($conexao, $_POST["idPaciente"]);
$nomePaciente = mysqli_real_escape_string($conexao, $_POST["nomePaciente"]);
$telefonePaciente = mysqli_real_escape_string($conexao, $_POST["telefonePaciente"]);
$cpfPaciente = mysqli_real_escape_string($conexao, $_POST["cpfPaciente"]);
$sexoPaciente = mysqli_real_escape_string($conexao, $_POST["sexoPaciente"]);
$datanascPaciente = mysqli_real_escape_string($conexao, $_POST["datanascPaciente"]);
$idadePaciente = mysqli_real_escape_string($conexao, $_POST["idadePaciente"]);
$causaPaciente = mysqli_real_escape_string($conexao, $_POST["causaPaciente"]);


$sql = "SELECT idPaciente FROM dbagendador.paciente WHERE idPaciente = '{$idPaciente}'";
$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) > 0) {

    $sql = "UPDATE dbagendador.paciente SET
        nomePaciente = '{$nomePaciente}',
        telefonePaciente = '{$telefonePaciente}',
        cpfPaciente = '{$cpfPaciente}',
        sexoPaciente = '{$sexoPaciente}',
        datanascPaciente = '{$datanascPaciente}',
        idadePaciente = '{$idadePaciente}',
        causaPaciente = '{$causaPaciente}'
    WHERE idPaciente = '{$idPaciente}'";

    if (mysqli_query($conexao, $sql)) {
        echo "O cadastro foi atualizado com sucesso!";
    } else {
        echo "Erro ao executar a consulta: " . mysqli_error($conexao);
    }
} else {
    echo "Paciente com ID {$idPaciente} não encontrado.";
}

mysqli_close($conexao);
?>
