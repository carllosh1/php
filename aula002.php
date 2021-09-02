<?php
	ECHO "<h4>1-Faça um programa que exiba na tela “Use máscara!”.</h4>";
	ECHO "<p>Use máscara!</p>";

	ECHO "<h4>2- Faça um programa que exiba na tela “2021”</h4>";
	ECHO "<p>2021</p>";

	ECHO "<h4>3- Faça um programa que exiba na tela o seu nome, sua turma e a data</h4>";
	ECHO "<p>Carlos Henrique - TII2001M - 29/08/2021</p>";

	ECHO "<h4>4- Crie uma variável para receber seu nome e a data do seu nascimento como
	valores. Exiba uma mensagem concatenando os valores das variáveis</h4>";
	
$NOME = "Carlos Henrique";
$NASCIMENTO = "13/09/2001";

	ECHO "Meu nome é " . $NOME . " e nasci em " . $NASCIMENTO;

	ECHO "<h4>5- Faça um programa que informe o nome e idade de todos os integrantes da
	sua casa. Depois exiba a soma das idades</h4>";
	$NOMES = array("Ana", "Bruna", "Carlos","Vanivaldo");
	$IDADE = array(47,16,19,51);
	ECHO  $NOMES[0] . " - " . $IDADE[0]. " anos <br>";
	ECHO  $NOMES[1] . " - " . $IDADE[1]. " anos <br>";
	ECHO  $NOMES[2] . " - " . $IDADE[2]. " anos <br>";
	ECHO  $NOMES[3] . " - " . $IDADE[3]. " anos";
	$SOMA = 0;
	for ($i=0; $i<=3; $i++) {
		$SOMA+=$IDADE[$i];
	  }
	ECHO "<br> A soma da idade é igual " .$SOMA . " anos";
	
	ECHO "<h4>6- Procure na internet um conversor de moeda. Escreva um programa que
	converta sua mesada de reais para dólar</h4>";
	$MESADA = 15000;
	$DOLAR = 5.2;
	$MESADADOLAR = $MESADA/$DOLAR;
	PRINTF("A mesada de R$%.2f", $MESADA);
	printf( " equivale a aproximadamente $%.2f", $MESADADOLAR);

	ECHO "<h4>7- Continuando o programa anterior. Se sua mesada em dólares for maior que
	US$ 100,00 escreva “Vou comprar bitcoin”. Se for maior que US$ 200,00
	escreva “Vou investir no tesouro nacional”. Se for menor que U$100,00 escreva
	“Vou comprar bala”.</h4>";
	if($MESADADOLAR > 100 and  $MESADADOLAR < 200){
		ECHO "VOU COMPRAR BITCOIN";
	}if($MESADADOLAR > 200){
		ECHO "Vou investir no tesouro nacional";
	}if($MESADADOLAR < 100){
		ECHO "Vou comprar bala";
	}

	ECHO "<h4>8- Faça um programa que converta Fahrenheit em Celsius. Sabendo que a
	formula é C = (F – 32) / 1.8 e escreva na tela a temperatura em graus Celsius e
	em Fahrenheit</h4>";

	$Fahrenheit = 78;
	$CELSIUS = ($Fahrenheit - 32) / 1.8;

	ECHO  "A temperatura de " . $Fahrenheit. "°F equivale a aproximadamente " . round($CELSIUS)."°C";
	
	
	ECHO "<h4>9- Escreva um programa para ler o salário mensal atual de um funcionário e o
	percentual de reajuste de 6%. Calcular e escrever o valor do novo salário</h4>";
	/* Usei o que o Rafael mandou" */
?>

    <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite seu salário:</p>
        <input type="number" name="salario" id="salarioId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['salario'])){
        $salario = $_POST['salario'];
        $reajuste = $salario - $salario * 0.06;
        

        printf("Salario com reajuste = R$%.2f",$reajuste); 
    }
?>

<?php
 ECHO "<h4>10- Faça um programa que receba um valor que foi depositado e exiba o valor
 com rendimento após um mês. Considere fixo o juro da poupança em 0,049%
 a. m.</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite valor do depósito:</p>
        <input type="number" name="deposito" id="depositoId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['deposito'])){
        $deposito = $_POST['deposito'];
		$MES =1;
        $rendimento = $deposito * $MES * 0.049;
      
		printf("O depósito de = R$%.2f rendeu em um mês R$%.2f",$deposito,$rendimento); 
        
    }
