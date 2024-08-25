<?php
include 'db/conexao.php';

$dados = [];

if (isset($_GET['idPaciente'])) {
    $idPaciente = mysqli_real_escape_string($conexao, $_GET['idPaciente']);
    
   
    $sql = "SELECT * FROM dbagendador.paciente WHERE idPaciente = '{$idPaciente}'";
    $result = mysqli_query($conexao, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        
        $dados = mysqli_fetch_assoc($result);
    }
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
</head>
<body>
<header>
    <h3>Editar Paciente</h3>
</header>

<div>
    <form action="index.php?menuop=atualizacadastro" method="post">
        <div>
            <label for="idPaciente">ID</label>
            <input type="text" name="idPaciente" value="<?= htmlspecialchars($dados["idPaciente"] ?? '') ?>" readonly>
        </div>
        <div>
            <label for="nomePaciente">Nome</label>
            <input type="text" name="nomePaciente" value="<?= htmlspecialchars($dados["nomePaciente"] ?? '') ?>">
        </div>
        <div>
            <label for="telefonePaciente">Telefone</label>
            <input type="text" name="telefonePaciente" value="<?= htmlspecialchars($dados["telefonePaciente"] ?? '') ?>">
        </div>
        <div>
            <label for="cpfPaciente">CPF</label>
            <input type="text" name="cpfPaciente" value="<?= htmlspecialchars($dados["cpfPaciente"] ?? '') ?>">
        </div>
        <div>
            <label for="sexoPaciente">Sexo</label>
            <input type="text" name="sexoPaciente" value="<?= htmlspecialchars($dados["sexoPaciente"] ?? '') ?>">
        </div>
        <div>
            <label for="datanascPaciente">Data de Nascimento</label>
            <input type="date" name="datanascPaciente" value="<?= htmlspecialchars($dados["datanascPaciente"] ?? '') ?>">
        </div>
        <div>
            <label for="idadePaciente">Idade</label>
            <input type="text" name="idadePaciente" value="<?= htmlspecialchars($dados["idadePaciente"] ?? '') ?>">
        </div>
        <div>
            <label for="causaPaciente">Prontuário</label>
            <input type="text" name="causaPaciente" value="<?= htmlspecialchars($dados["causaPaciente"] ?? '') ?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>
</body>
</html>
