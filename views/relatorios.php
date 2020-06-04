<!-- <h1 class="text-white">Pagina de relatorios</h1> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="ui violet message m-3">
                <div class="ui fluid icon input">
                    <input type="text" ng-model="searchProdutos" placeholder="Pesquisar produto por <nome>, <categora> ou <preço>">
                    <i class="search icon"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!-- buttons categorias -->
    <div class="row">
        <div class="col-md-12">
            <div class="ui attached stackebled secondary menu border-0">
                <button type="button" class="item text-muted" ng-click="Tagsclear()">Todos</button>
                <button type="button" class="item text-muted" ng-repeat="tags in tag" ng-model="buttonsTags" ng-click="TagsClick(this)">{{tags.categoria}}</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 m-3">
            <table class="ui blue unstackable table">
                <thead>
                    <tr>
                        <th>Produtos</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="cards in card | filter:searchProdutos">
                    <td>
                        <h4 class="ui image header">
                            <img class="ui avatar image" src="imgs/{{cards.image_produto}}">
                            <div class="content text-muted font-weight-light">
                                    {{cards.nome_produto}}
                            </div>
                        </h4>
                    </td>
                    <td>
                        {{cards.nome_categoria}}
                    </td>
                    <td>
                        <div class="meta">
                            <span>R${{cards.preco_produto}}</span>
                        </div>
                    </td>
                    <td>
                        <div class="extra">
                            <div class="ui right floated buttons">
                                <button class="ui orange icon button" ng-click="Edit(cards.id_produto)">
                                    <i class="pencil alternate icon"></i>
                                </button>
                                <button ng-click="delet(cards.id_produto)" class="ui red circular icon button">
                                    <i class="trash alternate icon"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- MODAL EDITA PRODUTO HERE !!! -->
<div class="ui tiny modal message" style="height: 60%;">
    <div class="text-title text-muted">
        Alterações dos dados do produtos
    </div>
    <div class="card-body border d-flex justify-content-center align-content-center flex-wrap flex-column">
            <form action="logicar/post_atualizar_produtos.php" class="ui form d-flex justify-content-center align-content-center flex-column flex-wrap" method="post">
            <input type="hidden" id="id_produto" value="{{edit.id_produto}}">
                <div class="description">
                    <div class="fields">
                        <div class="field">
                            <label class="header">Nome do produto</label>
                            <div class="ui input icon">
                                <input type="text" id="produto" value="{{edit.nome_produto}}">
                                <i class="shopping basket icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label class="header">Preço do produto</label>
                            <div class="ui input icon">
                                <input type="text" id="preco" value="{{edit.preco_produto}}">
                                <i class="dollar sign icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <div ng-click="sendProduct()" class="ui positive right labeled icon button">
                        Salvar
                    <i class="checkmark icon"></i>
                    </div>
                </div>
            </form>
                <div class="m-4 d-flex justify-content-center align-content-center flex-column">
                    <p><strong class="text-muted">Power by:</strong> Creative Agency</p>
                    <span><strong class="text-muted">E-mail:</strong> ageenciatech@gmail.com</span>
                </div>
        </div>
</div>