?>

<?php
 ECHO "<h4>11- Escreva um programa para ler o nome e a idade de uma pessoa, e exibir
 quantos dias de vida ela possui. Considere sempre anos completos, e que um
 ano possui 365 dias. Ex: uma pessoa com 19 anos possui 6935 dias de vida;
 veja um exemplo de saída: MARIA, VOCÊ JÁ VIVEU 6935 DIAS.</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite sua idade:</p>
        <input type="number" name="idade1" id="idadeId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['idade1'])){
        $idade1 = $_POST['idade1'];
	
        $viveu= $idade1 * 365;
		
		printf("Você ja viveu %d dias",$viveu); 
		
        
    }
?>

<?php
 ECHO "<h4>12- Escreva um programa para ler o número total de eleitores de um município,
 o número de votos brancos, nulos e válidos. Calcular e escrever o percentual
 que cada um representa em relação ao total de eleitores</h4>";
?>
<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite o número total de eleitores do seu município:</p>
        <input type="number" name="eleitores" id="eleitoresId">

		<p>Digite o número total de votos válidos</p>
        <input type="number" name="validos" id="validosId">

		<p>Digite o número total de votos nulos</p>
        <input type="number" name="nulos" id="nulosId">

		<p>Digite o número total de votos brancos</p>
        <input type="number" name="brancos" id="brancosId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['eleitores'],$_POST['validos'],$_POST['nulos'],$_POST['brancos'])){
        $eleitores = $_POST['eleitores'];

		$validos = $_POST['validos'];	

		$validos = ($validos/$eleitores) *100;
		printf("Número de votos váilidos %.2f%% <br>",$validos );
		

		$nulos = $_POST['nulos'];
		$nulos = ($nulos/$eleitores) *100;
		printf("Número de votos nulos %.2f%% <br>",$nulos);
		

		$brancos = $_POST['brancos'];
		$brancos = ($brancos/$eleitores) *100;
		printf("Número de votos brancos %.2f%%", $brancos);
		
    }
?>

<?php
 ECHO "<h4>13- Escreva um programa para ler o salário mensal atual de um funcionário e
 aplicar um percentual de reajuste, calcular e escrever o valor do novo salário.</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite seu salário:</p>
        <input type="number" name="salario1" id="salario1Id">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['salario1'])){
        $salario1 = $_POST['salario1'];
        $reajuste1 = $salario1 - $salario1 * 0.26;
        

        printf("Salario com reajuste = R$%.2f",$reajuste1); 
    }
?>

<?php
 ECHO "<h4>14- O custo de um carro novo ao consumidor é a soma do custo de fábrica com
 a porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica).
 Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%,
 escrever um programa para ler o custo de fábrica de um carro, calcular e
 escrever o custo final ao consumidor.</h4>";
?>


<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite o preço do carro de fábrica:</p>
        <input type="number" name="precoCarro" id="precoCarroId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['precoCarro'])){
        $precoCarro = $_POST['precoCarro'];
        $precoDistribuidora =  $precoCarro * 0.28;
		$precoImposto =$precoCarro * 0.45;
        

        printf("Preço do carro final é = R$%.2f",$precoCarro+$precoDistribuidora+$precoImposto); 
    }
?>

<?php
 ECHO "<h4>15- Uma revendedora de carros usados paga a seus funcionários vendedores
 um salário fixo por mês, mais uma comissão também fixa para cada carro
 vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um
 programa que leia o número de carros por ele vendidos, o valor total de suas
 vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e
 escreva o salário final do vendedor.</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>O salário fixo</p>
        <input type="number" name="salarioFixo" id="salarioFixoId">
		<p>Valor total vendas mensal</p>
        <input type="number" name="vendas" id="vendasId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['salarioFixo'],$_POST['vendas'])){
        $salarioFixo = $_POST['salarioFixo'];
		$vendas= $_POST['vendas'];
        $salarioFinal =  $salarioFixo + $vendas* 0.05;
		

        printf("O salário final é = R$%.2f",$salarioFinal); 
    }
