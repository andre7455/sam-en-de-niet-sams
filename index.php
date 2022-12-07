<?php

?>
<html>
<!-- this is HTML code, this is used to tell the web browser what to do. this is called "static code".
what i mean by that is that this code is not interactive with the user.
for more information read learning/sources w3schools and search for HTML  -->
<head>
	<title>Sam's board</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<!-- this is where the php code starts.
Here we first define a random number
$ is used to declare a variable and because php is a soft language we do not have to define what type of data is put in the variable

The include is used to import a other page.
-->
<?php
	$id = $_GET["id"];
	//a bit of code to make it posible to get a specific challenge for development
	//echo '<h1>' . $id . '</h1>';
	if($id > 0){
		$chosenChallenge = "challenges" . "/Challenge" .  $_GET["id"] .".php";
	} else{
		//initializing a filepath into a variable and generating a random int to pick a random challenge, after that getting the page.
		//
		//rand(1, count(glob("challenges/" . "*")))
		//the rand operator generates a random number where 1 is the lowest and count(glob("challenges/" . "*")) returns the amount of files
		//in the challenges directory, that way no matter how many files are in the directory there is one chosen out of all of them
		$chosenChallenge = "challenges" . "/Challenge" . rand(1, count(glob("challenges/" . "*"))) .".php";
	}
	include $chosenChallenge;
?>
<!-- here we close out the html so that the browser knows not to expect more code-->
</body>
</html>
