<?php
require_once '../conexao.php';
    

    if(isset($_POST['save'])){

        $dataCadastroConvenio = $_POST['dataCadastroConvenio'];
        $nomeFantasiaConvenio = $_POST['nomeFantasiaConvenio'];
        $CNPJConvenio = $_POST['CNPJConvenio'];   
        $nomeEmpresaConvenio = $_POST['nomeEmpresaConvenio'];
        $emailConvenio = $_POST['emailConvenio'];
        $nomeContatoConvenio = $_POST['nomeContratoConvenio'];
        $homePageConvenio = $_POST['homePageConvenio'];
        $telefone1Convenio = $_POST['telefone1Convenio'];
        $telefone2Convenio = $_POST['telefone2Convenio'];
  
   
        
     $cmd = $con ->query("INSERT INTO tbl_convenio  VALUES ('$CNPJConvenio', '$dataCadastroConvenio', '$nomeFantasiaConvenio', '$nomeEmpresaConvenio', '$emailConvenio', '$nomeContatoConvenio', '$homePageConvenio', ' $telefone1Convenio', '$telefone2Convenio')");
    
    //  $cmd->bindParam(":DC", $dataCadastroConvenio);
    //  $cmd->bindParam(":FC", $nomeFantasiaConvenio);
    //  $cmd->bindParam(":CNPJ", $CNPJConvenio);
    //  $cmd->bindParam(":EC", $nomeEmpresaConvenio);
    //  $cmd->bindParam(":EMC", $emailConvenio);
    //  $cmd->bindParam(":CC", $nomeContatoConvenio);
    //  $cmd->bindParam(":HPC", $homePageConvenio);
    //  $cmd->bindParam(":TC2", $telefone1Convenio);
    //  $cmd->bindParam(":TC1", $telefone2Convenio);
    //  $cmd->execute();
    // echo $dataCadastroConvenio ."1- " . $CNPJConvenio ."2- ". $nomeFantasiaConvenio ."3- ". $nomeEmpresaConvenio ."4- ".  $emailConvenio."5- " . $homePageConvenio ."6- ".  $telefone1Convenio ."7- ".$telefone2Convenio;
    } 
    header("location: convenio.php");
?>