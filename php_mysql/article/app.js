(function(){
	var app = angular.module('articleLibrary',['articleDirective']);
	app.controller('articleCtrl', function($scope, $http){
		$http.get('getArticles.php').success(function(response) {
			$scope.articles = response;});
		// app.controller('articleCtrl', function($scope){ 
	});
	app.controller('introduceCtrl',function($scope,$http){
		$http.get('getIntroduce.php').success(function(response) {
			$scope.introduce = response;});
	});

})();