
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
                    <li class="navbar-item active">
                        <a href="medico.php"> Médico</a>
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
            <ul class="side-nav" id="menu-mobile">
                    <li class="navbar-item active">
                        <a href="../index.php">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Paciente/paciente.php"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a href="medico.php"> Médico</a>
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
        
    <form action="cadastro.php" method="post">
        <fieldset class="margin-border">
           
            <h4 class="title">Cadastro de Médicos</h4>
            <hr>
            
        <table class="flex">  
            <tr >
                <td>       
                    <label for="ativo">Ativo: </label>
                    <input type="checkbox" style="position:relative; left:1px; opacity:1;"class="filled-in"  name="ativo" id="ativo"> 
                 </td>   
                
                <td>
                    <label  for="dataCadastroMedico">Data: </label>
                    
                    <input type="text"  name="dataCadastroMedico" id="dataCadastroMedico" placeholder="dd/mm/aaaa">
                </td>  
                  
            </tr>
        </table>  
        <table>  
            <tr>
                <td>    
                    <label for="nomeMedico">Nome: </label>
                    <input type="text" name="nomeMedico" id="nomeMedico">
                </td>
                <td>  
                    <label for="crmMedico">CRM: </label>
                    <input type="text" name="crmMedico" id="crmMedico">

                </td>
                    
            </tr>   
        </table> 
              
              
            <table> 
                
                    
                    <tr>
                        <td>
                            <label for="ruaMedico">Rua:</label>
                                <input type="text" name="ruaMedico" id="ruaMedico">
                        </td>
                        <td>
                            <label for="lograduroMedico">Lograduro:</label>
                            <input type="text" name="lograduroMedico" id="lograduroMedico">
                        </td>
                    </tr>
                       
                       
                        
                    <tr>  
                        <td> 
                            <label for="email">N° rua:</label>
                            <input type="text" name="numeroRuaMedico" id="numeroRuaMedico">
                        </td>
                        <td>
                            <label for="complementoMedico">Complemento:</label>
                            <input type="text" name="complementoMedico" id="complementoMedico">
                        </td>
                    </tr>    
                        
                    <tr>    
                        <td>
                            <label for="bairroMedico">Bairro:</label>
                            <input type="text" name="bairroMedico" id="bairroMedico">
                        </td>
                        <td>
                            <label for="cepMedico">CEP:</label>
                            <input type="text" name="cepMedico" id="cepMedico">
                    
                    </tr>   
                        
                    <tr>
                        <td>
                            <label for="emailMedico">E-mail:</label>
                            <input type="email" name="emailMedico" id="emailMedico">
                        </td>

                        <td>
                            <label for="telefoneFixoMedico">Telefone FIXO:</label>
                            <input type="tel" name="telefoneFixoMedico" id="telefoneFixoMedico">
                        </td>
                    </tr>   
                    <tr>   
                        <td>
                        <label for="celularMedico">Celular:</label>
                        <input type="tel" name="celularMedico" id="celularMedico">
                        </td>
                        <td>
                        <label for="telefoneMedico">Telefone Secundário:</label>
                        <input type="tel" name="telefoneMedico" id="telefoneMedico">
                        </td>
                    </tr>
                    
                </table>
              
               
            
                    
            <div class="row">
                <div class="col s4"> 
                    <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
                        <i class="material-icons right">save</i>
                    </button>
                </div>
                <div class="col s4">
                    <button class="btn waves-effect grey darken-3" type="reset" name="action">limpar
                        <i class="material-icons right">delete_sweep</i>
                    </button>

                </div>
                <div class="col s4">
                    <a href="../index.php" class="btn waves-effect green accent-4">
                        Editar
                        <i class="material-icons right">edit</i>
                     </button>   
                    </a>
                </div>

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