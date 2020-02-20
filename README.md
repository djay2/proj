# proj
https://codepen.io/thelifenadine/pen/rammwv

<div ng-app="fruit">
    <div ng-controller="FruitCtrl">
        
        <input type="checkbox" ng-click="includeColour('Red')"/> Red</br/>
        <input type="checkbox" ng-click="includeColour('Orange')"/> Orange</br/>
        <input type="checkbox" ng-click="includeColour('Yellow')"/> Yellow</br/>
        
        <ul>
            <li ng-repeat="f in fruit | filter:colourFilter">
                {{f.name}}
            </li>
        </ul>

        Filter dump: {{colourIncludes}}
    </div>
</div>

'use strict'

angular.module('fruit', []);

function FruitCtrl($scope) {
    $scope.fruit = [
        {'name': 'Apple', 'colour': 'Red'},
        {'name': 'Orange', 'colour': 'Orange'},
        {'name': 'Banana', 'colour': 'Yellow'}];
    
    $scope.colourIncludes = [];
    
    $scope.includeColour = function(colour) {
        var i = $.inArray(colour, $scope.colourIncludes);
        if (i > -1) {
            $scope.colourIncludes.splice(i, 1);
        } else {
            $scope.colourIncludes.push(colour);
        }
    }
    
    $scope.colourFilter = function(fruit) {
        if ($scope.colourIncludes.length > 0) {
            if ($.inArray(fruit.colour, $scope.colourIncludes) < 0)
                return;
        }
        
        return fruit;
    }
}




Dynamic JavaScript 


<html>
    <head>
        <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="INDIA")
                {
                    var arr=["Maharashtra","Delhi"];
                }
                else if(a==="USA")
                {
                    var arr=["Washington","Texas","New York"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
        </script>
    </head>
    <body>
        <select id="input" onchange="random_function()">
            <option>select option</option>
            <option>INDIA</option>
            <option>USA</option>
        </select>
        <div>
           <select id="output" onchange="random_function1()">
        </div>
    </body>
</html>
