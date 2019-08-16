<?php 

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

//conectando ao banco de dados
try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "<h2>Conexao estabelecida com sucesso!</h2>";
    
    $sql = "SELECT * FROM posts";
    $dado = $pdo->query($sql);
    
    if($dado->rowCount() > 0){
        echo "<h3> Há posts cadastrados</h3>";
        foreach($dado->fetchAll() as $post)
        {
            echo "<p><b>Titulo</b>: ".$post['titulo']."<br>";
            echo "<b>Autor</b>: <i>".$post['autor']."</i>";
            echo " - <b>Dta de criaçao</b>: ".$post['data_criado']."</p>";
            echo "<p><b>Conteudo: </b><br>".$post['conteudo']."</p><br>";
            echo "<hr>";
        }
    }
    else{
        echo "<h3>Nao há posts cadastrados</h3>";
    }
}
catch(PDOExecption $e)
{
    echo "<h2>Falhou".$e->getMenssage()."</h2>";
}



