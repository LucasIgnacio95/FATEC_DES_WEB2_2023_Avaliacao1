<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login === 'portaria' && $senha === 'FatecAraras') {
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $mensagem = "Login ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
    <h1>Login</h1>
    <?php if (isset($mensagem)) : ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>
    <form method="POST">
        <div class="form-group">
        <labe>Login:</label><br> 
        <input type="text" name="login"><br>
        </div>
        <div class="form-group">
        <labe>Senha:</label><br>
         <input type="password" name="senha"><br>
         </div>
         <div class="form-group">
        <input type="submit" value="Entrar">
        </div>
    </form>
</body>
</html>