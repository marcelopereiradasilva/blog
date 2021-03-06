app = new angular.module('app',['ngRoute']);

app.config(['$routeProvider',function($routeProvider){
    $routeProvider.
    when('/',{controller:'mainController',
        templateUrl:'templates/main.html'}).
    when('/usuarios',{controller:'userController',
        templateUrl:'templates/user.html'}).
    when('/comentarios',{controller:'commentController',
        templateUrl:'templates/comment.html'}).
    when('/tags',{controller:'tagController',
        templateUrl:'templates/tag.html'}).
    when('/login',{controller:'loginController',
        templateUrl:'templates/login.html'}).
    otherwise({redirectTo:'/'});
}]);

app.controller('mainController',function ($scope) {
    $scope.userName="daniel";
});