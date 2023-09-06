<?php
global $user, $pass;

$host = 'C:\Users\user\Documents\PROGRAMACAO\PROJETOS GITHUB\bancoClientes';
$port = 5432;
$user = 'root';
$pass = '';


//cria um PDO para um banco criado
$dsn = 'sqlite:' . $host;
$mensagem = 'Conexão ok<br>';


try {
    $pdo = new PDO($dsn, $user,  $pass, [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
 /*
    $conexao = pg_connect($host, $user, $pass) or die ('Falha na conexão');
    //cria tabela/banco de dados
    $query = "create table alunosT (matricula int primary key, nome varchar(50) not null, entrada   int not null)";
    $pdo->exec($query);
    echo "tabela ok";*/

} catch(PDOException $e) {
    $mensagem = 'Falha na conexão :(';

}
echo ($mensagem);







