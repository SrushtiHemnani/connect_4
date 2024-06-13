<!-- resources/views/game.blade.php -->

<x-app-layout>
    <style>
        #game-board {
            background: #0074B3;
            width: 730px;
            cursor: pointer;
        }

        .column {
            width: 100px;
            display: inline-block;
        }

        .column:hover circle.free {
            fill: #D5E4ED;
        }

        circle.free {
            fill: #fff;
        }

        circle.red {
            fill: #D50000;
        }

        circle.yellow {
            fill: #DAD400;
        }

    </style>

    <div id="app" class="flex justify-center items-center min-h-screen p-8 shadow-lg rounded-lg">
        <div id="game-board" class="flex flex-row justify-center items-center">
            <div class="column" id="column-0" data-x="0">
                <svg height="100" width="100" class="row-5">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-4">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-3">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-2">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-1">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-0">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
            </div>
            <div class="column" id="column-1" data-x="1">
                <svg height="100" width="100" class="row-5">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-4">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-3">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-2">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-1">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-0">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
            </div>
            <div class="column" id="column-2" data-x="2">
                <svg height="100" width="100" class="row-5">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-4">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-3">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-2">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-1">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-0">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
            </div>
            <div class="column" id="column-3" data-x="3">
                <svg height="100" width="100" class="row-5">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-4">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-3">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-2">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-1">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-0">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
            </div>
            <div class="column" id="column-4" data-x="4">
                <svg height="100" width="100" class="row-5">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-4">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-3">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-2">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-1">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-0">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
            </div>
            <div class="column" id="column-5" data-x="5">
                <svg height="100" width="100" class="row-5">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-4">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-3">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-2">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-1">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-0">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
            </div>
            <div class="column" id="column-6" data-x="6">
                <svg height="100" width="100" class="row-5">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-4">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-3">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-2">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-1">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
                <svg height="100" width="100" class="row-0">
                    <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free"/>
                </svg>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            var ConnectFour = function () {
                var gameBoard = {};
                var humanPlayer = 'user'; // Human player
                var aiPlayer = 'ai'; // AI player
                var currentPlayer = humanPlayer; // Start with human player
                var numRows = 6;
                var numCols = 7;
                var numTurns = 0;

                var _init = function () {
                    initializeGameBoard();
                    setupColumnClicks();
                };

                var initializeGameBoard = function () {
                    for (var x = 0; x < numCols; x++) {
                        gameBoard[x] = {};
                        for (var y = 0; y < numRows; y++) {
                            gameBoard[x][y] = 'free';
                        }
                    }
                };

                var setupColumnClicks = function () {
                    var columns = document.querySelectorAll('.column');

                    columns.forEach(function (col) {
                        col.addEventListener('click', function () {
                            if (currentPlayer === humanPlayer) {
                                var x = col.getAttribute('data-x');
                                humanMove(parseInt(x));
                            }
                        });
                    });
                };

                var humanMove = function (x) {
                    var nextY = findNextFreeRow(x);

                    if (nextY === false) {
                        alert('No free spaces in this column. Try another.');
                        return;
                    }

                    gameBoard[x][nextY] = humanPlayer;

                    var circle = document.querySelector('#column-' + x + ' .row-' + nextY + ' circle');
                    circle.setAttribute('class', "yellow");

                    if (isWinner(x, nextY, humanPlayer)) {
                        storeWinnerRecord(humanPlayer, 'win');
                        setTimeout(function () {
                            alert('You win!');
                            clearBoard();
                        }, 300);
                        return;
                    }

                    numTurns++;
                    if (numTurns >= numRows * numCols) {
                        storeWinnerRecord(humanPlayer, 'tie');
                        setTimeout(function () {
                            alert('It\'s a tie!');
                            clearBoard();
                        }, 300);
                        return;
                    }

                    currentPlayer = aiPlayer; // Switch to AI's turn
                    setTimeout(computerMove, 500); // Delay AI move for demonstration
                };

                function storeWinnerRecord($player, $result) {

                    $data = {
                        "winner": $player,
                        "result": $result
                    }
                    console.log($data);
                    axios.post('/game/result', $data)
                        .then(response => {
                            messageDiv.textContent = 'You won!';
                        })
                        .catch(error => {
                            console.error(error);
                        });
                }

                var computerMove = function () {
                    var x = Math.floor(Math.random() * numCols);
                    var nextY = findNextFreeRow(x);

                    if (nextY === false) {
                        computerMove(); // Retry if column is full (shouldn't happen often)
                        return;
                    }

                    gameBoard[x][nextY] = aiPlayer;

                    var circle = document.querySelector('#column-' + x + ' .row-' + nextY + ' circle');
                    circle.setAttribute('class', "red");

                    if (isWinner(x, nextY, aiPlayer)) {
                        storeWinnerRecord(aiPlayer, 'win')
                        setTimeout(function () {
                            alert('AI wins!');
                            clearBoard();
                        }, 300);

                        return;
                    }

                    numTurns++;
                    if (numTurns >= numRows * numCols) {
                        setTimeout(function () {
                                  alert('It\'s a tie!');
                            clearBoard();
                        }, 100);
                        return;
                    }

                    currentPlayer = humanPlayer; // Switch to human's turn
                };

                var findNextFreeRow = function (x) {
                    for (var y = 0; y < numRows; y++) {
                        if (gameBoard[x][y] === 'free') {
                            return y;
                        }
                    }
                    return false; // Column is full
                };

                var clearBoard = function () {
                    document.querySelectorAll('circle').forEach(function (piece) {
                        piece.setAttribute('class', 'free');
                    });

                    initializeGameBoard();
                    numTurns = 0;
                    currentPlayer = humanPlayer; // Reset to human player after game ends
                };

                var isWinner = function (currentX, currentY, player) {
                    return checkDirection(currentX, currentY, 'vertical', player) ||
                        checkDirection(currentX, currentY, 'diagonal', player) ||
                        checkDirection(currentX, currentY, 'horizontal', player);
                };

                var isBounds = function (x, y) {
                    return gameBoard.hasOwnProperty(x) && typeof gameBoard[x][y] !== 'undefined';
                };

                var checkDirection = function (currentX, currentY, direction, player) {
                    var chainLength = 1;
                    var directions = {
                        horizontal: [[0, -1], [0, 1]],
                        vertical: [[-1, 0], [1, 0]],
                        diagonal: [[-1, -1], [1, 1], [-1, 1], [1, -1]]
                    };

                    directions[direction].forEach(function (coords) {
                        var i = 1;
                        while (isBounds(currentX + ( coords[0] * i ), currentY + ( coords[1] * i )) &&
                        gameBoard[currentX + ( coords[0] * i )][currentY + ( coords[1] * i )] === player) {
                            chainLength++;
                            i++;
                        }
                    });

                    return chainLength >= 4;
                };

                _init();
            };

            ConnectFour();
        });

    </script>
</x-app-layout>
