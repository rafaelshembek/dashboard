
<div class="container">
    <div class="row">
        <div class="col-md-3 d-flex justify-content-start align-content-center flex-wrap flex-column">
        <div class="ui attached stackable secondary menu vertical border-0 bg-white">
            <div class="right menu d-flex justify-content-center align-content-center flex-column">
                <div class="item justify-content-center">
                    <strong class="ui header text-muted text-center">Publicado por: </strong>
                </div>
                <div class="item ui tiny image align-content-center justify-content-center">
                    <img src="assets/img/women.jpg" alt="programadora">
                </div>
                <div class="item d-flex justify-content-center align-content-center flex-column">
                    <span class="m-2 text-center text-primary ui header">Amanda Sousa</span>
                    <span class="ml-2 text-center mr-2 font-weight-light">Programador Front-End & Back-End</span>
                    <span class="mt-2 text-center font-weight-normal text-muted">
                        <?php 
                            echo date('d-m-Y / h:i:s A', time());
                        ?>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-9">
        <div class="card border-0 mt-3">
    <div class="card-body">
    <div class="ui text-muted header">Painel de publicação</div>
        <form action="logicar/push-produto.php" id="formSendProdutos" class="ui form" action="logicar/push-produto.php" method="POST" enctype="multipart/form-data">
                <div class="ui equal width form">
                    <div class="fields">
                        <div class="field">
                            <label for="" class="font-weight-normal"><i class="box icon"></i> Nome do produto</label>
                            <div class="ui icon input">
                                <input type="text" name="produto" ng-model="produto" id="produto" placeholder="Nome do produto">
                                <i class="box icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label class="font-weight-normal"><i class="tags icon"></i> Categoria da Noticia</label>
                            <select name="categoria" id="categoria">
                                <option>Categorias</option>
                                <option ng-repeat="cater in Categoria" value="{{cater.id_categoria}}">{{cater.nome_categoria}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="ui equal width form">
                    <div class="field">
                        <label for="codigodebarra" class="font-weight-normal"><i class="barcode icon"></i> Codigo de Barra</label>
                        <div class="ui icon input">
                            <input type="text" name="codigodebarra" id="codigodebarra" placeholder="00000000000000000000000">
                            <i class="barcode icon"></i>
                        </div>
                    </div>
                </div>
                    <div class="fields">
                        <div class="field">
                            <label for="" class="font-weight-normal"><i class="image outline icon"></i> Imagem da Noticia</label>
                            <div class="ui icon input">
                                <input type="file" name="file">
                                <i class="image outline icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label for="preco" class="font-weight-normal"><i class="dollar sign icon"></i> Preco do produto</label>
                            <div class="ui icon input">
                                <input type="text" name="preco" id="preco" placeholder="Preço do produto R$10000">
                                <i class="dollar sign icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui buttons">
                            <button type="reset" class="ui button">Limpar os campos</button>
                            <div class="or" data-text="ou"></div>
                            <button type="submit" class="ui positive button">Publicar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body text-muted">
            <p>Plataforma criada por Agency Creative</p>
        </div>
        </div>
    </div>
</div>