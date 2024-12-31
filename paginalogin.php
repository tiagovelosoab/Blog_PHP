<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="w3c.css">
    </head>
    <body>
        <header class="w3-center w3-light-grey w3-container">
            <h1>Formulário de acesso</h1>
        </header>
        <section class="w3-section w3-container w3-center">
            <form method="post" action="login.php" class="w3-container">
                <label for="login"><b>Usuário</b></label>
                <input id="login" style="width: 40%; margin:0 auto" class="w3-input w3-border" name="login" type="text"> <br>
                <label for="senha"><b>Senha</b></label>
                <input id="senha" style="width: 40%; margin:0 auto" class="w3-input w3-border" name="senha" type="password">
                <button type="submit" style="width: 15%;" class="w3-button w3-green w3-section">Entrar</button> <br>
                <input id="rdme" class="w3-check" name="rdme" type="checkbox">
                <label for="rdme">Lembrar de mim?</label> <br> <br>
                <?php
                    session_start();
                    if(isset($_SESSION["mensagem"])){
                        echo "<p class='w3-text-red'>" . $_SESSION["mensagem"] . "</p>";
                    }
                    session_destroy();
                ?>  
            </form>
        </section>
        <footer  style="position: fixed; bottom: 0; left: 0; right: 0;" class="w3-container w3-grey w3-border-top w3-padding-16">
            <button type="button" class="w3-button w3-red w3-left">Cancelar</button>
            <a href="#" class="w3-right w3-padding w3-hide-small">Esqueceu a senha?</a>
        </footer>
    </body>
</html>