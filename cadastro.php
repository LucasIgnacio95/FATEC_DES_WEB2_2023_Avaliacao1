<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $placa = $_POST['placa'];

    $registro = "$nome|$ra|$placa\n";

    file_put_contents('registros.txt', $registro, FILE_APPEND);

    header('Location: registros.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
    <h1>Cadastrar Aluno</h1>
    <form method="POST">
        <div class="form-group">
        <label>Nome Completo:</label><br>
        <input type="text" name="nome"><br>
        </div>
        <div class="form-group">
        <label>Registro Acadêmico (R.A.):</label> 
        <input type="text" name="ra"><br>
        </div>
        <div class="form-group">
        <label>Placa do Carro ou Moto:</label> 
        <input type="text" name="placa"><br>
        </div>
        <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
    </form>
    </div>
</body>
</html>