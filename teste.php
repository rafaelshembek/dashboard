<?php
    // caminho das imagens dos produtos
class CreatePath{

    static function Path($path){
        if(!file_exists($path)){
            mkdir($path);
            echo '<p>não existe foi criado</p>';
        }else{
            echo '<p>A pasta já existe</p>';
        }
    }
}
?>