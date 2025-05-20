<?php
//var_dump($_SERVER);
// Exemplo para usar:
// docker build -t tiagotas/php_app:v1 .
// docker compose up --build
// Acessar http://localhost:8080

try {

    $dsn = "mysql:host=meu_servidor_mysql;dbname=minha_app";
    $cnn = new PDO($dsn, "root", "root");

    $teste = $cnn->query("show variables");     

    while ($row = $teste->fetch())
        echo "<p>Name: {$row[0]} : {$row[1]} </p>";    

} catch(Exception $e) {
    echo "Erro: " . $e->getMessage();
}