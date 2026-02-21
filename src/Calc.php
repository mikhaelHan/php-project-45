<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;

function startCalcGame()

{
  $numbers = ['4 + 10' => 14, '25 - 11' => 14, '25 * 7' => 175];
  $isWinner = true;

  line('Welcome to the Brain Games!');

  $name = prompt('May I have your name?');

  line("Hello, %s!", $name);
  line('What is the result of the expression?');

  foreach ($numbers as $key => $value) {
    $answer = prompt("Question: {$key}");
    line("Your answer: %s", $answer);

    if ($answer == $value) {
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
