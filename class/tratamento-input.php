<?php
class TratarInput{


    static function Input($name){
        if($name == ""){
            echo "Por favor verificar se os campos estão todos preenchido";
            header('location: ../#!/cadastros');
            exit();
        }else{
            $resultado = $name;
        }
        return $resultado;
    }

}
?>