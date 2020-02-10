# proj
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
