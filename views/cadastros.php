
<div class="card border-0 mt-3">
    <div class="ui orange message">Registre seu produto com o codigo de barra usando o leitor</div>
    <div class="card-body">
        <form action="logicar/push-produto.php" id="formSendProdutos" class="ui form" action="logicar/push-produto.php" method="POST" enctype="multipart/form-data">
            <div class="ui text-muted header">Formulario para cadastra produto</div>
            <div class="fields">
                <div class="field">
                    <label for="" class="font-weight-normal">Nome do produto</label>
                    <input type="text" name="produto" ng-model="nomeProdutos" id="produto" placeholder="Nome do produto">
                </div>
                <div class="field">
                    <label for="" class="font-weight-normal">Descrição do produto</label>
                    <input type="text" name="descricao" ng-model="descriptionProdutos" id="descricao" placeholder="Descrição do produto">
                </div>
                <div class="field">
                        <label class="font-weight-normal">Categoria</label>
                        <select name="categoria" id="categoria">
                            <option>Categorias</option>
                            <option ng-repeat="cater in Categoria" value="{{cater.categoria}}">{{cater.categoria}}</option>
                        </select>
                </div>
            </div>
            <div class="field">
                    <label for="" class="font-weight-normal">Codigo de barra do produto</label>
                    <input type="text" name="codigodebarra" ng-model="codigodebarra" id="codigodebarra" placeholder="Codigo de barra do produto">
                </div>
            <div class="field">
                <label for="" class="font-weight-normal">Image do produto</label>
                <!-- <input type="file" name="imageProduto" ng-model="imgProdutos" id="imageProduto"> -->
                <input type="file" name="file">
            </div>
            <div class="field">
                <div class="field">
                    <label for="" class="font-weight-normal">Preço  do produto</label>
                    <input type="text" min="0"  step="any" ng-model="precoProdutos" name="preco" id="precoProduto" placeholder="Preço do produto">
                </div>
            </div>
            <div class="field">
                <div class="ui buttons">
                    <button type="reset" class="ui button">Limpar os campos</button>
                    <div class="or" data-text="ou"></div>
                    <button type="submit" class="ui positive button">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card-body text-muted">
    <p>Plataforma criada por Agency Creative</p>
</div>