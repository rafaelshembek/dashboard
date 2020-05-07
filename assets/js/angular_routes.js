main.config(function($routeProvider, $locationProvider){
    $routeProvider
    .when('/',{
        templateUrl: './views/freed.php'
    })
    .when('/cadastros',{
        templateUrl: './views/cadastros.php',
        controller: 'sendProdutos'
    })
    .when('/relatorios',{
       templateUrl: './views/relatorios.php',
       controller: 'relatoriosCtrl'
    })
    .when('/configuracoes',{
        templateUrl: './views/configuracoes.php'
    })
});