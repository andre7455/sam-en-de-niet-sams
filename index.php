<?php
	include "includes/header.php";
?>
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
	include "includes/footer.php";
?>

<button class="btn btn-primary refresh-btn" onclick="redirect()">Refresh mother fucker</button>
<!-- here we close out the html so that the browser knows not to expect more code-->


<style>
    p{
        font-size: 5em;
    }

    .psize{
        font-size: 2em;
    }

    button{
        height: 5%;
        width: 15%;
    }

</style>