main.controller('sendProdutos', function($scope, $http, FileUploader){
    $http({
        url: 'categorias.json',
        method: 'GET'
    }).then( (result) => {
        $scope.Categoria = result.data[0].Categorias;
    }, (error) => {
        console.log(`Error => ${error}`);
    } )
})