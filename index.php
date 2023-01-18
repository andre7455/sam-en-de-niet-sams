<?php
	include "includes/header.php";
?>

<!-- this is where the php code starts.
Here we first define a random number
$ is used to declare a variable and because php is a soft language we do not have to define what type of data is put in the variable

The include is used to import a other page.
-->
<?php
	$kaaskrokettenfeestvoorsamniehau = $_GET["kaaskrokettenfeestvoorsamniehau"];
	//a bit of code to make it posible to get a specific challenge for development
	//echo '<h1>' . $kaaskrokettenfeestvoorsamniehau . '</h1>';
	if($kaaskrokettenfeestvoorsamniehau > 0){
		$chosenChallenge = "challenges" . "/Challenge" .  $_GET["kaaskrokettenfeestvoorsamniehau"] .".php";
	} else{
		//initializing a filepath into a variable and generating a random int to pick a random challenge, after that getting the page.
		//
		//rand(1, count(glob("challenges/" . "*")))
		//the rand operator generates a random number where 1 is the lowest and count(glob("challenges/" . "*")) returns the amount of files
		//in the challenges directory, that way no matter how many files are in the directory there is one chosen out of all of them
		$chosenChallenge = "challenges" . "/Challenge" . rand(1, count(glob("challenges/" . "*"))) .".php";
	}
	include $chosenChallenge;
	include "includes/footer.php";
?>
<!-- here we close out the html so that the browser knows not to expect more code-->
