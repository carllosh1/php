<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade14</title>
    <style>
        .container{
            height: 480px;
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
            flex-wrap:wrap;
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
        h2,h4,p,a{
            
            text-align:center; 
        }
    </style>
</head>
<body>
    <h2>Lista de exercícios</h2>
    <div class="flex">
         
        <div class="container ">
            <h4>Função 1: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#1" id="1" method="POST">
            <p>Digite dois números e descubra a soma entre eles:</p>
            <input type="float" name="nmb1" id="nmb1Id">
            <input type="float" name="nmb2" id="nmb2Id">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['nmb1'],$_POST['nmb2'])){
                $nmb1 = $_POST['nmb1'];
                $nmb2 = $_POST['nmb2'];

                printf("<p>A soma entre eles é %.2f</p>", $nmb1+$nmb2);
            }
        ?>  
        </div>

        <div class="container ">
            <h4>Função 2: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#2" id="2" method="POST">
            <p>Digite o raio do círculo e descubra sua área:</p>
            <input type="float" name="raio" id="raioId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['raio'])){
                $raio = $_POST['raio'];
                $area = $raio*$raio * 3.14159;
                printf("<p>A área da circunferência é %.2f</p>", $area);
                
            }
        ?>  
         
        </div>

         <div class="container ">
            <h4>Função 3: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#3" id="3" method="POST">
            <p>Digite quatro valores A,B,C e D e calcule essa expressão: (A * B - C * D)</p>
            <input type="number" name="nmbA" id="nmbAId" placeholder="A">
            <input type="number" name="nmbB" id="nmbBId" placeholder="B">
            <input type="number" name="nmbC" id="nmbCId" placeholder="C">
            <input type="number" name="nmbD" id="nmbDId" placeholder="D">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['nmbA'],$_POST['nmbB'],$_POST['nmbC'],$_POST['nmbD'])){
                $nmbA = $_POST['nmbA'];
                $nmbB = $_POST['nmbB'];
                $nmbC = $_POST['nmbC'];
                $nmbD = $_POST['nmbD'];

                $DIFERENCA = ($nmbA *  $nmbB) - ($nmbC * $nmbD);
                printf("<p>O resultado da expressão é: %.2f</p>", $DIFERENCA);
            }
        ?>  
        </div>

        <div class="container ">
            <h4>Função 4: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#4" id="4" method="POST">
            <p>Digite seu ID, horas trablhadas e o quanto recebe por hora</p>
            <input type="number" name="ID" id="IDId" placeholder="id">
            <input type="number" name="horasT" id="horasTId" placeholder="horas trabalhadas">
            <input type="float" name="recebe" id="recebeId" placeholder="recebe por hora">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['ID'],$_POST['horasT'],$_POST['recebe'])){
                $ID = $_POST['ID'];
                $horasT = $_POST['horasT'];
                $recebe = $_POST['recebe'];
                printf("<p>O funcionário de ID:%d <br> recebe de salário R$%.2f</p>", $ID,$horasT*$recebe);
            }
           
        ?>  
        </div>
        
        <div class="container ">
            <h4>Função 5: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#5" id="5" method="POST">
            <p>Digite os valores e a quantidade das 2 peças:</p>
            <input type="number" name="peca1" id="peca1Id" placeholder="Valor peça 1">
            <input type="number" name="qtdPeca1" id="qtdPeca1Id" placeholder="Quantidade peça 1">
            <input type="number" name="peca2" id="peca2Id" placeholder="Valor peça 2">
            <input type="number" name="qtdPeca2" id="qtdPeca2Id" placeholder="Quantidade peça 2">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['peca1'],$_POST['qtdPeca1'],$_POST['peca2'],$_POST['qtdPeca2'])){
                $peca1 = $_POST['peca1'];
                $qtdPeca1 = $_POST['qtdPeca1'];
                $peca2 = $_POST['peca2'];
                $qtdPeca2 = $_POST['qtdPeca2'];

                $total = ($peca1*$qtdPeca1)+($peca2*$qtdPeca2);
                printf("<p>O valor total a pagar é: %.2f</p>", $total);
            }
        ?>  
         </div>
         <div class="container ">
            <h4>Função 6: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#6" id="6" method="POST">
            <p>Digite três valores A,B,C as áreas<br>(triângulo,quadrado,círculo,retângulo,trapézio)</p>
            <input type="number" name="ladoA" id="ladoAId" placeholder="A">
            <input type="number" name="ladoB" id="ladoBId" placeholder="B">
            <input type="number" name="ladoC" id="ladoCId" placeholder="C">
            
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['ladoA'],$_POST['ladoB'],$_POST['ladoC'])){
                $ladoA = $_POST['ladoA'];
                $ladoB = $_POST['ladoB'];
                $ladoC = $_POST['ladoC'];
                

                $areaTri =  $ladoA*$ladoC/2;
                $areaQ = $ladoB*$ladoB; 
                $areaC = $ladoC*$ladoC * 3.14159;
                $areaR = $ladoA*$ladoC;
                $areaTra = ($ladoA+$ladoB)*$ladoC/2;
                printf("<p>Área Triângulo (A*C/2) = %.2f <br>   
                            Área Quadrado (B²) = %.2f <br>   
                            Área Retângulo(A*) = %.2f <br>   
                            Área Círculo (C²*pi) = %.2f <br>   
                            Área Trapézio ((A+B*C/2) = %.2f   
                </p>",  $areaTri,$areaQ, $areaR,$areaC,$areaTra);
            }
        ?>  
        </div>
         <div class="container ">
            <h4>Função 7: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#7" id="7" method="POST">
            <p>Fazer um programa para ler um número inteiro, e depois dizer se este número é negativo ou não:</p>
            <input type="number" name="negativo" id="negativoId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['negativo'])){
                $negativo = $_POST['negativo'];
                if($negativo>-1){
                    printf("<p>NÃO NEGATIVO</p>");
                }else{
                    printf("<p>NEGATIVO</p>");
                }

            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 8: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#8" id="8" method="POST">
            <p>Fazer um programa para ler um número inteiro e dizer se este
número é par ou ímpar:</p>
            <input type="number" name="PAR" id="PARId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['PAR'])){
                $PAR = $_POST['PAR'];
                if($PAR%2==0){
                    printf("<p>NÚMERO PAR</p>");
                }else{
                    printf("<p>NÚMERO ÍMPAR</p>");
                }

            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 9: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
            <p>Digite dois números e descubra se são múltiplos:</p>
            <input type="number" name="multiplo1" id="multiplo1Id">
            <input type="number" name="multiplo2" id="multiplo2Id">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['multiplo1'],$_POST['multiplo2'])){
                $multiplo1 = $_POST['multiplo1'];
                $multiplo2 = $_POST['multiplo2'];

                if($multiplo1%$multiplo2==0 or $multiplo2%$multiplo1==0){
                    printf("<p>MÚLTIPLOS</p>");
                }else{
                    printf("<p>NÃO MÚLTIPLOS</p>");
                }

            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 10: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#10" id="10" method="POST">
            <p>Digite a hora inicial e a hora final do jogo:</p>
            <input type="number" name="inicial" id="inicialId" placeholder="hora inicial">
            <input type="number" name="final" id="finalId" placeholder="hora final">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['inicial'],$_POST['final'])){
                $inicial = $_POST['inicial'];
                $final = $_POST['final'];
                if($inicial>$final){
                    $duracao = (24-$inicial) + $final;
                    printf("<p>O jogo durou %d horas</p>", $duracao);
                }else{
                    $duracao = $final - $inicial;
                    printf("<p>O jogo durou %d horas</p>", $duracao);
                }
               
            }
        ?>  
         
        </div>
         <div class="container ">
            <h4>Função 11: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#11" id="11" method="POST">
            <p>Digite o id do produto e a quantidade: <br>
            1- Cachorro quente - R$4,00 <br>
            2- X-SALADA - R$4,50    <br>
            3- X - Bacon - R$5,00   <br>
            4- Torrada Simples - R$2,00 <br>
            5- Refrigerante - R$1,50
            </p>
            <input type="number" name="produto" id="produtoId">
            <input type="number" name="qtdProduto" id="qtdProdutoId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['produto'],$_POST['qtdProduto'])){
                $produto = $_POST['produto'];
                $qtdProduto = $_POST['qtdProduto'];
                if($produto ==1){
                    printf("<p>O total a se pagar é: R$%.2f</p>", 4*$qtdProduto);
                }else if($produto ==2){
                    printf("<p>O total a se pagar é: R$%.2f</p>", 4.5*$qtdProduto);
                }else if($produto == 3){
                    printf("<p>O total a se pagar é: R$%.2f</p>", 5*$qtdProduto);
                }else if($produto == 4){
                    printf("<p>O total a se pagar é: R$%.2f</p>", 2*$qtdProduto);
                }else if($produto == 5){
                    printf("<p>O total a se pagar é: R$%.2f</p>", 1.5*$qtdProduto);
                }
                
            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 12: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#12" id="12" method="POST">
            <p>Digite um número e descubra em qual intervalo ele está:</p>
            <input type="number" name="intervalo" id="intervaloId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['intervalo'])){
                $intervalo = $_POST['intervalo'];

                if($intervalo<=25 and $intervalo>0){
                    printf("<p>O número está no intervalo[0,25]</p>");
                }else if($intervalo>25 and $intervalo<=50){
                    printf("<p>O número está no intervalo[25,50]</p>");
                }else if($intervalo>50 and $intervalo<=75){
                    printf("<p>O número está no intervalo[50,75]</p>");
                }else if($intervalo>75 and $intervalo<=100){
                    printf("<p>O número está no intervalo[75,100]</p>");                        
                }else{
                    printf("<p>O número está fora do intervalo</p>");
                }

            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 13: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#13" id="13" method="POST">
            <p>Digite X e Y e descubra em qual quadrante o ponto está:</p>
            <input type="number" name="x" id="xId">
            <input type="number" name="y" id="yId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['x'],$_POST['y'])){
                $x = $_POST['x'];
                $y = $_POST['y'];
                if($x>0 and $y>0){
                    printf("<p>Primeiro quadrante Q1</p>");
                }else if($x<0 and $y>0){
                    printf("<p>Segundo quadrante Q2</p>");
                }else if($x<0 and $y<0){
                    printf("<p>Terceiro quadrante Q3</p>");
                }else if( $x>0 and $y<0){
                    printf("<p>Quarto quadrante Q4</p>");
                }else{
                    printf("<p>Origem</p>");
                }
            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 14: </h4> 
            <a href="aula006-salarioJS.html" target="_blank">link</a>
            <form action="<?=$_SERVER['PHP_SELF'];?>#14" id="14" method="POST">
            <p>Digite seu salário para calcular o IR:</p>
            <input type="number" name="salario" id="salarioId">
            <button type="submit">Resultado</button>
            
        </form>
        <?php
            if(isset($_POST['salario'])){
                $salario = $_POST['salario'];
                if($salario>0 and $salario<=2000){
                    printf("<p>insento de IR</p>");
                }else if($salario>2000 and $salario<=3000){
                    printf("<p>Valor do IR: %.2f</p>", $salario-200*0.08);
                }else if($salario>3000 and $salario<=4500){
                    printf("<p>Valor do IR: %.2f</p>", $salario*0.18);
                }else if($salario>4500){
                    printf("<p>Valor do IR: %.2f</p>", $salario*0.28);
                }

            }
        ?>  
         
        </div>
         <div class="container ">
            <h4>Função 15: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#15" id="15" method="POST">
            <p>Descubra a senha do programa (4 dígitos):</p>
            <input type="number" name="senha" id="senhaId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['senha'])){
                $senha = $_POST['senha'];
                if($senha != 2002){
                    printf("<p>Senha inválida<p/>");
                }else{
                    printf("<p>Senha Válida<br> Acesso permitido!<p/>");
                }

            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 16: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#16" id="16" method="POST">
            <p>Digite X e Y e descubra em qual quadrante o ponto está:</p>
            <input type="number" name="x1" id="x1Id">
            <input type="number" name="y1" id="y1Id">
            <button t1pe="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['x1'],$_POST['y1'])){
                $x1 = $_POST['x1'];
                $y1 = $_POST['y1'];
                if($x1>0 and $y1>0){
                    printf("<p>Primeiro </p>");
                }else if($xy<0 and $y1>0){
                    printf("<p>Segundo </p>");
                }else if($x1<0 and $y1<0){
                    printf("<p>Terceiro </p>");
                }else if( $x1>0 and $y1<0){
                    printf("<p>Quarto </p>");
                }else{}
            }
        ?>  
        </div>
        <div class="container ">
            <h4>Função 17: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#17" id="17" method="POST">
            <p>Digite qual combustível você quer abastecer:<br>
                1- Álcool   <br>
                2-Gasolina <br>
                3-Diesel <br>
                4-Sair
            </p>
            <input type="number" name="combustivel" id="combustivelId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['combustivel'])){
                    $combustivel = $_POST['combustivel'];
                        
                    if($combustivel==1){
                    
                        printf("<p>Álcool</p>");
                               
                    }else if($combustivel==2){
                        printf("<p>Gasolina</p>");

                    }else if($combustivel==3){
                        printf("<p>Diesel</p>");

                    }else if($combustivel==4){
                        printf("<p>Muito Obrigado!</p>");
                    }else{
                        printf("<p>Tente novamente com um valor válido</p>!");
                    }
            }
            
        ?>  
        </div>
        <div class="container ">
            <h4>Função 18: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#18" id="18" method="POST">
            <p>Digite um número X e descubra quantos números impares tem 1 a X:
            </p>
            <input type="number" name="numImpar" id="numImparId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['numImpar'])){
                    $numImpar = $_POST['numImpar'];
                    $contadorImpar = 0;
                    for($i=1;$i<=$numImpar;$i++){
                        if($i%2!=0){
                            $contadorImpar++;
                        }
                    }
                printf("<p>A quantidade de números impares entre 1 e %d é: %d</p>",$numImpar,$contadorImpar);
            }
            
        ?>  
        </div>
       
        <div class="container ">
            <h4>Função 19: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#19" id="19" method="POST">
            <p>Digite um número X e descubra quantos números estão dentro e fora do intervalo de 1 a 20:
            </p>
            <input type="number" name="valoresInteiros" id="valoresInteirosId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['valoresInteiros'])){
                    $valoresInteiros = $_POST['valoresInteiros'];
                    $in = 0;
                    $on = 0;
                   for($i=1;$i<=$valoresInteiros;$i++){
                       if($i>=1 or $i<=20){
                           $in++;
                       }else{
                           $on++;
                       }
                       
                        
                   }
                printf("<p>O existem %d números no intervalo de 1 a 20 e $ números fora</p>", $in, $on);
            }
            
        ?>  
        
        </div>
        <div class="container ">
            <h4>Função 20: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#20" id="20" method="POST">
            <p>Digite três valores e descubra a média ponderada (1 valor = peso 2) (2 valor = peso 3) (3 valor = peso 5)</p>
            <input type="number" name="valor1" id="valor1Id" placeholder="valor 1">
            <input type="number" name="valor2" id="valor2Id" placeholder="valor 2">
            <input type="number" name="valor3" id="valor3Id" placeholder="valor 3">
            
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['valor1'],$_POST['valor2'],$_POST['valor3'])){
                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];
                $valor3 = $_POST['valor3'];
                
                $mediaPonderada = (($valor1*2) + ($valor2*3) + ($valor3*5))/2;

                printf("<p>A média ponderada é: %.2f</p>", $mediaPonderada);
            }
        ?>  
        </div>
       
        <div class="container ">
            <h4>Função 21: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#21" id="21" method="POST">
            <p>Digite dois números para serem divididos:
            </p>
            <input type="number" name="divisao1" id="divisao1Id">
            <input type="number" name="divisao2" id="divisao2">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['divisao1'],$_POST['divisao2'])){
                    $divisao1 = $_POST['divisao1'];
                    $divisao2 = $_POST['divisao2'];
                    
                    if($divisao1==0){
                        printf("<p>Divisão impossível</p>");
                    }else{
                        printf("<p>A divisão é: %.2f</p>",$divisao1/$divisao2);
                    }
                
            }
            
        ?>  
        </div>
        <div class="container ">
            <h4>Função 22: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#22" id="22" method="POST">
            <p>Escreva um número e descubra seu fatorial:
            </p>
            <input type="number" name="fatorial" id="fatorialId">
            <button type="submit">Resultado</button>
        </form>
        <?php
             if(isset($_POST['fatorial'])){
                $fatorial = $_POST['fatorial'];

                $fatorial1=$fatorial;
                
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
        ?>  
        </div>
        <div class="container ">
            <h4>Função 23: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#23" id="23" method="POST">
            <p>Digite um número e descubra seus divisores
            </p>
            <input type="number" name="divisores" id="divisoresId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['divisores'])){
                    $divisores = $_POST['divisores'];
                    echo "<p> ";
                    for($i=1;$i<=$divisores;$i++){
                        if($divisores%$i==0){
                            printf("$i  ");
                        }
                    }
                    echo "</p>";  
                
            }
            
        ?>  
        </div>
        <div class="container ">
            <h4>Função 24: </h4> 
            <form action="<?=$_SERVER['PHP_SELF'];?>#24" id="24" method="POST">
            <p>Digite um número e descubra o quadrado e o cubo dos números no intervalo de 1 a N
            </p>
            <input type="number" name="numeroUltima" id="numeroUltimaId">
            <button type="submit">Resultado</button>
        </form>
        <?php
            if(isset($_POST['numeroUltima'])){
                    $numeroUltima = $_POST['numeroUltima'];
                        
                    for($i = 1; $i <=$numeroUltima;$i++){
                        printf("<p>N - %d | N² - %d | N³ - %d <br></p>",$i,$i*$i,$i*$i*$i);
                    }
            }
            
        ?>  
        </div>
    
      
    </div>
    
</body>
</html>