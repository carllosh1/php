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
            padding:0px;
            margin:0px;
            text-decoration: none;
            font-family: Montserrat;
            
        }
       
        form{
            width: 500px;;
            margin: 70px auto;
        }
        .flex{
            display:flex;

            align-items:center;
            justify-content:center;
        }
        .login p{
        margin: 5px;
        }
        .container{
            text-align: center;
            width:400px;
            margin:0 auto;
              

        }
        .container p{
            
            text-align: start;
            margin:5px 35px;
            font-weight: bold;
        
        }
        #title{
            margin-bottom:2px;

        }

        input{
            border: none;
            background:lightgray;
        
            margin:5px;
            padding:10px;
        
            width:80%;
        

        }
        .btn-login{
            background: rgba(89, 89, 220, 0.941);
            color: white;
            width:85%;
            margin-top: 15px;

        }
        #cadastro{
            text-align:center;
            margin: 20px;
        }

    </style>
    
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="aula008-pdo.php" method="post">
        <fieldset>
            <div class="container">
                <h2 id="title">Cadastro</h2>
            <hr>
                
            <div class="input ">
                <p>Nome:</p>
                <input type="text" name="nomeAluno" id="nomeAluno">
                
            </div>
            <div class="input">
                <p>Email:</p>
                <input type="email" name="emailAluno" id="emailAluno">
                
            </div>
            <div class="input">
                <p>Telefone:</p>
                <input type="tel" name="telefoneAluno" id="telefoneAluno">
                
            </div>
            
       

           <input class="btn-login" type="submit"  value="Cadastro"> 

            <p id="cadastro"> Confira se os campos estão completos!</p>

            </div>
           
           
        </fieldset>
        

    </form>
   <script src="login.js"></script>
</body>
</html>