<?php

$min = 1;
$max = 10;
$secretNumber = rand($min, $max);
$remainingGuesses = 5;

echo "<p>I'm thinking of a number between $min and $max. Can you guess what it is?</p></br>";
echo '<p id="remainingGuesses">you have ' . $remainingGuesses . ' remaining guesses</p>';
?>
<button class="btn psize btn-primary"onclick="generateNumber()">Click me</button>
<input id="textField"></input>
<script>
var secretNumber = <?php echo $secretNumber; ?>;
var remainingGuesses = <?php echo $remainingGuesses; ?>;

function generateNumber() {
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
    alert("Gordon Ramsey ones famously said:\r" + "You're a bloody disaster in the kitchen! Can't even guess a simple number between 1 and 10? The right number was bloody " + secretNumber + "! Get out of my kitchen before you burn the place down!\r" + "Source: Sam Nihao");
    generatePunishment();
    redirect();
  }
}
</script>
<?php