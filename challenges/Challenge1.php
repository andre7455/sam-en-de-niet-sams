<?php
 include "includes/header.php";
?>

<p>Sam is cool!</p>

<button onclick="stapVooruit()" type="button" name="button1" id="button1" class="btn btn-success">Correct</button>
<button onclick="generatePunishment()" type="button" name="button2" id="button2" class="btn btn-danger">Incorrect</button>

<p id="text"></p>

<script>
    function stapVooruit(){
        document.getElementById("text").innerHTML = "Stap vooruit!";
        document.getElementById("button1").style.display = "none";
        document.getElementById("button2").style.display = "none";
    }
</script>

<?php
 include "includes/footer.php";
?>