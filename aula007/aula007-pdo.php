<?php
try {
    $con =  new PDO("mysql:hostname=localhost;dbname=db_atvd15_DSW", "root", "");

    if(isset($_POST['nomeAluno'],$_POST['emailAluno'])){
        $nomeAluno = $_POST['nomeAluno'];
        $emailAluno = $_POST['emailAluno'];
       

        $con->query("INSERT INTO tbl_alunos VALUES 
        ('DEFAULT','$nomeAluno', '$emailAluno');");
    }

    
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

$con = null;

$con->query("UPDATE tbl_alunos SET nome_aluno='kelly' and email_aluno='kelly@gmail.com' WHERE id_aluno='1';");
$con->query("DELETE FROM tbl_alunos WHERE id_aluno='3';");
?>