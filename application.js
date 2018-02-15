var app = angular.module("aplicativo", ['ngRoute', 'ngAnimate']);

app.config(function($routeProvider) {
    $routeProvider
    	.when('/', {
    		templateUrl: './home.php',
            controller: 'homecontroller'
        })
        .when('/home', {
    		templateUrl: './home.php',
            controller: 'homecontroller'
    	})
    	.when('/cadastro', {
    		templateUrl: './cadastro.php',
            controller: 'usercontroller'
    	});

});

app.controller('homecontroller', function($scope) {
    $scope.mainClass = 'home';
});

app.controller('usercontroller', function($scope) {
    $scope.mainClass = 'cadastro';
});

app.controller("usercontroller", function($scope, $http){
    $scope.acaoBotao = "Cadastrar";
    $scope.inserirDados = function(){
        if($scope.nome == null)
        {
            alert("O campo nome não pode estar vazio");
        }
        else if($scope.sobrenome == null)
        {
            alert("O campo sobrenome não pode estar vazio");
        }
        else
        {
            $http.post("insert.php", {'nome' : $scope.nome, 'sobrenome' : $scope.sobrenome, 'acaoBotao' : $scope.acaoBotao, 'id' : $scope.id}).
            then(function (success){
                $scope.nome = null;
                $scope.sobrenome = null;
                $scope.acaoBotao = "Cadastrar";
                $scope.mostrarDados();
            },
            function (error){
                alert('Falha ao enviar o formulário!');
            });
        }
    }
    $scope.mostrarDados = function(){
        $http.get("select.php").
        then(function (success){
            $scope.nomes = success.data;
        },
        function failed(error){
            $scope.nomes = "Falha ao carregar";
        });
    }
    $scope.atualizarDados = function(id, nome, sobrenome){
        $scope.id = id;
        $scope.nome = nome;
        $scope.sobrenome = sobrenome;
        $scope.acaoBotao = "Atualizar";
    }
    $scope.apagarDados = function(id){
        if(confirm("Têm certeza que quer apagar este usuário?"))
        {
            $http.post("delete.php", {'id' : id}).
            then(function (success){
                alert("Registro apagado com sucesso!");
                $scope.mostrarDados();
            },
            function failed(error){
                alert("Falha ao apagar o registro desejado!");
            });
        }
        else
        {
            return false;
        }
    }
});