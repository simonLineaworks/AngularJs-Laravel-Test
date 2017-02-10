<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My App</title>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
    
    <script src="https://use.fontawesome.com/afe31d0fe2.js"></script>
        
        

        <!-- Styles -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .col-xs-4{
                padding:10px;
            }

        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="title container">My Angular Site</div>

            <div class="myAjax links container" id="myAjax" ng-app="myApp" style="padding: 20px;">
                <a href="#/">HOME</a>
                <a href="#1">TAB 1</a>
                <a href="#3">GALLERY</a>
                <a href="#2">ABOUT</a>
                            
                <div ng-view  style=" margin: auto;"></div>
                                    
            </div>

            <script>
                var app = angular.module("myApp",["ngRoute"]);
                app.config (function ($routeProvider){
                    $routeProvider
                        .when("/",{templateUrl : 'article1.html'})
                        .when("/1",{templateUrl : 'article2.html'})
                        .when("/2",{templateUrl : 'about.html'})
                        .when("/3",{templateUrl : 'gallery.html'}) ;   
                });
            </script>   
        </div> 
    </body>
</html>
