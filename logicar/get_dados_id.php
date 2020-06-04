<?php
    header('Content-Type: Application/json');
    require_once('../config/config.php');

    $id = $_GET['id'];

    $params = array($id);

    // $dados = $config->prepare("SELECT * FROM marketplace.produtos Where id_produto = ?");

    $dados = $config->prepare("SELECT * FROM marketplace.produtos JOIN marketplace.categoria ON marketplace.produtos.categoria = marketplace.categoria.id_categoria Where marketplace.produtos.id_produto = ?");

    $dados->execute($params);
    $result = $dados->fetchAll();
    $config = null;

    // print_r($result);
    echo json_encode($result);
?>