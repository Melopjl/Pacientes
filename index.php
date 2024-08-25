<?php
include("db/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
</head>
<body>
    <header>
        <h1>Pacientes</h1>
        <nav>
            <a href="index.php?menuop=home">Home<a> |
            <a href="index.php?menuop=pacientes">Pacientes<a> |
            <a href="index.php?menuop=consultas">Consultas<a>  
        </nav>
    </header>
    <main>
    <hr>
    <?php
        $menuop = (isset ($_GET["menuop"]))?$_GET["menuop"]:"home";
        switch ($menuop) {
            case 'home':
                include("pags/home/home.php");
            break;
            case 'pacientes':
                include("pags/addpacientes/pacientes.php");
            break;
            case 'cadpacientes':
                include("pags/addpacientes/cadpacientes.php");
            break;
            case 'inserircadastro':
                include("pags/addpacientes/inserircadastro.php");
            break;
            case 'editarpaciente':
                include("pags/addpacientes/editarpaciente.php");
            break;
            case 'excluir-paciente':
                include("pags/addpacientes/excluir-paciente.php");
            break;
            case 'atualizacadastro':
                include("pags/addpacientes/atualizacadastro.php");
            break;
            case 'consultas':
                include("pags/consultas/consultas.php");
            break;
            default:
                include("pags/home/home.php");
            break;
        }
    ?>

    </main>
    
</body>
</html>