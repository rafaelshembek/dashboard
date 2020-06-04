<?php
    header('Content-Type: Application/json');
    require_once('../config/config.php');


    $dados = $config->prepare("SELECT * FROM marketplace.categoria");
    $dados->execute();
    $result = $dados->fetchAll();
    $config = null;

    
    echo json_encode($result, JSON_PRETTY_PRINT);
    
?>