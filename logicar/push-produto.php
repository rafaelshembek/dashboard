<?php
    header('Content-Type: text/html');
    require_once('../config/config.php');
    require_once('../class/cl_tratamento_produtos.php');
    require_once('../class/tratamento-input.php');
    require_once('./getter_id_maximo.php');
    require_once('../teste.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // criar o caminho para a imagens do produtos
        CreatePath::Path('../imgs/');
        // nome do produto
        $produtos = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
        // descrição do produto
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        // codigo de barra do produto
        $codigBarra = filter_input(INPUT_POST, 'codigodebarra', FILTER_SANITIZE_STRING);
        // categoria do produto
        $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
        // preço do produto
        $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
        // image do produto
        $file = $_FILES['file'];
        
        $nomeProdutop = TratarInput::Input($produtos);
        $descricaoProduto = TratarInput::Input($descricao);
        $categoriaProduto = TratarInput::Input($categoria);
        $codigoBarraProduto = TratarInput::Input($codigBarra);
        $new_preco = TratarInput::Input($preco);

        $p = new Produtos();
        $p->Image($file, 'name');
        $p->MoverImage($file['tmp_name'], '../imgs/', $file['name']);
        $img = $p->getFiles();
        

        $id = ProximoId::Get_Id_Proximo($config);

        $params = array($id, $nomeProdutop, $descricaoProduto, $categoriaProduto, $codigoBarraProduto, $new_preco, $img);
        
        echo '<pre>';
        print_r($params);
        echo '</pre>';

        $getDados = $config->prepare("INSERT INTO marketplace.produtos VALUES( ?, ?, ?, ?, ?, ?, ? )");
        $getDados->execute($params);
        $config = null;

        header('location: ../#!/cadastros');

    }else{
        echo 'sem dados';
    }

?>