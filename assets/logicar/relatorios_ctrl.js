main.controller('relatoriosCtrl', function($scope, $http){
    $http({
        url: 'api/getter_dados.php',
        method: 'GET'
    }).then((success) => {
        $scope.card = success.data;
        // console.log(success.data);
        $scope.total_produtos = success.data.length;
    }, (error) => {
        console.log(`Error => ${error}`);
    });
});