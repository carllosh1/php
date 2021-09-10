<?php
ECHO "<h2>Peguei alguns exercícios que eu fiz em C</h2> <br>";
 ECHO "<h4>1) Faça um programa que utilize switch</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#1" id="1" method="POST">
        <p>Digite o id do aluno:</p>
        <input type="number" name="idAluno" id="idAlunoId">
        <button type="submit">Resultado</button>
    </form>
<?php
    if(isset($_POST['idAluno'])){
        $idAluno = $_POST['idAluno'];
		
		switch ($idAluno) {
		case 1:
			printf("Bruno"); 
			 break;
		case 2:
			printf("Carlos"); 
			 break;
		case 3:
			printf("Felipe"); 
			break;
		case 4:
			printf("Gabriel A");
			break;
		case 5:
			printf("Gabriel H"); 
			break; 
		case 6:
			printf("Igor B"); 
			break;
		case 7:
			printf("Igor E"); 
			break;
		case 8:
			printf("Junio");
			break;
		case 9:
			printf("Lucas A");
			break;
		case 10:
			printf("Luiz");
			break;
		case 11:
			printf("Rafael F");
			break;
		case 12:
			printf("Thales");
			break;
		case 13:
			printf("Vinicius");
			break;
		default:
		
			printf("Aluno não existe"); 
	}
      
		   
    }
?>

<?php
 ECHO "<h4>2) Faça um programa que utilize while</h4>";
?>


<form action="<?=$_SERVER['PHP_SELF'];?>#2" id="2" method="POST">
        <p>Digite um valor inteiro para sacar:</p>
        <input type="number" name="saque" id="saqueId" placeholder="R$100">
        <button type="submit">Resultado</button>
    </form>
<?php
$cem=0; $cinquenta=0; $vinte=0; $dez=0; $cinco=0; $dois=0;
	
    if(isset($_POST['saque'])){
		
        $saque = $_POST['saque'];
		
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
			printf("NÃO É POSSÍVEL SACAR!");
		}else{
			printf("NOTAS DE CEM: %d", $cem);
			printf("<br> NOTAS DE Cinquenta: %d", $cinquenta);
			printf("<br> NOTAS DE VINTE: %d", $vinte);
			printf("<br> NOTAS DE DEZ: %d", $dez);
			printf("<br> NOTAS DE CINCO: %d", $cinco);
			printf("<br> NOTAS DE DOIS: %d <br> ", $dois);
		}
}
?>
<?php
 ECHO "<h4>3) Faça um programa que utilize do while</h4>";
?>
<form action="<?=$_SERVER['PHP_SELF'];?>#3" id="3" method="POST">
        <p>Tente acertar um número aleatório de 1 a 10:</p>
        <input type="number" name="nmb" id="nmbId">
        <button type="submit">Resultado</button>
    </form>
<?php
if(isset($_POST['nmb'])){
	$nmb =$_POST['nmb'];
	$contador = 0;
	do{
		if($nmb!=rand(0,10)){
			printf("Errou D:<br>TENTE NOVAMENTE");
		}else{
			printf("Acertou!");
		}
		$contador++;
	}while($contador!=1);

}
?>
<?php
 ECHO "<h4>3) Faça um programa que utilize for</h4>";
?>

<form action="<?=$_SERVER['PHP_SELF'];?>#4" id="4" method="POST">
        <p>Descubra se o número é primo:</p>
        <input type="number" name="numero1" id="numero1Id">
        <button type="submit">Resultado</button>
    </form>
<?php
if(isset($_POST['numero1'])){
	$numero1 =$_POST['numero1'];
	$soma = 0;
	$x = 0;
	if($numero1!=1){
		for($x=1; $x<=$numero1; $x++){
            if($numero1%$x==0){
                 $soma++;
        	}
		}
	}else{
		$soma = 3;
	}
        
	if($soma>2){
		printf("Não primo");
	}
	else{
		printf("Primo\n");
	}
}
?>
	
<?php
 ECHO "<h4>5) Faça um programa que utilize break</h4>";
?>      
	<form action="<?=$_SERVER['PHP_SELF'];?>#5" id="5" method="POST">
		<p>Digite um número(1 a 10) e veja seus antecessores, caso você digite o número escondido o sistema vai parar:</p>
		<input type="number" name="numero2" id="numero2Id">
		<button type="submit">Resultado</button>
	</form>
	<?php
	if(isset($_POST['numero2'])){
		$numero2 =$_POST['numero2'];
		$random = rand(1,10);
		for($i=1;$i<=$numero2;$i++){
			if($numero2 == $random){
				printf("O número escondido era o %d", $random);
				break;
			}else{
				printf("%d ", $numero2-$i);
			}
		}
		
}	
?>  

<?php
 ECHO "<h4>6) Faça um programa que utilize continue</h4>";
?>          
	<form action="<?=$_SERVER['PHP_SELF'];?>#6" id="6" method="POST">
		<p>Digite um número de (1 a 10) para o sistema tentar acertar:</p>
		<input type="number" name="numero3" id="numero3Id">
		<button type="submit">Resultado</button>
    </form>

	<?php
	if(isset($_POST['numero3'])){
		$numero3 =$_POST['numero3'];
		for($x=1; $x<100; $x++){
			$random1 =rand(1,10);
			if($random1 == $numero3){
				printf("%d° Tentativa - %d <br> ACERTEI!",$x, $random1);
				break;
			}else{
				printf("%d° Tentativa - %d <br>",$x, $random1);
				continue;
			}
			
		}
	}    
			
?>  