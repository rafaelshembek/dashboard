<?php
    header('Content-Type: Application/json');
    require_once('../config/config.php');


    // $sql = "SELECT * FROM produtos";

    $dados = $config->prepare("SELECT * FROM marketplace.produtos JOIN marketplace.categoria ON marketplace.produtos.categoria = marketplace.categoria.id_categoria");
    $dados->execute();
    $result = $dados->fetchAll();
    $config = null;
    
    echo json_encode($result, JSON_PRETTY_PRINT);
?>