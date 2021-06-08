<?php
    session_start();
?>
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset="utf-8">
        <title> Cadastrar PHP </title>
    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        <?php
            if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?>
        <form method="POST" action="processa.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="digite o nome completo"><br><br>

            <label>E-mail: </label>
            <input type="email" name="email" placeholder="digite o seu e-mail"><br><br>

            <label>Sexo: </label><br>
            <input type="radio" id="male" name="sexo" value="M">
            <label for="male">Masculino</label><br>
            <input type="radio" id="female" name="sexo" value="F">
            <label for="female">Feminino</label><br>
            <input type="radio" id="other" name="sexo" value="O">
            <label for="other">Outro</label><br><br>

            <label for="niver">Data de Nascimento:</label>
            <input type="date" id="birthday" name="niver"><br><br>

            <input type="submit" value="Cadastrar">
        <form>
    </body>
</html>