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

<section class="container principal">     <!-– tag container que define uma seção no documento (cria um bloco) -–>
    <div class="container__caixa">       <!-– tag container "coringa" que agrupa elementos em um bloco-–>
        <h1 class="container__titulo"> Mergulhe em Tecnologia! </h1>     <!-– tag título. Textos de títulos-–>
        <h3 > <br>Você vai estudar, praticar, discutir e se aprofundar em uma plataforma que respira tecnologia.</h3>
        <img src="../images/Logo.png" alt="Logo Alura+" class="container__imagem">       <!-– tag para incluir imagens-–>

    </div>


    <form action="script-form-assinatura.php" method="post">

        <div>

            <div class= "form-titulo">
                <h1>Matricule-se na Alura</h1>
            </div>


            <div class="form ">
                <div class="form-group">
                    <label for="nome">Nome Completo</label><br>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome completo" required>
                </div>
                <div class="form-group">
                    <label for="nascimento">Data de Nascimento </label><br>
                    <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="Sua data de nascimento" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label><br>
                    <input type="text" class="form-control" minlength="11" maxlength="11" id="cpf" name="cpf" placeholder="Seu CPF" title="Digite apenas números" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone com DDD</label><br>
                    <input type="tel" class="form-control" id="telefone" name="telefone" aria-describedby="telHelp" placeholder="(00) 0 0000-0000" required><br>
                    <small id="telHelp" class="form-text text-muted">Insira um telefone válido.</small>
                </div>

                <div class="form-group">
                    <label for="email">Endereço de E-mail</label><br>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu e-mail" required><br>
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label><br>
                    <input type="password" class="form-control" id="pass" name="pass" aria-describedby="emailHelp" placeholder="Digite uma senha" required><br>
                    <small id="emailHelp" class="form-text text-muted">Digite no mínimo 8 caracteres, <br>contendo letras e números.</small>
                </div>
            </div>

            <div class="form-botao form-group">
                <button type="submit" >Enviar</button>
            </div>
        </div>
    </form>

</section>
</body>
