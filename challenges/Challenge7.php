<?php
include "includes/header.php";
?>

    <p>Wanneer is de eerste elektrische computer uitgevonden?</p>

    <button onclick="stapVooruit()" type="button" name="button1" id="button1" class="btn">1943</button>
    <button onclick="generatePunishment()" type="button" name="button2" id="button2" class="btn">1978</button>

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