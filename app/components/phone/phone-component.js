(function() {
  angular
  .module('InovaApp')
  .component('phone',{
    templateUrl: 'app/components/phone/contatos.html',
    controller: Controller
  });
  Controller.$inject = [
    '$scope',
    '$mdBottomSheet'
  ]

  function Controller($scope, $mdBottomSheet) {
    var self = this
    self.showGridBottomSheet = function() {
    self.alert = '';
    $mdBottomSheet.show({
      templateUrl: 'app/components/phone/phone-template.html',
      controller: self.controller,
      clickOutsideToClose: true
    }).then(function(clickedItem) {
      $mdToast.show(
            $mdToast.simple()
              .textContent(clickedItem['name'] + ' clicked!')
              .position('top right')
              .hideDelay(1500)
          );
    }).catch(function(error) {
      // User clicked outside or hit escape
    });
  };
  }
}());
