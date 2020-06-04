main.controller('relatoriosCtrl', function($scope, sendFactoryProduct, getFieldsInput){

    var tags = [];
    // buscar todo os produtos da base de dados
    const get_produtos_show_interface = sendFactoryProduct.getProdutos('api/getter_dados.php', 'GET');

    get_produtos_show_interface.then((success) => {
        $scope.card = success.data;
        $scope.total_produtos = success.data.length;
    }, (error) => {
        console.log(`Error => ${error}`);
    });

    // buscar todas as categorias
    const get_All_Categorias = sendFactoryProduct.getProdutos('api/getter_categoria.php', 'GET');

    get_All_Categorias.then((success) => {
        
        Tags(success.data);
        
        $scope.tag = tags;
    }, (error) => {
        console.log(`Error => ${error}`);
    });


    $scope.Tagsclear = () => {
        $scope.searchProdutos = "";
    }
    $scope.TagsClick = (e) => {
        // console.log(e.tags.categoria);
        $scope.searchProdutos = e.tags.categoria;
    }
    // função para editar os produto passando o id pelo params
    $scope.Edit = (params) => {
        
        // Abri o modal para atualizar os dados do produtos 
        $('.ui.tiny.modal').modal({
            detachable: false,
            inverted: true,
            centered: true
          }).modal('show');
        // obter os dados do produtos passando o { id } do produto
        const get_info_dados = sendFactoryProduct.getProdutos('logicar/get_dados_id.php?id='+params, 'GET');
        
        get_info_dados.then((success) => {
            $scope.edit = success.data[0];
        },(error) => {
            console.log(`Error => ${error}`);
        });
    }

    // função para excluir o produto passado id pelo params
    $scope.delet = (value) => {
       
          if(window.confirm(`Você realmente deseja excluir o produto da base de dado ?`)){
              const produtoDelete = sendFactoryProduct.atualizarProdutoPost('logicar/delete_produto.php', value, 'POST');
              
          }
    }
    $scope.sendProduct = () => {
        const fieldIdProduto = $('#id_produto').val();
        const fieldProduto = $('#produto').val();
        // const filedCategoria = $('#categoria').val();
        const fieldPreco = $('#preco').val();
        const dados = getFieldsInput.get( fieldIdProduto, fieldProduto, fieldPreco);
        


        const get_dadoas = sendFactoryProduct.atualizarProdutoPost('logicar/post_atualizar_produtos.php', dados, 'POST');

    }

    var Tags = (data) =>{
        data.forEach( (value) => {
            tags.push(
                {categoria: value['nome_categoria']}
            );
        })
    }

});