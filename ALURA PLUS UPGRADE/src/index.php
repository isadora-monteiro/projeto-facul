<!DOCTYPE html>    <!-– padrão-–>
<html lang="en">

<head>      <!-– informações ao navegador-–>

    <meta charset="UTF-8">      <!-– padrão teclado-–>
    <meta name="Viewport" content="width-device-width, initial-scale=1">        <!-– site responsivo (responsividade de telas)-–>

    <title>Alura Plus </title>      <!-– titulo na aba-–>

    <link rel="stylesheet" href="styles.css">   <!-– linka uma folha de estilo css-–>

    <link rel="preconnect" href="https://fonts.googleapis.com">      <!-– links do site fonts.google para baixar a fonte "Inter". (apenas u!m copy paste)-–>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

</head>

<body> <!-– conteúdo da página-–>


    <header class="">
        <div class="">
            <a href="form-login.php" class="container__botao">Acessar</a>
            <a href="form-assinatura-alura.php" class="container__botao">Matricular-se</a>
<?php
    session_start();
    if(isset ($_SESSION['login'])) {
?>
            <a href="logout.php" class="container__botao">Desconectar</a>
<?php
    }
?>

        </div>
    </header>


    <section class="container principal">     <!-– tag container que define uma seção no documento (cria um bloco) -–>
        <div class="container__caixa">       <!-– tag container "coringa" que agrupa elementos em um bloco-–>
            <h1 class="container__titulo"> Com o Combo+, você pode aproveitar a Alura+ e o Alura Língua por um preço único.</h1>     <!-– tag título. Textos de títulos-–>
            <img src="../images/Combo.png" alt="Combo+ = Alura+ e Alura Língua" class="container__imagem">       <!-– tag para incluir imagens-–>
            <a href="form-assinatura-combo+.php" class="container__botao">Assine por 12x de R$ 120,00*</a>        <!-– tag âncora. Torna um texto um link-–>
            <a href="form-assinatura-alura.php" class="container__botao botao_secundario">Assinar somente o Alura+</a>
            <p class="container__aviso">*O preço pode variar caso a assinatura seja feita em outros planos.</p>         <!-– tag parágrafo. textos menos importantes que h1, h2, h3 (Títulos e subtítulos)-–>
        </div>
    </section>

    <section class="container secundario">
        <img src="../images/Plataformas.png" alt="Monitor e celular com Alura+ nas telas" class="secundario__imagem">
        <div class="container__descricao">
            <h2 class="descricao__titulo">Assista do seu jeito</h2>         <!-– tag subtítulo. Textos de subtítulos-–>
            <p class="descricao__texto">Aproveite  a tela grande da TV ou assista no tablet e celular. Nossa seleção de cursos não para de crescer.</p>
        </div>
    </section>

    <section class="container secundario">
        <div class="container__descricao">
            <p class="descricao__texto">Só o Combo+ oferece Alura+ e Alura Língua juntos para você ter acesso a cursos de diversas áreas da tecnologia e aprender Inglês ou Espanhol, onde e como quiser.</p>
            <a href="form-assinatura-combo+.php" class="container__botao secundario__botao">Assinar o Combo+</a>
        </div>
        <img src="../images/Telas.png" alt="Tela do Alura+ e do Alura Língua" class="secundario__imagem">
    </section>

    <section class="container secundario">
        <img src="../images/Notebook.png" alt="Notebook com tela da Alura cursos" class="secundario__imagem">
        <div class="container__descricao">
            <h3 class="descricao__titulo">Baixe seus cursos</h3>            <!-– tag subtítulo. Textos de subtítulos-–>
            <p class="descricao__texto">Baixe e assista quando e onde quiser. Assim, seus favoritos estão sempre com você, até mesmo sem internet.</p>
        </div>
    </section>

    <section class="dispositivos">
        <h2 class="dispositivos__titulo">Disponível nos seus dispositivos favoritos</h2>
        <ul class="dispositivos__lista">        <!-– tag container de listas não ordenadas-–>
            <li>        <!-– tag item da lista-–>
                <img src="../images/tv.png" alt="ícone televisão">          <!-– tag imagem-–>
                <h3 class="lista__item">TV</h3>         <!-– tag subtítulo. Texto para a imagem-–>
            </li>
            <li>
                <img src="../images/computador.png" alt="ícone computador">
                <h3 class="lista__item">Computadores</h3>
            </li>
            <li>
                <img src="../images/celular.png" alt="ícone celular">
                <h3 class="lista__item">Celular</h3>
            </li>
        </ul>
    </section>

    <footer class="rodape">     <!-– tag rodapé. Fica dentro do body-–>
        <img src="../images/Logo.png" alt="Alura" class="rodape__logo">
        <ul class="rodape__lista">          <!-– tag container de listas não ordenadas-–>
            <li class="lista__link">        <!-– tag item da lista-–>
                <a href="#">Idioma   </a>
            </li>
            <li class="lista__link">
                <a href="#">Dispositivos compatíveis   </a>
            </li>
            <li class="lista__link">
                <a href="#">Contrato de assinatura   </a>
            </li>
            <li class="lista__link">
                <a href="#">Política de privacidade   </a>
            </li>
            <li class="lista__link">
                <a href="#">Proteção de dados no Brasil   </a>
            </li>
            <li class="lista__link">
                <a href="#">Anúncios personalizados   </a>
            </li>
            <li class="lista__link">
                <a href="#">Ajuda</a>
            </li>
        </ul>
        <p class="rodape__texto">2023 Alura, Alura+ e Alura Língua. Todos os direitos reservados</p>        <!-– tag parágrafo. textos menos importantes que h1, h2, h3 (Títulos e subtítulos)-–>
        <p class="rodape__texto">Alura+ é um serviço pago baseado em assinatura</p>
    </footer>
</body>

</html>