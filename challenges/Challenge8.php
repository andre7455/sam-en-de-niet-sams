<p>Wanneer is google opgericht? </p>

<button onclick="generatePunishment()" type="button" name="button1" id="button1" class="btn btn-primary">1989</button>
<button onclick="stapVooruit()" type="button" name="button2" id="button2" class="btn btn-primary">1998</button>

<p id="text"></p>

<script>
    function stapVooruit() {
        document.getElementById("text").innerHTML = "Stap vooruit!";
        document.getElementById("button1").style.display = "none";
        document.getElementById("button2").style.display = "none";
    }
</script>
