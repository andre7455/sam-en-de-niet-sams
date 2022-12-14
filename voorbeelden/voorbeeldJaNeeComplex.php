<?php
include "includes/header.php";
?>

<p>Do you like chocolate?</p>
  <form action="voorbeelden/voorbeeldJaNeeComplexController.php" method="post">
    <input type="submit" name="answer" value="Yes" />
    <input type="submit" name="answer" value="No" />
  </form>
</p>

<?php
include "includes/footer.php";
?>