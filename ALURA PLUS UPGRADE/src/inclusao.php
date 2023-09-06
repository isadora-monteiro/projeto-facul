<?php

require_once 'conexao.php';

function incluir($cpf, $nome, $nascimento, $tel, $email, $pass)
{
    global $pdo;

    try {
        $sql = "INSERT INTO clientesAPagar VALUES (?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$cpf, $nome, $nascimento, $tel, $email, $pass]);
        $mensagem = 'Aluno incluído com sucesso<br>';

    } finally {
        echo($mensagem);
        if ($pdo) {
            $pdo = null;
        }
    }
}

//incluir('02173039008', 'isadora', 28101991, 48996211806, 'isadora.eng@outlook.com', 'farao152152');
