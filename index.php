<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1> Olá Portaria</h1>
        <br>
       
    </div>
    <h1>Bem-vindo ao Dashboard</h1>
    <a href="cadastro.php" class="btn btn-danger">Cadastrar Aluno</a>
    <a href="registros.php" class="btn btn-danger">Ver Registros</a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</body>
</html>
