<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 13-Funções</title>
    <style>
        .container{
            height: 440px;
            width: 300px;
            background-color: #f1f1f1;
            margin: 20px auto;
        }
        .container1{
            height: 180px;
            width: 300px;
            background-color: #f1f1f1;
            margin: 20px auto;
        }
        .flex{
            display:flex;
        }
        input{
            width: 80%;
            padding: 10px 5px;
            margin: 10px 20px;
        }
        button{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius:5px;
            width: 200px;
            margin: 10px 45px;
        }
        h2,h4,p{
            
            text-align:center; 
        }
    </style>
</head>
<body>
    <h2>1) Crie 4 funções variadas.</h2>
    <div class="flex">
         
        <div class="container ">
            <h4>Função 1: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#1" id="1" method="POST">
            <p>Digite um número para calcular o fatorial:</p>
            <input type="number" name="fatorial" id="fatorialId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['fatorial'])){
                $fatorial = $_POST['fatorial'];

                function fatorial($fatorial){
                    $fatorial1 = $fatorial;
                    if($fatorial>0){
                        for($i = 1; $fatorial > 1; $fatorial--){
                            $i = $i *$fatorial;
                    
                        }
                        printf("<p>O fatorial de %d é %d</p>", $fatorial1,$i);
                    }else if($fatorial<0){
                        printf("<p>Não existe fatorial de número negativo!</p>");
                    }else{
                        printf("<p>O fatorial de 0 é 1</p>");
                    }
                    
                }
                
                fatorial($fatorial);
            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 2: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#2" id="2" method="POST">
            <p>Digite os valores de A, B e C de uma equação do 2°grau (ax²+bx+c=0):</p>
            <input type="number" name="a" id="aId" placeholder="a">
            <input type="number" name="b" id="bId" placeholder="b">
            <input type="number" name="c" id="cId" placeholder="c">
            <button type="submit">Resultado</button>
            </form>
            <?php
                if(isset($_POST['a'],$_POST['b'],$_POST['c'])){
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['c'];
                    function raizquadrada($a,$b,$c){
                      
                        $d= (pow($b,2)) - (4*$a*$c);
                        
                        if($d < 0){
                            printf("<p>Não existe raiz real </p>");
                            
                        }else{
                            $x1 = ((-$b - sqrt($d))/(2*$a));
                            $x2 = ((-$b + sqrt($d))/(2*$a));
                            
                            printf("<p>O valor de x': %0.2f x'': %0.2f</p>", $x1, $x2);
                        }
                        
                     }
                     raizquadrada($a,$b,$c);
                 }
            ?>  
       </div>
       <div class="container ">
            <h4>Função 3: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#3" id="3" method="POST">
            <p>Digite um valor para efetuar um saque:</p>
            <input type="number" name="saque" id="saqueId">
            <button type="submit">Resultado</button>
            </form>
            <?php
            if(isset($_POST['saque'])){
                $saque = $_POST['saque'];
                function sacar($saque){
                    $cem=0; $cinquenta=0; $vinte=0; $dez=0; $cinco=0; $dois=0;
                    
                    
                    if(($saque%2!=0) && ($saque>4)){
                        $saque-=5;
                        $cinco=1;
                    }else{}
                    
                    while($saque>=100){
                        $saque-= 100;
                        $cem++;
                    }
                    while($saque>=50 ){
                        $saque-= 50;
                        $cinquenta++;
                    }
                    while($saque>=20){
                        $saque-=20;
                        $vinte++;
                    }
                    while($saque>=10){
                        $saque-=10;
                        $dez++;
                    }
            
                    while($saque>=2){
                        $saque-=2;
                        $dois++;
                    }
                    
                    if($saque!=0){
                        printf("<p>NÃO É POSSÍVEL SACAR!</p>");
                    }else{
                        printf("<p>NOTAS DE CEM: %d</p>", $cem);
                        printf("<p>NOTAS DE CINQUENTA: %d</p>", $cinquenta);
                        printf("<p>NOTAS DE VINTE: %d</p>", $vinte);
                        printf("<p>NOTAS DE DEZ: %d</p>", $dez);
                        printf("<p>NOTAS DE CINCO: %d</p>", $cinco);
                        printf("<p>NOTAS DE DOIS: %d</p> ", $dois);
                    }
                }
                sacar($saque);
            }
          ?>
       </div>
       <div class="container ">
            <h4>Função 4: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#4" id="4" method="POST">
                <p>Descubra se o número é primo:</p>
                <input type="number" name="nmb" id="nmbId">
                <button type="submit">Resultado</button>
            </form>
            <?php
                if(isset($_POST['nmb'])){
                    $nmb =$_POST['nmb'];
                    function primo($nmb ){
                        $soma = 0;
                        $x = 0;
                        if($nmb!=1){
                            for($x=1; $x<=$nmb; $x++){
                                if($nmb%$x==0){
                                    $soma++;
                                }
                            }
                        }else{
                            $soma = 3;
                        }  
                        if($soma>2){
                            printf("<p>Não primo</p>");
                        }
                        else{
                            printf("<p>Primo</p>");
                        }

                    }
                    primo($nmb);
                }
            ?>
       </div>
       

    </div>
    <h2>2) Crie um array.</h2>
    <div class="container1 ">
    <?php
    
        $nomes = Array("Nome" => "Nome","Idade"=>"Idade", "Altura" => "Altura", "Peso" => "Peso" );
        $carlos = Array("Nome" => "Carlos","Idade"=>"19 anos", "Altura" => "1.85m", "Peso" => "85kg" );
        $Kelly = Array("Nome" => "Kelly","Idade"=>"20 anos", "Altura" => "1.67m", "Peso" => "52kg" ); 
        $Rodrigo = Array("Nome" => "Rodrigo","Idade"=>"20 anos", "Altura" => "1.70m", "Peso" => "73kg" ); 
        $Juliana = Array("Nome" => "Juliana","Idade"=>"21 anos", "Altura" => "1.71m", "Peso" => "55kg" );  
        echo"<h4>";
        foreach($nomes as $atributos){
                printf("| %s |",$atributos);
        };
        echo"</h4>"; 
        echo"<p>";
        foreach($carlos as $atributos){
                printf("| %s |",$atributos);
        };
        echo"</p>";
        echo"<p>";
        foreach($Kelly as $atributos){
            printf("| %s |",$atributos);
        };
        echo"</p>";
        echo"<p>";
        foreach($Rodrigo as $atributos){
            printf("| %s |",$atributos);
            
        };
        echo"</p>";
        echo"<p>";
        foreach($Juliana as $atributos){
            printf("| %s |",$atributos);
        };
        echo"</p>";
    ?>
   </div>
</body>
</html>