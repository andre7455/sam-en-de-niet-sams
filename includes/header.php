<html>
<!-- this is HTML code, this is used to tell the web browser what to do. this is called "static code".
what i mean by that is that this code is not interactive with the user.
for more information read learning/sources w3schools and search for HTML  -->
<head>
	<title>QRandom Phantom</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<script>
function generatePunishment() {
  // Genereer een nummer tussen 0 en 100.000
  var randomNumber = Math.floor(Math.random() * 100000);
  
  // als het nummer 0 is dan win je
  if (randomNumber === 0) {
    alert("You win!");
  }
  // als je niet wint krijg je straf
  else {
    // genereer een nummer als straf
    var steps = Math.floor(Math.random() * 5) + 1;
    
    alert("Punishment: Take " + steps + " steps back.");
  }
}

function generateReward() {
    // Genereer een nummer tussen 0 en 100.000
    var randomNumber = Math.floor(Math.random() * 100000);

    // als het nummer 0 is dan verlies je
    if (randomNumber === 0) {
        alert("You lose!");
    }
    // als je niet verliest krijg je je beloning
    else {
        // genereer een nummer als beloning
        var steps = Math.floor(Math.random() * 4);

        alert("Reward: Take " + steps + " steps forward!");
    }
}

</script>
<style>
	body{background-color: coral;}
</style>

<body>