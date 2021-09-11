<?php
try {
    $con =  new PDO("mysql:hostname=localhost;dbname=db_atvd17_DSW", "root", "");

    if(isset($_POST['nomePaciente'],$_POST['ruaPaciente'],$_POST['numeroRuaPaciente'],$_POST['bairroPaciente'],$_POST['complementoPaciente'],$_POST['lograduroPaciente'],$_POST['cepPaciente'],$_POST['emailPaciente'],$_POST['telefoneFixoPaciente'],$_POST['celularPaciente'],$_POST['telefonePaciente'],$_POST['convenioPaciente'])){

        $nomePaciente = $_POST['nomePaciente'];   
        $ruaPaciente = $_POST['ruaPaciente'];
        $numeroRuaPaciente = $_POST['numeroRuaPaciente'];
        $bairroPaciente = $_POST['bairroPaciente'];
        $complementoPaciente = $_POST['cepPaciente'];
        $lograduroPaciente = $_POST['lograduroPaciente'];
        $cepPaciente = $_POST['cepPaciente'];
        $emailPaciente = $_POST['emailPaciente'];
        $telefoneFixoPaciente = $_POST['telefoneFixoPaciente'];
        $celularPaciente = $_POST['celularPaciente'];
        $telefonePaciente = $_POST['telefonePaciente'];
        $convenioPaciente = $_POST['convenioPaciente'];
        $dataCadastroPaciente = $_POST['dataCadastroPaciente'];
        
       
  
        $con->query("INSERT INTO tbl_paciente VALUES 
        ('DEFAULT','$nomePaciente ','$convenioPaciente','$dataCadastroPaciente', '$ruaPaciente','$numeroRuaPaciente', '$bairroPaciente', '$complementoPaciente', '$lograduroPaciente', '$cepPaciente', '$emailPaciente', '$telefoneFixoPaciente', '$celularPaciente', '$telefonePaciente');");
    }

    echo "<a href='index.php'>back</a>";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
