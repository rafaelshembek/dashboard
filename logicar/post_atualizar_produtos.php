<?php
    header('Content-Type: Applicativo/json');
    require_once('../config/config.php');


    $data = json_decode(file_get_contents('php://input'), true);

    $sql = "UPDATE marketplace.produtos SET nome_produto = '$data[1]', preco_produto = '$data[2]' WHERE id_produto = $data[0]";

    $getDados = $config->prepare($sql);
    $getDados->execute();
    $config = null;

?>