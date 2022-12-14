<?php
include "includes/header.php";
?>

<p>Do you like chocolate?</p>
  <form action="voorbeeldJaNeeComplexController.php" method="post">
    <input type="submit" name="answer" value="Yes" />
    <input type="submit" name="answer" value="No" />
  </form>
</p>

<?php
//The form has two submit buttons, one for "Yes" and one for "No". 
//When the user clicks one of the buttons, the form is submitted to the voorbeeldJaNeeComplexController.php file using the POST method. 
//The values of the buttons are sent to the server in the answer parameter, so the server can determine which button the user clicked.

include "includes/footer.php";
?>