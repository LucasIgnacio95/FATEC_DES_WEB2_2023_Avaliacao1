<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

$registros = file('registros.txt');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Registros de Alunos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <h1>Registros de Alunos</h1>
    <ul>
        <?php foreach ($registros as $registro) : ?>
            <?php list($nome, $ra, $placa) = explode('|', $registro); ?>
            <li>
                <strong>Nome:</strong> <?php echo $nome; ?><br>
                <strong>R.A.:</strong> <?php echo $ra; ?><br>
                <strong>Placa:</strong> <?php echo $placa; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php "class="btn btn-danger">Voltar</a>
</body>
</html>