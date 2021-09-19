<?php
require_once '../conexao.php';
    

    if(isset($_POST['nomeMedico'],$_POST['ruaMedico'],$_POST['numeroRuaMedico'],$_POST['bairroMedico'],$_POST['complementoMedico'],$_POST['lograduroMedico'],$_POST['cepMedico'],$_POST['emailMedico'],$_POST['telefoneFixoMedico'],$_POST['celularMedico'],$_POST['telefoneMedico'],$_POST['crmMedico'])){

        $nomeMedico = $_POST['nomeMedico'];   
        $ruaMedico = $_POST['ruaMedico'];
        $numeroRuaMedico = $_POST['numeroRuaMedico'];
        $bairroMedico = $_POST['bairroMedico'];
        $complementoMedico = $_POST['cepMedico'];
        $lograduroMedico = $_POST['lograduroMedico'];
        $cepMedico = $_POST['cepMedico'];
        $emailMedico = $_POST['emailMedico'];
        $telefoneFixoMedico = $_POST['telefoneFixoMedico'];
        $celularMedico = $_POST['celularMedico'];
        $telefoneMedico = $_POST['telefoneMedico'];
        $crmMedico = $_POST['crmMedico'];
        $dataCadastroMedico = $_POST['dataCadastroMedico'];
        
       
  
     $cmd =  $con->query("INSERT INTO tbl_medico VALUES 
        ('$crmMedico','$nomeMedico ','$dataCadastroMedico', '$ruaMedico','$numeroRuaMedico', '$bairroMedico', '$complementoMedico', '$lograduroMedico', '$cepMedico', '$emailMedico', '$telefoneFixoMedico', '$celularMedico', '$telefoneMedico');");
    }
 
?>