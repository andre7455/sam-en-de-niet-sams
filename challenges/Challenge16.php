<table id="board" style="border-collapse: collapse;">
  <tr style="height: 100px;">
    <td id="cell-0" style="border: 5px solid black; width: 100px;"></td>
    <td id="cell-1" style="border: 5px solid black; width: 100px;"></td>
    <td id="cell-2" style="border: 5px solid black; width: 100px;"></td>
  </tr>
  <tr style="height: 100px;">
    <td id="cell-3" style="border: 5px solid black; width: 100px;"></td>
    <td id="cell-4" style="border: 5px solid black; width: 100px;"></td>
    <td id="cell-5" style="border: 5px solid black; width: 100px;"></td>
  </tr>
  <tr style="height: 100px;">
    <td id="cell-6" style="border: 5px solid black; width: 100px;"></td>
    <td id="cell-7" style="border: 5px solid black; width: 100px;"></td>
    <td id="cell-8" style="border: 5px solid black; width: 100px;"></td>
  </tr>
</table>



<script>
    var board = ['','','','','','','','',''];
var player = 'X';
var computer = 'O';
var winCombinations = [[0, 1, 2], [3, 4, 5], [6, 7, 8], [0, 3, 6], [1, 4, 7], [2, 5, 8], [0, 4, 8], [2, 4, 6]];
var gameEnd = false;

document.getElementById('board').addEventListener('click', function(e) {
  if (!gameEnd && e.target.id.indexOf('cell-') === 0) {
    var cellIndex = e.target.id.split('-')[1];
    if (board[cellIndex] === '') {
      board[cellIndex] = player;
      e.target.innerHTML = player;
      checkWin(player);
      if (!gameEnd) {
        makeComputerMove();
      }
    }
  }
});

function checkWin(player) {
  for (var i = 0; i < winCombinations.length; i++) {
    if (board[winCombinations[i][0]] === player &&
        board[winCombinations[i][1]] === player &&
        board[winCombinations[i][2]] === player) {
      alert('You win!');
      generateReward();
      gameEnd = true;
      return;
    }
  }
  if (!board.includes('')) {
    alert('You lose!');
    generatePunishment();
    gameEnd = true;
  }
}

function makeComputerMove() {
  var emptyCells = [];
  for (var i = 0; i < board.length; i++) {
    if (board[i] === '') {
      emptyCells.push(i);
    }
  }
  var randomIndex = Math.floor(Math.random() * emptyCells.length);
  board[emptyCells[randomIndex]] = computer;
  document.getElementById('cell-' + emptyCells[randomIndex]).innerHTML = computer;
  checkWin(computer);
}
</script>