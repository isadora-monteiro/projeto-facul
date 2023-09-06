<?php
require_once 'consulta.php';

session_start();
$erro="";

try
{
    if (!isset($_REQUEST['login']) or ($_REQUEST['login'] == "")) {
        $erro = "Preencha o login";

    } elseif (!isset($_REQUEST['pass']) or ($_REQUEST['pass'] == "")) {
        $erro = "Preencha a senha";

    } else {
        $login = $_REQUEST['login'];
        $senha = $_REQUEST['pass'];
        $erro = validarLoginSenha($login, $senha);
    }

} finally {
    if ($erro == "") {
    $_SESSION['login'] = $login;
    $_SESSION['pass'] = $senha;
    header('location: pagina-protegida.php', true, 301);

    } else {

        $_SESSION['login'] = null;
        $_SESSION['pass'] = null;
        $_SESSION['user'] = null;
        header("location: form-login.php?erro=$erro", true, 301);

    }
}
?>

