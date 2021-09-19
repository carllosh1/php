<?php
require_once '../conexao.php';
   



    if(isset($_POST['save'])){
     
        $tempoPadrao = $_POST['tempoPadrao'];   
        $inicioPadrao = $_POST['inicioPadrao'];
        $finalPadrao = $_POST['finalPadrao'];
        $valoresCheck = $_POST['checkValores'];
        $dataCadastroPadrao = $_POST['dataCadastroPadrao'];
        
        $space = "";
        
       foreach($valoresCheck as $valoresCheckA){    
           $space .= $valoresCheckA.",";
           
        }   
       }

       $cmd=  $con->query("INSERT INTO tbl_padroes VALUES 
       ('DEFAULT','$dataCadastroPadrao','$tempoPadrao ','$inicioPadrao','$finalPadrao', '$space');");  
     
     header("location: padroes.php");
?>