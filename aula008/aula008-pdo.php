<?php
try {
    $con =  new PDO("mysql:hostname=localhost;dbname=db_atvd16_DSW", "root", "");

    if(isset($_POST['nomeAluno'],$_POST['emailAluno'],$_POST['telefoneAluno'])){
        $nomeAluno = $_POST['nomeAluno'];
        $emailAluno = $_POST['emailAluno'];
        $telefoneAluno = $_POST['emailAluno'];
       

        $con->query("INSERT INTO tbl_alunos VALUES 
        ('DEFAULT','$nomeAluno', '$emailAluno','$telefoneAluno');");
    }

    echo "<a href='index.php'>back</a>";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}


//  $bindParam = $con->prepare("INSERT INTO tbl_alunos (nome_aluno,  email_aluno,telefone_aluno) 
//  VALUES (:n, :t, :e)");
//  $bindParam->bindParam(":n", $nomeAluno);
//  $bindParam->bindParam(":e", $emailAluno);
//  $bindParam->bindParam(":t", $telefoneAluno);

//  $bindParam->execute();


// $bindValue = $con->prepare("INSERT INTO tbl_aluno (nome_aluno,  email_aluno,telefone_aluno)
//  VALUES (?, ?, ?)");
// $bindValue->bindValue(1, $nomeAluno);
// $bindValue->bindValue(3, $emailAluno);
// $bindValue->bindValue(2, $telefoneAluno);

// $bindValue->execute();

?>