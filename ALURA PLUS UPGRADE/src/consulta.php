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

            $sqlUser = ("SELECT nome FROM clientesAPagar where email = '$login' ");
            $stmtUser = $pdo->prepare($sqlUser);
            $stmtUser->execute();
            $resultUser = $stmtUser->fetch(PDO::FETCH_ASSOC);

            while ($resultUser) {
                $_SESSION['user'] = $resultUser['nome'];

                $erroAcesso = "";
            }

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

