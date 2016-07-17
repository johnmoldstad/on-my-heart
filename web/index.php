<!DOCTYPE html>
<html lang="en-us" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/header.css" />
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-resource.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-sanitize.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-messages.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.0-beta.1/angular-ui-router.min.js"></script>
		<script src="application.js"></script>
		<script src="master.js"></script>
	</head>

	<body data-ng-app="application">
		<header ui-view="header"></header>
		<main ui-view="main"></main>
		<footer ui-view="footer"></footer>
	</body>
</html>