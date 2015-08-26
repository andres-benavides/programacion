var app = angular.module("formulario", []);

app.controller("formController", function ($scope, $http) {
  var consulta = this;
  $scope.fRegistros = {action: 'consultar'};
  $scope.registrosJson = [];
  $http.post("index.php", $scope.fRegistros)
          .success(function (data) {
            $scope.registrosJson = eval(data);
            console.log(data);
          });
  var frmCtr = this;
  frmCtr.fDatos = {action: 'guardar'};
  frmCtr.enviar = function () {
    $http.post("index.php", frmCtr.fDatos)
            .success(function (data) {
              $scope.registrosJson = eval(data);
              console.log(data);
            });
    frmCtr.fDatos = {};
  };

});

