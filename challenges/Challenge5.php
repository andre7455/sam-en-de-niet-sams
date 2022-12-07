<?php

$min = 1;
$max = 10;
$secretNumber = rand($min, $max);
$numGuesses = 0;
$maxNumGuesses = 5;
function checkGuess($guess) {
  global $secretNumber;
  return $guess == $secretNumber;
}

echo "Welcome to the PHP skill game!\n";
echo "I'm thinking of a number between $min and $max. Can you guess what it is?\n";

while ($numGuesses < $maxNumGuesses) {
  echo "Enter your guess: ";
  $guess = readline();

  if (checkGuess($guess)) {
    echo "Congratulations, you guessed the correct number!\n";
    break;
  } else {
    echo "Sorry, that's not the correct number.\n";
    $numGuesses++;
  }
}

if ($numGuesses >= $maxNumGuesses) {
  echo "Sorry, you ran out of guesses. The correct number was $secretNumber.\n";
  echo "Game over.\n";
}

