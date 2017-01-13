<!DOCTYPE html>  
<html lang="en">  
<head>
    <title>My Blog</title>
    <!--Bootstrap-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!--AngularJS-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-resource.min.js"></script>  
    <script src="js/app.js"></script>
    <!--Loading style-->
    <style>
        /* Center the loader */
        #loader {
          position: absolute;
          left: 50%;
          top: 100%;
          z-index: 1;
          width: 100px;
          height: 100px;
          margin: -75px 0 0 -75px;
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3498db;
          animation: spin 2s linear infinite;
        }
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body ng-app="postApp">  
    <div class="col-md-6 col-md-offset-3" ng-controller="postController" ng-init="getPosts()">
        <h2>Posts</h2>
        <!--Loading-->
        <div id="loader" ng-show="loading"></div>
        <!--Post list-->
        <div class="list-group" >  
            <a class="list-group-item" ng-repeat="post in posts" >
            <h4 class="list-group-item-heading">[[ post.title ]]</h4>
            <p class="list-group-item-text">[[ post.content ]]</p>
            </a>
        </div>
        <!--pagination-->
        <div>
            <posts-pagination></posts-pagination>
        </div>
    </div>  
</body>
</html>