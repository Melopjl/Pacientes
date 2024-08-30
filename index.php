<?php
include("db/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link  rel="stylesheet" href="css/style_padrao.css">

    <title>Pacientes</title>
</head>
<body>
    <header class="bg-dark">
    <div class="container">
        <h1>Pacientes</h1>
        <nav class ="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="#" class="navbar-brand">
             
            </a>

        <div class="collapse navbar-collapse" id="conteudosuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class ="nav-link" href="index.php?menuop=home">Home<a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?menuop=pacientes">Pacientes<a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?menuop=consultas">Consultas<a></li>
            </ul>





        </div>
        </nav>
    </div>
    </header>
    <main>
    <div class="container">
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
    </div>
    </main>
    <footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center">MyndSync Pacientes</div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>
</html>