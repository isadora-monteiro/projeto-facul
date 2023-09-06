<!DOCTYPE html>    <!-– padrão-–>
<html lang="en">

<head>      <!-– informações ao navegador-–>

    <meta charset="UTF-8">      <!-– padrão teclado-–>
    <meta name="Viewport" content="width-device-width, initial-scale=1">        <!-– site responsivo (responsividade de telas)-–>

    <title>Login Combo+ </title>      <!-– titulo na aba-–>

    <link rel="stylesheet" href="styles-form-assinatura.css">   <!-– linka uma folha de estilo css-–>

    <link rel="preconnect" href="https://fonts.googleapis.com">      <!-– links do site fonts.google para baixar a fonte "Inter". (apenas u!m copy paste)-–>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

</head>

<body> <!-– conteúdo da página-–>

<?php
session_start();
if(isset($_GET['erro'])) {
    echo("<hr/><h2>" . $_GET['erro'] . "</h2><hr/>");
}
?>

<section class="container principal">     <!-– tag container que define uma seção no documento (cria um bloco) -–>
    <div class="container__caixa">       <!-– tag container "coringa" que agrupa elementos em um bloco-–>
        <h1 class="container__titulo"> Faça o login e mergulhe no mar da tecnologia </h1>     <!-– tag título. Textos de títulos-–>
        <img src="../images/Combo.png" alt="Combo+ = Alura+ e Alura Língua" class="container__imagem">       <!-– tag para incluir imagens-–>

    </div>


    <form action="script-form-login.php" method="post">

        <div>

            <div class= "form-titulo">
                <h1>Login Combo+</h1>
            </div>


            <div class="form ">

                <div class="form-group">
                    <label for="login">E-mail</label><br>
                    <input type="email" class="form-control" id="login" name="login" aria-describedby="emailHelp" placeholder="Seu e-mail" required><br>
                </div>

                <div class="form-group">
                    <label for="pass">Senha</label><br>
                    <input type="password" class="form-control" id="pass" name="pass" aria-describedby="emailHelp" placeholder="Digite uma senha" required><br>
                </div>

            </div>

            <div class="form-botao form-group">
                <button type="submit" >Logar</button>
            </div>
        </div>
    </form>

</section>

</body>
</html>