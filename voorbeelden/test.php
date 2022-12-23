<?php
include "includes/header.php";
?>
<button id="bouncing-button">
  <img src="dvd-logo.png" alt="DVD logo">
</button>

<style>
  button#bouncing-button {
    background: none;
    border: none;
    cursor: pointer;
  }
  button#bouncing-button img {
    width: 50px;
    height: 50px;
  }
</style>

<script>
  const button = document.getElementById('bouncing-button');
  let top = 0;
  setInterval(function() {
    button.style.top = top + 'px';
    top = (top + 1) % 50;
  }, 10);
</script>
<?php
include "includes/footer.php"
?>
