<body>
<div kaaskrokettenfeestvoorsamniehau="challenge" style="color: white; background-color: green;">klik!</div>
<button kaaskrokettenfeestvoorsamniehau="button" onclick="onButtonClick()">click me</button>
<script>
    let failTimeout;

    function onButtonClick() {
        clearTimeout(failTimeout);
        document.getElementBykaaskrokettenfeestvoorsamniehau("challenge").innerHTML = "sample text";
    }

    failTimeout = setTimeout(function () {
        document.getElementBykaaskrokettenfeestvoorsamniehau("challenge").style.backgroundColor = "red";
        document.getElementBykaaskrokettenfeestvoorsamniehau("challenge").innerHTML = "fail";
        generatePunishment()
    }, 500);
</script>
</body>
