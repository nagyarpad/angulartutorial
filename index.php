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
        <div ng-repeat="product in store.products"> <!-- dynamically display product's array element -->
            <h1>{{product.name}}</h1> 
            <h2>{{product.price}}</h2> 
            <p>{{product.description}}</p>
            <!-- 
            * usage of directive - only show element if
            * the value of expression is true
            -->
            <button ng-show="product.canPurchase"> Add to cart</button>
            <hr/>
        </div>
        <script type="text/javascript" src="assets/js/angular.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
    </body>
</html>
