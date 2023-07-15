<?php

define('BD_HOST', "localhost");
define('BD_NAME', "marketplace");
define('BD_USER', "username");
define('BD_PASSWORD', "passworld");



try {
    $config = new PDO('mysql:dbname ='.BD_NAME.';host='.BD_HOST, BD_USER,  BD_PASSWORD);
    // echo 'conexão com banco de dado foi feita com sucesso';
    // echo '<hr>';
} catch (\Throwable $th) {
    //throw $th;
    echo 'error '.$th->getMessage();
}

?>
