<?php

$min = 1;
$max = 10;
$secretNumber = rand($min, $max);
$remainingGuesses = 5;

echo "Welcome to the PHP skill game! </br>";
echo "I'm thinking of a number between $min and $max. Can you guess what it is? </br>";
echo '<p id="remainingGuesses">you have ' . $remainingGuesses . ' remaining';
?>
<script src="js/Challenge5_helper.js"></script>
<button onclick="test()">Click me</button>
<input id="textField"></input>

<?php
//TODO: fix deze andre