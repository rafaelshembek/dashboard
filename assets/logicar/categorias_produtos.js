main.controller('sendProdutos', function($scope, $http, sendFactoryProduct){

    const categorias = sendFactoryProduct.getProdutos('logicar/getCategoria.php', 'GET');
    
    categorias.then( (result) => {
        // console.log(result.data);
        $scope.Categoria = result.data;
    }, (error) => {
        console.log(`Error => ${error}`);
    } )

})