<?php
class TratarInput{


    static function Input($name){
        if($name == ""){
            echo "Por favor verificar se os campos estão todos preenchido";
            exit();
        }else{
            $resultado = $name;
        }
        return $resultado;
    }

}
?>