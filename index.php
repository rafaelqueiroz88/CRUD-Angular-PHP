<?php
    //
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link 
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
            crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    </head>
    <body>

        <div class="container" ng-app="aplicativo" ng-controller="usercontroller" ng-init="mostrarDados()">
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
                    <input type="text" class="form-control" name="_nome" ng-model="nome" />

                </div>
            </div>
            <div class="row">
                <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                    <label for="sobrenome">Sobrenome: </label>
                    <input type="text" class="form-control" name="_sobrenome" ng-model="sobrenome" />

                </div>
            </div>
            <div class="row">
                <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                    <br />
                    <button class="btn btn-outline-primary btn-sm btn-block" ng-click="inserirDados()">
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
                            <tbody>
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

        <script 
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
            crossorigin="anonymous"></script>
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
            crossorigin="anonymous"></script>
        <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
            crossorigin="anonymous"></script>
        <script src="application.js"></script>

    </body>
</html>