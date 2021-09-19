<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Clínica XYZ</title>
</head>
<body>
   
    <nav>
        <div class="nav-wrapper deep-orange accent-1">
            <a href="#" class="brand-logo">Clínica XYZ</a>
            <a href="#" data-activates="menu-mobile" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li class="navbar-item active">
                        <a class="navbar-link" href="index.php">Home</a>
                </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Paciente/paciente.php"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Medico/medico.php"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Convenio/Convenio.php"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Especialidade/especialidade.php"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Padroes/padroes.php"> Padrões</a>
                    </li>
            </ul>
            <ul class="side-nav" id="menu-mobile">
                    <li class="navbar-item active">
                        <a class="navbar-link" href="index.php">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Paciente/paciente.php"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Medico/medico.php"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Convenio/Convenio.php"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Especialidade/especialidade.php"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="Padroes/padroes.php"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>
        
 <fieldset>
 <h4 class="title">Crud: Convênio,Especialidade e Padrões</h4>
 <img  src="trabalho.jpg" alt="trabalho">

 </fieldset>
    
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $(function(){
        $(".button-collapse").sideNav();
        });
    </script>
</body>
</html>