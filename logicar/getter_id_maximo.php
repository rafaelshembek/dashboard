<?php

class ProximoId{
    static function Get_Id_Proximo($config){

        $get_dados = $config->prepare('SELECT MAX(id_produto) as id_max FROM marketplace.produtos');
        $get_dados->execute();
        $get_result = $get_dados->fetch(PDO::FETCH_ASSOC)['id_max'];
        $config = null;
    
        $proximo_id = $get_result;
    
        if($proximo_id == null){
            $proximo_id = 0;
        }else{
            $proximo_id++;
        }
        return $proximo_id;
    }
}

?>