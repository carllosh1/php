<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        *{
           
            text-decoration: none;
           
            
        }
        .dadosAcima{
            display:flex;
            justify-content:end;
            padding: 5px 10px;
            margin:5px;
        }
        label{
            
            padding-right: 20px;
            padding-left: 10px;
        }
       
      
        .but{
            display:flex;
            justify-content:space-between;
        }
        #btnE{
            background:red;
        }
        #btnS{
            background:green;
        }
        #btnR{
            background:yellow;
        }
        #convenioPaciente{
            background:gray;
        }
        button{
           
            color: black;
            font-weight:bold;
            padding: 10px 25px;
            margin-top: 15px;
        }
        legend{
            background: gray;
           
        }
        a{
            color:black;
        }
        input{
            width:35vw;
        }
        #dataCadastroPaciente,#convenioPaciente{
            width:auto;
        }
        #nomePaciente{
            width:90%;
        }
    </style>
    
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="aula009-pdo.php" method="post">
        <fieldset>
           
            <h3>Cadastro de Pacientes</h3>
            
            
            <div class="dadosAcima">
                <label for="nome">Ativo: </label>
                <input type="checkbox" name="convenioPaciente" id="convenioPaciente">

                <label for="nome">Tipo de cadastro: </label>
                <select name="convenioPaciente" id="convenioPaciente">
                    <option value="conveniado">Conveniado</option>
                    <option value="Não conveniado">Não conveniado</option>
                <select>

                <label for="nome">Data: </label>
                <input type="text" name="dataCadastroPaciente" id="dataCadastroPaciente" placeholder="dd/mm/aaaa">
            </div class="dadosAbaixo">
                <label for="nome">Nome: </label>
                <input type="text" name="nomePaciente" id="nomePaciente">
                <hr>
                
                <fieldset>
                    <legend><a href="index.php">Endereços e contatos</a></legend>
                    
                    <div>
                        <label for="ruaPaciente">Rua:</label>
                        <input type="text" name="ruaPaciente" id="ruaPaciente">

                        <label for="lograduroPaciente">Lograduro:</label>
                        <input type="text" name="lograduroPaciente" id="lograduroPaciente">
                        <br><br>
                        <label for="email">N° rua:</label>
                        <input type="text" name="numeroRuaPaciente" id="numeroRuaPaciente">

                        <label for="complementoPaciente">Complemento:</label>
                        <input type="text" name="complementoPaciente" id="complementoPaciente">
                        <br><br>
                        <label for="bairroPaciente">Bairro:</label>
                        <input type="text" name="bairroPaciente" id="bairroPaciente">
                    
                        <label for="cepPaciente">CEP:</label>
                        <input type="text" name="cepPaciente" id="cepPaciente">
                        <br><br>
                        <label for="emailPaciente">E-mail:</label>
                        <input type="email" name="emailPaciente" id="emailPaciente">

                        <label for="telefoneFixoPaciente">Telefone FIXO:</label>
                        <input type="tel" name="telefoneFixoPaciente" id="telefoneFixoPaciente">
                        <br><br>
                        <label for="celularPaciente">Celular:</label>
                        <input type="tel" name="celularPaciente" id="celularPaciente">

                        <label for="telefonePaciente">Telefone Secundário:</label>
                        <input type="tel" name="telefonePaciente" id="telefonePaciente">
                    </div>   
                </fieldset>
               
            <div class="but">
                    
                <button id="btnR" type="reset">Limpar</button>
                <button id="btnS"type="submit">Salvar</button>
                <button id="btnE" type="exit">Excluir</button>    

            </div>
      
           
        </fieldset>
        

    </form>
  
</body>
</html>