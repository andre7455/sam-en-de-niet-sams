<?php

?>
<html>
<!-- this is HTML code, this is used to tell the web browser what to do. this is called "static code".
what i mean by that is that this code is not interactive with the user.
for more information read learning/sources w3schools and search for HTML  -->
<head>
	<title>Sam's board</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<!-- this is where the php code starts.
Here we first difine a random number
$ is used to declare a variable and because php is a soft language we do not have to define what type of data is put in the variable

The include is used to import a other page.
-->
<?php
	//initializing a filepath into a variable and generating a random int to pick a random challenge, after that getting the page.
	//
	//rand(1, count(glob("challenges/" . "*")))
	//the rand operator generates a random number where 1 is the lowest and count(glob("challenges/" . "*")) returns the amount of files
	//in the challenges directory, that way no matter how many files are in the directory there is one chosen out of all of them
	$chosenChallenge = "challenges" . "/Challenge" . rand(1, count(glob("challenges/" . "*"))) .".php";
    include $chosenChallenge;
?>
<!-- here we close out the html so that the browser knows not to expect more-->
</body>
</html>
