<div class="container" ng-controller="usercontroller" ng-init="mostrarDados()" >

    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <div ng-show="alertaSucesso" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Cadastrado com sucesso!</strong> Verifique na lista os demais cadastrados ao sistema.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    
            <h1 align="center">Cadastro</h1>
    
            <hr />
    
            <input type="hidden" ng-model="id">
    
        </div>
    </div>
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <label for="nome">Nome: </label>
            <input type="text" class="form-control" name="_nome" id="_nome" ng-model="nome" placeholder="Digite um nome" autofocus/>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <label for="sobrenome">Sobrenome: </label>
            <input type="text" class="form-control" name="_sobrenome" ng-model="sobrenome"  placeholder="Digite um sobrenome"/>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <br />
            <button class="btn btn-outline-primary btn-sm btn-block" ng-click="inserirDados()" id="btn-acao">
                {{acaoBotao}}
            </button>

        </div>
    </div>
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xl-6">

            <hr />

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="table-default">
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th style="text-align: center;">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="lista-nomes">
                        <tr ng-repeat="x in nomes">
                            <td>
                                {{x.nome}}
                            </td>
                            <td>
                                {{x.sobrenome}}
                            </td>
                            <td align="center">
                                <button class="btn btn-outline-info btn-sm" ng-click="atualizarDados(x.id, x.nome, x.sobrenome)">
                                    Atualizar
                                </button>
                                <button class="btn btn-danger btn-sm" ng-click="apagarDados(x.id)">
                                    Apagar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>