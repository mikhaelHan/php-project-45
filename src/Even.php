<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function startGame()
{
    $numbers = [15 => 'no', 6 => 'yes', 7 => 'no'];
    $isWinner = true;

    line('Welcome to the Brain Games!');

    $name = prompt('May I have your name?');

    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    foreach ($numbers as $key => $value) {
        $answer = prompt("Question: {$key}");
        line("Your answer: %s", $answer);

        if ($answer === $value) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $value);

            $isWinner = false;
            break;
        }
    }

    $result = $isWinner ? 'Congratulations,' : 'Let\'s try again,';

    line("%s %s!", $result, $name);
}
