(function(){
	var app = angular.module('articleDirective',[]);
	app.directive("articleTabs", function() {
      return {
        restrict: 'E',
        templateUrl: "article-tabs.html",
        controller: function() {
          this.tab = 1;

          this.isSet = function(checkTab) {
            return this.tab === checkTab;
          };

          this.setTab = function(activeTab) {
            this.tab = activeTab;
          };
        },
        controllerAs: "tab"
      };
    });
	app.directive("articleList", function() {
      return {
        restrict: 'E',
        templateUrl: "article-list.html"
      };
    });
    app.directive("articleAbout", function() {
      return {
        restrict: 'E',
        templateUrl: "article-About.html"
      };
    });
    app.directive("articleContact", function() {
      return {
        restrict: 'E',
        templateUrl: "article-contact.html"
      };
    });
})();