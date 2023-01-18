<?php

$min = 1;
$max = 10;
$secretNumber = rand($min, $max);
$remainingGuesses = 5;

echo "<p>I'm thinking of a number between $min and $max. Can you guess what it is?</p></br>";
echo '<p id="remainingGuesses">you have ' . $remainingGuesses . ' remaining guesses</p>';
?>
<button onclick="test()">Click me</button>
<input id="textField"></input>
<script>
var secretNumber = <?php echo $secretNumber; ?>;
var remainingGuesses = <?php echo $remainingGuesses; ?>;

function test() {
  var userGuess = document.getElementById("textField").value;
  if (userGuess == secretNumber) {
    alert("Congratulations, you guessed the correct number!");
  } else if (userGuess > secretNumber) {
    alert("Too high! Guess again.");
    remainingGuesses--;
  } else if (userGuess < secretNumber) {
    alert("Too low! Guess again.");
    remainingGuesses--;
  }
  document.getElementById("remainingGuesses").innerHTML = "you have " + remainingGuesses + " remaining guesses";
  if (remainingGuesses == 0) {
    alert("You have run out of guesses. The correct number was " + secretNumber + ".");
  }
}
</script>
<?php