<!-- <h1 class="text-white">Pagina de relatorios</h1> -->
<?php

    require_once('../teste.php');

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="ui violet message m-3">
                <div class="ui fluid icon input">
                    <input type="text" placeholder="Pesquisar produto...">
                    <i class="search icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <div class="ui violet message header font-weight-normal">
                   Total de produtos {{total_produtos}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 m-3">
            <table class="ui inverted violet unstackable table">
                <thead>
                    <tr>
                        <th>Produtos</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="cards in card">
                    <td>
                        <h4 class="ui image header">
                            <img class="ui mini rounded image" src="imgs/{{cards.image_produto}}">
                            <div class="content text-white">
                                    {{cards.nome_produto}}
                                <div class="sub header text-white">
                                    {{cards.descricao_produto}}
                                </div>
                            </div>
                        </h4>
                    </td>
                    <td>
                        {{cards.categoria}}
                    </td>
                    <td>
                        <div class="meta">
                            <span>R${{cards.preco_produto}}</span>
                        </div>
                    </td>
                    <td>
                        <div class="extra">
                            <div class="ui right floated buttons">
                                <button class="ui orange icon button"><i class="pencil alternate icon"></i></button>
                                <button class="ui red circular icon button"><i class="trash alternate icon"></i></button>
                            </div>
                        </div>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>