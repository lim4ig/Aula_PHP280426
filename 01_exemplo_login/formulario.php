<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="validar_login.php" method="POST">
        <label>E-mail</label>
        <input type="email" name="email_usuario"><br>
        <label for="password">Senha</label>
        <input type="password" name="password_usuario"><br>
        <button type="submit">Acessar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>