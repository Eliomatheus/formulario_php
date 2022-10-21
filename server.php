<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com sucesso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h1>Login com sucesso!<br></h1>
            <?php if (isset($_POST['usuario'])) : ?>
                <h1>Bem vindo, <?= $_POST['usuario'] ?></h1>
            <?php endif; ?>
    </div>

    <div class="image">
        <img src="./animação/animacao2.svg" class="login-image" alt="Animação de login">
    </div>
</body>
</html>