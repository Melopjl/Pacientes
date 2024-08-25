<header>
    <h3>Registro Pacientes</h3>
</header>
<div>
    <a href="index.php?menuop=cadpacientes">Cadastrar Paciente</a>
</div>
<div>
    <form action="index.php?menuop=pacientes" method="post">
        <input type="text" name="txt_pesquisa">
       <input type="submit" value="Pesquisar">
    </form>
</div>
<table border="1">
    <thead>
        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Sexo</th>
            <th>Data de Nasc.</th>
            <th>Idade</th>
            <th>Prontuário</th>
            <th>Editar</th>
            <th>Excluir</th>

        </tr>
    </thead>
    <tbody>
    <?php
    $quantidade = 15;

    $pagina =  (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

    $inicio =  ($quantidade * $pagina) - $quantidade;





    include 'db/conexao.php';
    $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";
    

    $sql = "SELECT 
idPaciente,
upper(nomePaciente) AS nomePaciente,
idadePaciente,
lower(causaPaciente) AS causaPaciente,
telefonePaciente, cpfPaciente,
CASE
   WHEN sexoPaciente = 'F' THEN 'FEMININO'
   WHEN sexoPaciente = 'M' THEN 'MASCULINO'
ELSE
   'NÃO ESPECIFICADA'

END AS sexoPaciente,
DATE_FORMAT(datanascPaciente,'%d/%m/%Y') AS datanascPaciente
FROM dbagendador.paciente WHERE idPaciente ='{$txt_pesquisa}' or nomePaciente LIKE '%{$txt_pesquisa}%'
ORDER BY idPaciente ASC
LIMIT  $inicio, $quantidade
";
        $rs = mysqli_query($conexao,$sql) or die ("Erro ao se conectar a consulta" . mysqli_error($conexao));
        while($dados = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?=$dados["idPaciente"]?></td>
            <td><?=$dados["nomePaciente"]?></td>
            <td><?=$dados["telefonePaciente"]?></td>
            <td><?=$dados["cpfPaciente"]?></td>
            <td><?=$dados["sexoPaciente"]?></td>
            <td><?=$dados["datanascPaciente"]?></td>
            <td><?=$dados["idadePaciente"]?></td>
            <td><?=$dados["causaPaciente"]?></td>
            <td><a href="index.php?menuop=editarpaciente&idPaciente=<?=$dados["idPaciente"]?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-paciente&idPaciente=<?=$dados["idPaciente"]?>">Excluir</a></td>
            </tr>
<?php
    }
?>
    </tbody>

</table>
<br>
<?php
$sqlTotal =  "SELECT idPaciente FROM dbagendador.paciente";

$qrTotal = mysqli_query($conexao,$sqlTotal)  or die (mysqli_error($conexao));

$numTotal =  mysqli_num_rows($qrTotal);

$Totalpags =  ceil($numTotal/$quantidade);

echo  "Total de Pacientes: $numTotal <br>";
echo '<a href="?menuop=pacientes&pagina=1">Primeira Página</a>';

if($pagina>6){
    ?>
    <a href="?menuop=pacientes&pagina=<?php echo $pagina-1?>"> << </a>

    <?php
}

for($i=1;$i <= $Totalpags; $i++){

    if($i >= ($pagina-5) && $i <= ($pagina+5)){
        if($i==$pagina){
            echo $i;
        }else{
            echo "<a href=\"index.php?menuop=pacientes&pagina=$i\">$i</a> ";
        }
    }
}

if($pagina< ($Totalpags-5)){
    ?>
    <a href="?menuop=pacientes&pagina=<?php echo $pagina+1?>"> >> </a>

    <?php
}

echo "<a href=\"?menuop=pacientes&pagina=$Totalpags\"> Última Página</a>"

?>

