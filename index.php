<?php

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
        
        <h1>Cadastro</h1>

        <hr />

        <div class="container" ng-app="aplicativo" ng-controller="usercontroller">
            <div class="row">
                <div class="col col-6">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" name="_nome" ng-model="nome" />
                </div>
            </div>
            <div class="row">
                <div class="col col-6">
                    <label for="sobrenome">Sobrenome: </label>
                    <input type="text" class="form-control" name="_sobrenome" ng-model="sobrenome" />
                </div>
            </div>
            <div class="row">
                <div class="col col-6">
                    <br />
                    <button class="btn btn-outline-primary btn-sm btn-block" ng-click="inserirDados()">
                        Enviar
                    </button>
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
    </body>
</html>

<script>
    var app = angular.module("aplicativo", []);
    app.controller("usercontroller", function($scope, $http){
        $scope.inserirDados = function(){
            $http.post("http://localhost:8000/Treinamento%20PHP-Angularjs/insert.php", { 'nome' : $scope.nome, 'sobrenome' : $scope.sobrenome } ).
            then(function (success){
                alert('Dados enviados com sucesso! Nome: ' + $scope.nome + '. Sobrenome: ' + $scope.sobrenome);
                $scope.nome = null;
                $scope.sobrenome = null;
            },
            function (error){
                alert('Falha ao enviar o formulário!');
            });
        }
    });
</script>