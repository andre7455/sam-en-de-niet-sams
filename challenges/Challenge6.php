<?php
 include "includes/header.php";
?>
<body>
  <div id="challenge" style="color: white; background-color: green;">klik!</div>
  <button id="button" onclick="onButtonClick()">click me</button>
  <script>
    let failTimeout;
    function onButtonClick() {
      clearTimeout(failTimeout);
      document.getElementById("challenge").innerHTML = "sample text";
    }
    failTimeout = setTimeout(function() {
      document.getElementById("challenge").style.backgroundColor = "red";
      document.getElementById("challenge").innerHTML = "fail";
      generatePunishment()
    }, 500);
  </script>
</body>
<?php
 include "includes/footer.php";
?>