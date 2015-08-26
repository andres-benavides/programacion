var app = angular.module("formulario", []);

app.controller("formController", function ($scope, $http) {
  var frmCtr = this;
  frmCtr.fDatos = {action: 'guardar'};
  frmCtr.enviar = function () {
    $http.post("index.php", frmCtr.fDatos)
            .success(function (data) {
              console.log(data);
            });
  };
});

app.controller("registros", function ($scope, $http) {
  var consulta = this;
  consulta.fDatos = {action: 'consultar'};
  $scope.registrosJson = [];
  $http.post("index.php", consulta.fDatos)
          .success(function (data) {
            $scope.registrosJson = data;
            console.log(data);
          });

});