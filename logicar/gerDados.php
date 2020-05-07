<?php
    header('Content-Type: Application/json');
    require_once('../config/config.php');


    $dados = $config->prepare("SELECT * FROM marketplace.produtos");
    $dados->execute();
    $result = $dados->fetchAll();
    $config = null;

    // print_r($result);
    echo json_encode($result);
?>