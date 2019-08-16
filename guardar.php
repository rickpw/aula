<?php 

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

//conectando ao banco de dados
try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $titulo = "Tudo sobre CMS";
    $autor = "Erick";
    $data_criado = "2019-08-16 00:00:00";
    $conteudo = "blajkjadjkjds";
    
    $sql = "INSERT INTO posts SET titulo = '$titulo', autor = '$autor', data_criado = '$data_criado', conteudo = '$conteudo'";
    
    $pdo->query($sql);
    echo "Titulo inserido com sucesso: ".$pdo->lastInsertId();
    
}
catch(PDOExecption $e)
{
    echo "<h2>Falhou".$e->getMessage()."</h2>";
}
