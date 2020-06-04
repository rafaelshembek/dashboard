main.factory('sendFactoryProduct', function($http){
    var sendProduct = {};

    sendProduct.atualizarProdutoPost = (_url, _data, _method) => {
        return $http.post( _url, _data, _method);
    };

    sendProduct.getProdutos = (_url, _method) => {
        return $http.get( _url, _method);
    }

    return sendProduct;

});