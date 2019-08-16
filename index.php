<?php 

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

//conectando ao banco de dados
try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "Conexao estabelecida com sucesso!";
    
    $sql = "SELECT * FROM posts";
    $dado = $pdo->query($sql);
    
    if($dado->rowCount() > 0){
        echo " Há posts cadastrados";
    }
    else{
        echo "Nao há posts cadastrados";
    }
}
catch(PDOExecption $e)
{
    echo "Falhou".$e->getMenssage();
}



