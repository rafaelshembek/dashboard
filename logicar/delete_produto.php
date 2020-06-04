<?php
    header('Content-Type: Applicativo/json');
    require_once('../config/config.php');


    $data = json_decode(file_get_contents('php://input'), true);
    print_r($data);

    $sql = "DELETE FROM marketplace.produtos WHERE id_produto = $data";

    $getDados = $config->prepare($sql);
    $getDados->execute();
    $config = null;

?>