?>

<?php
 ECHO "<h4>16- A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco)
 prestações sem juros. Faça um programa que receba um valor de uma compra
 e mostre o valor das prestações.</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Valor do compra</p>
        <input type="number" name="compra" id="compraId">
		
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['compra'])){
        $compra = $_POST['compra'];
        $prestacoes =  $compra/5;
		
        printf("A compra é de R$%.2f e cada prestação é = R$%.2f",$compra,$prestacoes); 
    }
?>

<?php
 ECHO "<h4>17- Faça um algoritmo que receba o preço de custo de um produto e mostre o
 valor de venda. Sabe-se que o preço de custo receberá um acréscimo de
 acordo com um percentual informado pelo usuário.</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Custo produto</p>
        <input type="number" name="custoProduto" id="custoProdutoId">
		
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['custoProduto'])){
        $custoProduto = $_POST['custoProduto'];
        $custoProduto+= $custoProduto*0.15;
		
        printf("A o custo final do produto é R$%.2f", $custoProduto); 
    }
?>

<?php
 ECHO "<h4>18- A padaria Hotpão vende uma certa quantidade de pães franceses e uma
 quantidade de broas a cada dia. Cada pãozinho custa R$ 0,50 e a broa custa
 R$ 4,50. Ao final do dia, o dono quer saber quanto arrecadou com a venda dos
 pães e broas (juntos), e quanto deve guardar numa conta de poupança (10%
 do total arrecadado). Você foi contratado para fazer os cálculos para o dono.
 Com base nestes fatos, faça um programa para ler as quantidades de pães e
 de broas, e depois calcular os dados solicitados..</h4>";
?>
<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Quantidade de pães vendidos</p>
        <input type="number" name="paoVendido" id="paoVendidoId">
		<p>Quantidade de Broa vendida</p>
        <input type="number" name="broaVendida" id="broaVendidaId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['paoVendido'],$_POST['broaVendida'])){
        $paoVendido = $_POST['paoVendido'];
		$broaVendida = $_POST['broaVendida'];
        $paoVendido *= 0.50;
		$broaVendida *= 4.50;
		$poupanca = ($paoVendido+$broaVendida)*0.10;
		printf("Com um total de vendas de R$%.2f você vai colocar R$%.2f na poupança", $paoVendido+$broaVendida, $poupanca); 
    }
?>

<?php
 ECHO "<h4>19- Um motorista deseja colocar no seu tanque X reais de gasolina. Escreva
 um programa para ler o preço do litro da gasolina e o valor do pagamento, e
 exibir quantos litros ele conseguiu colocar no tanque..</h4>";
?>
<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Preço litro gasolina</p>
        <input type="number" name="precoLitro" id="precoLitroId">
		<p>Quantos reais deseja colocar</p>
        <input type="number" name="precoPagamento" id="precoPagamentoId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['precoLitro'],$_POST['precoPagamento'])){
        $precoLitro = $_POST['precoLitro'];
		$precoPagamento = $_POST['precoPagamento'];
        $litros = $precoPagamento/$precoLitro;
		
        printf("Com um pagamento de R$%.2f você vai conseguir colocar %.2f litros", $precoPagamento, $litros); 
    }
?>

<?php
 ECHO "<h4>20- Programa par perfeito. Faça um programa em que o usuário precise digitar
 um número de 1 até 10. Agora o outro usuário digita o segundo número. Se o
 número do primeiro usuário for igual ao do segundo escreva “Esse é seu par
 perfeito” Se os números forem diferentes escreva “Afaste-se do seu inimigo”.</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Primeiro número</p>
        <input type="number" name="primeiroNumero" id="primeiroNumeroId">
		<p>Segundo Número</p>
        <input type="number" name="segundoNumero" id="segundoNumeroId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['primeiroNumero'],$_POST['segundoNumero'])){
        $primeiroNumero = $_POST['primeiroNumero'];
		$segundoNumero = $_POST['segundoNumero'];
        if($primeiroNumero == $segundoNumero){
			printf("Par perfeito"); 
		}else{
			printf("Afaste-se do seu inimigo"); 
		}
		
       
    }
?>