<?php
require_once '../conexao.php';
    

    if(isset($_POST['nomeProcedimentos'],$_POST['dataCadastroProcedimento'],$_POST['valorProcedimento'],$_POST['generoProcedimento'],$_POST['exececaoProcedimento'],$_POST['codigoProcedimento'])){

        $nomeProcedimento = $_POST['nomeProcedimento'];   
        $dataCadastroProcedimento = $_POST['dataCadastroProcedimento'];
        $valorProcedimento = $_POST['valorProcedimento'];
        $generoProcedimento = $_POST['generoProcedimento'];
        $exececaoProcedimento = $_POST['exececaoProcedimento'];
        $codigoProcedimento = $_POST['codigoProcedimento'];
        
        
       
  
        $cmd=  $con->query("INSERT INTO tbl_procedimento VALUES 
        ('DEFAULT','$nomeProcedimento ','$exececaoProcedimento',' '$dataCadastroProcedimento','$valorProcedimento', '$generoProcedimento','$codigoProcedimento');");
    }

    header("location: procedimentos.php");
?>