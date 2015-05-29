<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="store">
    <head>
        <meta charset="UTF-8">
        <title>Angular Tutorial</title>
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />
    </head>
    <body ng-controller="StoreController as store">
        <!-- 
        * use of controller 
        * @syntax: ControllerName alias aliasname
        -->
        <ul class="list-group"> 
            <li class="list-group-item" ng-repeat="product in store.products"><!-- dynamically display product's array element -->
                <h3>
                    {{product.name}}
                    <em class="pull-right">{{product.price| currency}}</em>
                </h3>
                <div class="gallery">
                    <img ng-src="{{product.images[0]}}"/>
                </div>
            </li>
        </ul>
        <script type="text/javascript" src="assets/js/angular.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
    </body>
</html>
