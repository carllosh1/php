<?php
require_once '../conexao.php';

if(isset($_POST ['dataCadastroEspecialidade'], $_POST['nomeEspecialidade'])){

    $dataCadastroEspecialidade = $_POST['dataCadastroEspecialidade'];
    $nomeEspecialidade = $_POST['nomeEspecialidade'];

}

$cmd = $con->query("INSERT INTO tbl_especialidade  VALUES('DEFAULT','$dataCadastroEspecialidade', '$nomeEspecialidade')");

header("location: especialidade.php");
?>