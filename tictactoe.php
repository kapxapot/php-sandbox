<?php

$x = 1;
$o = 2;

$board = [[0,0,0],[0,0,0],[0,0,0]];

if (any input) {
    turn($board, $currentPlayer, $row, $col);

    $victory = checkForVictory($board, [$x, $o]);

    if ($victory) {
        print('Player ' . $victory . ' won!');
    }

    if (checkForTheEnd($board)) {
        print('Game over!');
    }
}

// wait for the input...

/**
 * This function make a turn, validating the input first.
 *
 * @return array The resulting board after the turn.
 */
function turn(array $board, int $player, int $row, int $col) : array
{
    if ($row < 0 || $row > 2 || $col < 0 || $col < 2) {
        throw new InvalidArgumentException('Coordinates are out of range.');
    }

    if ($board[$row][$col] > 0) {
        throw new InvalidArgumentException('The cell is already occupied.');
    }

    $board[$row][$col] = $player;

    return $board;
}

/**
 * Checks the board for any empty cells remaining. If all the cells are occupied,
 * returns "true" = the end of the game.
 */
function checkForTheEnd(array $board) : bool
{
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$i][$j] == 0) {
                return false;
            }
        }
    }

    return true;
}

/**
 * Checks the board for victory and returns player's number if they have won.
 */
function checkForVictory(array $board, array $players) : int
{
    foreach ($players as $player) {
        if (checkBoardForPlayer($board, $player)) {
            return $player;
        }
    }

    return 0;
}

function checkBoardForPlayer(array $board, int $player) : bool
{
    return checkRow($board, $player, 0)
        || checkRow($board, $player, 1)
        || checkRow($board, $player, 2)
        || checkColumn($board, $player, 0)
        || checkColumn($board, $player, 1)
        || checkColumn($board, $player, 2)
        || checkDiagonals($board, $player);
}

function checkRow(array $board, int $player, int $row) : bool
{
    return $board[$row][0] == $player
        && $board[$row][1] == $player
        && $board[$row][2] == $player;
}

function checkColumn(array $board, int $player, int $col) : bool
{
    return $board[0][$col] == $player
        && $board[1][$col] == $player
        && $board[2][$col] == $player;
}

function checkDiagonals(array $board, int $player) : bool
{
    return $board[1][1] == $player
        && ($board[0][0] == $player && $board[2][2] == $player
            || $board[0][2] == $player && $board[2][0] == $player);
}
