<?php

session_start();

if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['pass']) == true)) {

    header('location: form-login.php', true, 301);

} else {

    $logado = $_SESSION['user'];
?>


<!DOCTYPE html>    <!-– padrão-–>
<html lang="en">

<head>      <!-– informações ao navegador-–>

    <meta charset="UTF-8">      <!-– padrão teclado-–>
    <meta name="Viewport" content="width-device-width, initial-scale=1">        <!-– site responsivo (responsividade de telas)-–>

    <title>Cursos Alura </title>      <!-– titulo na aba-–>

    <link rel="stylesheet" href="styles.css">   <!-– linka uma folha de estilo css-–>

    <link rel="preconnect" href="https://fonts.googleapis.com">      <!-– links do site fonts.google para baixar a fonte "Inter". (apenas u!m copy paste)-–>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

</head>

<body> <!-– conteúdo da página-–>

    <section class=" ">     <!-– tag container que define uma seção no documento (cria um bloco) -–>
        <div class="container__caixa">       <!-– tag container "coringa" que agrupa elementos em um bloco-–>
            <h1 class="container__titulo"> <?php echo ("Bem vindo $logado !"); ?> </h1>     <!-– tag título. Textos de títulos-–>
            <h1 class="container__titulo"> Vamos começar os nossos estudos? </h1>
            <h1 class="container__titulo"> Escolha uma área de estudos </h1>

            <a href="http://www.alura.com.br" >
                <img src="../images/Combo.png" alt="Combo+ = Alura+ e Alura Língua" class="container__imagem">
            </a>
            <a href="http://www.alura.com.br" >
                <img src="../images/Combo.png" alt="Combo+ = Alura+ e Alura Língua" class="container__imagem">
            </a>
            <a href="http://www.alura.com.br" >
                <img src="../images/Combo.png" alt="Combo+ = Alura+ e Alura Língua" class="container__imagem">
            </a>
            <a href="index.php" class="container__botao secundario__botao">Retornar</a>
        </div>
    </section>
</body>
</html>

<?php
}
?>
