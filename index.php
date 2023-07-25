<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;
echo "I'm going to think of numbers between 1 and 10. Do you think you can guess correctly?\n";
function guessNumber() {
  global $play_count, $correct_guesses, $guess_high, $guess_low;
  $play_count++;

  $random_number = rand(1, 10);
  echo "\nEnter a number between 1-10.\n";
  $user_guess = readline(">> ");
  $user_guess= intval($user_guess);
  echo "\nRound: $play_count\nMy Number: $random_number\nYour guess: $user_guess.\n";
  if ($user_guess === $random_number){
    $correct_guesses++;
  } if ($user_guess > $random_number) {
    $guess_high++;
  } if ($user_guess < $random_number){
     $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$per_correct = ($correct_guesses/$play_count) * 100;

echo "\nCorrect Guesses: $per_correct%\n";

if ($guess_high > $guess_low){
  echo "When you guessed wrong, you tended to guess high.";
}
elseif ($guess_high < $guess_low){
  echo "When you guessed wrong, you tended to guess low.";
}