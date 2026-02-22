<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greet()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function game(string $ruleText, array $questions, callable $check)
{
    $isWinner = true;

    $name = greet();

    line($ruleText);

    foreach ($questions as $question => $correctValue) {
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($check($answer, $correctValue)) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctValue);

            $isWinner = false;
            break;
        }
    }

    $result = $isWinner ? 'Congratulations,' : 'Let\'s try again,';
    line("%s %s!", $result, $name);
}
