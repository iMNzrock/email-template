<!DOCTYPE html>
<html lang="en-US" ng-app="emailTemplateApp" ng-controller="emailTemplateController">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email template generator</title>

    <style type="text/css">
        .container {
            width: 1400px;
            padding-bottom: 50px;
            margin: 0 auto;
        }

        .col-left {
            float: left;
            width: 50%;
        }

        .col-left input[type=text] {
            width: 300px;
            height: 30px;
        }

        .col-right {
            float: right;
            width: 50%;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }

        .clear {
            clear: both;
        }

        .template-code {
            border: 1px solid #000;
            padding: 50px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="starter-template">
            <h1>Email template generator</h1>
        </div>
        <div class="col-left">
            <p>Background Color : #<input type="text" ng-model="email_bg"></p>
            <p ng-init="email_lang = 'Cet courriel a été envoyé via le formulaire de contact de'">
                Email Lang :
                <label>EN <input type="radio" name="emaillang" value="This e-mail was sent from a contact form" ng-model="email_lang"></label>
                <label>FR <input type="radio" name="emaillang" value="Cet courriel a été envoyé via le formulaire de contact de" ng-model="email_lang"></label>
            </p>
            <hr>
            <p>Website name : <input type="text" ng-model="site_name"></p>
            <p>Website URL : <input type="text" ng-model="site_url"></p>
            <p>Logo URL : <input type="text" ng-model="logo_url"></p>
            <p>Title : <input type="text" ng-model="main_title"></p>
            <hr>
            <div ng-repeat="item in inputs">
                <p>Input name : <input type="text" ng-model="item.input_name"></p>
                <p>Input value : <input type="text" ng-model="item.input_value"></p>
                <p ng-init="item.input_type = 'text'">
                    Type :
                    <label>Text <input type="radio" name="type-{{$index}}" value="text" ng-model="item.input_type" checked="checked"></label>
                    <label>Textarea <input type="radio" name="type-{{$index}}" value="textarea" ng-model="item.input_type"></label>
                </p>
                <p>
                    <button ng-click="delfield(item)">Del field</button>
                </p>
                <hr>
            </div>
            <button ng-click="addfield()">Add field</button>
        </div>
        <div class="col-right show-case">
            <?php include('template.php') ?>
        </div>
        <div class="clear"></div>
        <p><button onclick="getTemplate()">Get Template</button></p>
        <div id="selectable" class="template-code" onclick="selectText('selectable')">
            <?php
                // ob_start();
                // include('template.php');
                // $template = ob_get_clean();
                // echo "<pre>";
                // echo htmlspecialchars($template);
                // echo "</pre>";
            ?>
        </div>
    </div><!-- /.container -->

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script type="text/javascript">
        var app = angular.module('emailTemplateApp', []);
        app.controller('emailTemplateController',function($scope){
            $scope.inputs = [];

            $scope.addfield=function(){
                $scope.inputs.push({})
            }

            $scope.deldelete = function (item) {
                $scope.items.splice($scope.items.indexOf(item), 1);
            }
        })
    </script>
    <script type="text/javascript">
        function selectText(containerid) {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(document.getElementById(containerid));
                range.select();
            } else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(document.getElementById(containerid));
                window.getSelection().addRange(range);
            }
        }

        function strip(html) {
            var map = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };

  return html.replace(/[&<>"']/g, function(m) { return map[m]; });
        }

        function getTemplate() {
            var templateHTML = document.getElementsByClassName("show-case");
            var templateCode = strip(templateHTML[0]['innerHTML']);
            document.getElementById("selectable").innerHTML = templateCode;
        }
    </script>
</body>
</html>