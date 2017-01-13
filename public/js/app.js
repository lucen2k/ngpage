var app = angular.module('postApp', ['ngResource'],  
 function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

app.directive('postsPagination', function()
{
   return{
      restrict: 'E',
      template: '<ul class="pagination">'+
        '<li ng-show="currentPage != 1"><a href="javascript:void(0)" ng-click="getPosts(1)">&laquo;</a></li>'+
        '<li ng-show="currentPage != 1"><a href="javascript:void(0)" ng-click="getPosts(currentPage-1)">&lsaquo; Prev</a></li>'+
        '<li ng-repeat="i in range" ng-class="{active : currentPage == i}">'+
            '<a href="javascript:void(0)" ng-click="getPosts(i)">{{i}}</a>'+
        '</li>'+
        '<li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="getPosts(currentPage+1)">Next &rsaquo;</a></li>'+
        '<li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="getPosts(totalPages)">&raquo;</a></li>'+
      '</ul>'
   };
});

app.factory('Post', function($resource){  
  return $resource('post');
});

app.controller('postController', ['$http', '$scope', function($http, $scope)
{
  $scope.posts = [];
  $scope.totalPages = 0;
  $scope.currentPage = 1;
  $scope.range = [];

  $scope.getPosts = function(pageNumber)
  {
    if(pageNumber===undefined){
      pageNumber = '1';
    }
    Post.get({page: pageNumber},function(response)
    {
      $scope.posts        = response.data;
      $scope.totalPages   = response.last_page;
      $scope.currentPage  = response.current_page;

      // Pagination Range
      var pages = [];

      for(var i=1;i<=response.last_page;i++) {          
        pages.push(i);
      }
      $scope.range = pages; 
    });
  };
}]);
