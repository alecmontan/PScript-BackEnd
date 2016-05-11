var categoriaComponentes = angular.module('categoria-componentes', []);

categoriaComponentes.directive('categoriaForm', function () {
  return {
    restrict: 'E',
    templateUrl:'../Life for Art/form.html'
  };
});