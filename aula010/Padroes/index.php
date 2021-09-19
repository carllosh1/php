<!DOCTYPE html>
<html lang="pt-br">
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
                        <a href="padroes.php"> Padrões</a>
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
                        <a href=".padroes.php"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>
        
 <fieldset>
 <?php
            require_once '../conexao.php';
            $cmd = $con->query("SELECT * FROM tbl_padroes ORDER BY id_padroes");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($res as $valor) {
                echo "<table>";
                echo "<tr>";
                echo "  <th>Id</th>";
                echo "  <th>Data Cadastro</th>";
                echo "  <th>Tempo médio de consulta</th>";
                echo "  <th>Início do funcionamento</th>";
                echo "  <th>Fim do funcionamento</th>";
                echo "  <th>Horários de Funcionamento</th>";
                echo "</tr>";
                echo "<tr>";
                
                echo "<td>".$valor['id_padroes']."</td>";
                echo "<td>".$valor['dataCadastro_padrao']."</td>";
                echo "<td>".$valor['tempo_padrao']."</td>";
                echo "<td>".$valor['inicio_padroes']."</td>";
                echo "<td>".$valor['fim_padroes']."</td>";
                echo "<td>".$valor['diasFuncionamento_padroes']."</td>";
                
               
                echo "<td><a href='deletar.php?id_padroes=".$valor['id_padroes']."' class='white-text text-darken-2 waves-effect waves-light btn-small red darken-3'>Excluir
                <i class='material-icons right'>delete_sweep</i></a> </td>";
               
                echo "<td><a href='atualizar.php?id_padroes=".$valor['id_padroes']."' class='white-text text-darken-2 waves-effect waves-light  green darken-1 btn-small'>Atualizar
                <i class='material-icons right'>edit</i> </a> </td>";
                
                echo "</tr>";
                echo "</table>";
          
                
            }
?>

     

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

