<?php
if (isset($_POST['answer'])) {
  $answer = $_POST['answer'];

  if ($answer == 'Yes') {
    echo 'Great! Chocolate is delicious.';
  } else if ($answer == 'No') {
    echo "That's okay. Not everyone likes chocolate.";
  }
}
?>