<?php
    require_once '../conexao.php';
    
    if(isset($_GET['codigo_especialidade']) && !empty($_GET['codigo_especialidade'])){
        $codigo_especialidade = addslashes($_GET['codigo_especialidade']);

        $cmd = $con->query("SELECT * FROM tbl_especialidade WHERE codigo_especialidade = '$codigo_especialidade'");
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
    }       
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <link rel="stylesheet" href="../style.css">
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
                <li class="navbar-item ">
                        <a href="../index.php">Home</a>
                </li>
                    <li class="navbar-item">
                        <a href="../Paciente/paciente.php"> Paciente</a>
                    </li>
                    <li class="navbar-item ">
                        <a href="../Medico/medico.php"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Convenio/Convenio.php"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.php"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="../Padroes/padroes.php"> Padrões</a>
                    </li>
            </ul>
            <ul class="side-nav" id="menu-mobile">
                    <li class="navbar-item active">
                        <a href="../index.php">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Paciente/paciente.php"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Medico/medico.php"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Convenio/Convenio.php"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.php"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Padroes/padroes.php"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>

    <form action="<?php echo 'update.php?codigo_especialidade='.$codigo_especialidade;?>" method="post">

            <fieldset class="margin-border">
            
            <h4 class="title">Atualizar Especialidade</h4>
            <hr>
            <table class="flex">      
            <tr >    
                <td>
                    <label  for="dataCadastroEspecialidade">Data: </label>
                    
                    <input type="text"  name="dataCadastroEspecialidade" id="dataCadastroEspecialidade" placeholder="dd/mm/aaaa" value="<?php if(isset($res)){echo $res['dataCadastro_especialidade'];} ?>">
                </td>   
            </tr>
        </table>  
        <table>  
            <tr>
                <td>    
                    <label for="nomeEspecialidade">Nome Especialidade: </label>
                    <input type="text" name="nomeEspecialidade" id="nomeEspecialidade" value="<?php if(isset($res)){echo $res['nome_especialidade'];} ?>"> 
        
                </td>
            </tr> 
        </table>


            <div class="center">
                        <button class="btn waves-effect waves-light" type="submit" name="save" value="Atualizar">Salvar
                            <i class="material-icons right">save</i>
                        </button>
            
                    </div>
        
            
        
        
            </fieldset>
        </form>
    
        
        
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $(function(){
        $(".button-collapse").sideNav();
        });
    </script>
</body>
</html>