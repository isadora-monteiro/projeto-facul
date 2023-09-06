<?php

session_start();
require_once 'conexao.php';
global $pdo;

try
{

    if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['pass']) == true)) {
        header('location: form-login.php', true, 301);

    } else {
        $login = $_SESSION['login'];
        $sqlUser = ("SELECT nome FROM clientesAPagar where email =='.$login.' ");
        $stmtUser = $pdo->prepare($sqlUser);
        $stmtUser->execute();
        $resultUser = $stmtUser->fetch(PDO::FETCH_ASSOC);

        while ($resultUser) {
            $_SESSION['user'] = $resultUser['nome'];
            $logado = $_SESSION['user'];
        }
    }

} finally {

    if ($pdo) {
        $pdo = null;
    }
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
            <img src="../images/Combo.png" alt="Combo+ = Alura+ e Alura Língua" class="container__imagem">
            <img src="../images/Combo.png" alt="Combo+ = Alura+ e Alura Língua" class="container__imagem">
            <img src="../images/Combo.png" alt="Combo+ = Alura+ e Alura Língua" class="container__imagem">
            <a href="index.php" class="container__botao secundario__botao">Retornar</a>
        </div>
    </section>
    </body>
    </html>

    <?php
}
?>
--------------------------------------------------------------------------------------

<?php

session_start();
require_once 'conexao.php';
require_once 'script-form-login.php';

function validarLoginSenha($login, $senha) {
    global $pdo;

    try {

        $sqlLogin = ("SELECT email FROM clientesAPagar where email = '$login' " );
        $sqlSenha = ("SELECT pass FROM clientesAPagar where pass = '$senha' ");
        $stmtLogin = $pdo->prepare($sqlLogin);
        $stmtSenha = $pdo->prepare($sqlSenha);
        $stmtLogin->execute();
        $stmtSenha->execute();

        $resultLogin = $stmtLogin->fetch(PDO::FETCH_ASSOC);
        $resultSenha = $stmtSenha->fetch(PDO::FETCH_ASSOC);

        if (($resultLogin > 0) and ($resultSenha > 0))
        {
            $erroAcesso = "";

        } else {
            $erroAcesso = "Login ou senha inválidos";
        }

    } finally {
        if ($pdo)
        {
            $pdo = null;
        }
    }
    return $erroAcesso;
}

