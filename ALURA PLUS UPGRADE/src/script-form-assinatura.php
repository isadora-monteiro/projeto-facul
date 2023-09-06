<?php
require_once 'inclusao.php';
//require_once 'consulta.php';


if (isset ($_REQUEST['nome'])) {
    incluir(
        $_REQUEST['cpf'],
        $_REQUEST['nome'],
        $_REQUEST['nascimento'],
        $_REQUEST['telefone'],
        $_REQUEST['email'],
        $_REQUEST['pass']
    );

    $nome = $_REQUEST['nome'];
}
?>

<!DOCTYPE html>    <!-– padrão-–>
<html lang="en">

<head>      <!-– informações ao navegador-–>

    <meta charset="UTF-8">      <!-– padrão teclado-–>
    <meta name="Viewport" content="width-device-width, initial-scale=1">        <!-– site responsivo (responsividade de telas)-–>

    <title>Assinatura Alura Plus </title>      <!-– titulo na aba-–>

    <link rel="stylesheet" href="styles-form-assinatura.css">   <!-– linka uma folha de estilo css-–>

    <link rel="preconnect" href="https://fonts.googleapis.com">      <!-– links do site fonts.google para baixar a fonte "Inter". (apenas u!m copy paste)-–>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

</head>

<body> <!-– conteúdo da página-–>

<section class=" principal">     <!-– tag container que define uma seção no documento (cria um bloco) -–>
    <div class="container__caixa">       <!-– tag container "coringa" que agrupa elementos em um bloco-–>
        <h1 class="container__titulo"> <?php echo ("Seja bem-vindo " . $nome . "! <br> 
                Foi enviado para seu email um boleto para pagamento. <br> 
                Assim que o pagamento for descontado seu acesso já estará disponível"); ?> </h1>     <!-– tag título. Textos de títulos-–>
        <a href="form-login.php" class="container__botao secundario__botao">Login</a>
    </div>




