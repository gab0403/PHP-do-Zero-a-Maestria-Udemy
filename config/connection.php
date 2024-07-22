<?php

$host="127.0.0.1";
$dbname="agenda";
$user="root";
$pass=1234;


try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    $error = $e->getMessage();
    echo "Erro: $error";
}
?>