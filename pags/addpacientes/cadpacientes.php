<header>
    <h3>Cadastro de Pacientes</h3>
</header>

<div>
    <form action="index.php?menuop=inserircadastro" method="post">
        <div>
            <label for="nomePaciente">Nome</label>
            <input type="text" name="nomePaciente">
        </div>
        <div>
            <label for="telefonePaciente">Telefone</label>
            <input type="text" name="telefonePaciente">
        </div>
        <div>
            <label for="cpfPaciente">CPF</label>
            <input type="text" name="cpfPaciente">
        </div>
        <div>
            <label for="sexoPaciente">Sexo</label>
            <input type="text" name="sexoPaciente">
        </div>
        <div>
            <label for="datanascPaciente">Data de Nascimento</label>
            <input type="date" name="datanascPaciente">
        </div>
        <div>
            <label for="idadePaciente">Idade</label>
            <input type="text" name="idadePaciente">
        </div>
        <div>
            <label for="causaPaciente">Prontuário</label>
            <input type="text" name="causaPaciente">
        </div>
        <div>
        <input type="submit" value="Cadastrar" name="btnAdicionar">
        </div>
    </form>
</div>