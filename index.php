<!DOCTYPE html>
<html lang="pt-BR" ng-app="inicioApp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="semantic/semantic.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $login = true;
        if(!$login)
        {
            require_once('login.php');
            return exit;
        }
            require_once('painel.php');
    ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/angular/angular.min.js"></script>
    <script src="node_modules/angular-route/angular-route.min.js"></script>
    <!-- <script src="node_modules/socket.io/lib/client.js"></script> -->
    <script src="node_modules/angular-file-upload/dist/angular-file-upload.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main-angular.js"></script>
    <script src="assets/js/angular_routes.js"></script>
    <script src="lib/currency.min.js"></script>
    <script src="jquery-code-scanner-master/jquery-code-scanner.js"></script>
    <script src="semantic/semantic.min.js"></script>
    <script src="node_modules/socket.io-client/dist/socket.io.js"></script>
    <script src="assets/logicar/side-server-socket.js"></script>
    <script src="assets/logicar/categorias_produtos.js"></script>
    <script src="assets/logicar/relatorios_ctrl.js"></script>
    <script src="assets/logicar/logicar_edit.js"></script>
    <script src="assets/logicar/sendProductFactory.js"></script>
    <script src="assets/logicar/factory_field.js"></script>
    <script src="assets/logicar/client-socket.js"></script>

</body>
</html>