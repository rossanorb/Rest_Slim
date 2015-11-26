var app = angular.module("MyApp", []);

app.controller("PostsCtrl", function($scope, $http) {  
  $http.get('http://slim/api/users').
    success(function(data, status, headers, config) {
      $scope.posts = data.users;
    });
});