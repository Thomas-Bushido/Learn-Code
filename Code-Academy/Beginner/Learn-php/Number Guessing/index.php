<?php

// In this program, we’ll see how often the player can guess a randomly generated number. 
// After several rounds, we’ll tell the player what percentage of the time they guessed correctly and whether they had a tendency to guess too high or too low.

// For our program to work, we’ll need to keep track of some variables. Create four variables and assign 0 as the value for each:

// $play_count will keep track of how many rounds of the game have been played.
// $correct_guesses will keep track of how many times they guess correctly.
// $guess_high will keep track of how many of their guesses were higher than the actual number.
// And $guess_low will keep track of how many of their guessed were lower than the actual number.



$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low =0;

// Before we start the game, you should explain how it works to the player.
//  Use echo to print a message explaining the game to the player. 
//  You can check out the hint to see what we wrote.

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

// The actual gameplay will take place inside a function. 
// Declare a function guessNumber(). It does not take in any arguments.
 
function guessNumber()
{

    
// We’ll need access to the variables you declared within the function, 
// so you should declare them as global variables inside your function body.

    global $guess_high, $guess_low, $correct_guesses, $play_count;
  


// Increment the $play_count variable;

        $play_count++;

// Generate the random number for this round. It should be between 1 and 10 (inclusive).
// Make sure to save this number as a variable.

    $num = rand(1, 10);


// In the next step, we’ll prompt the player for their guess, but before we do that, let’s remind them.
// Use echo to print a message to the player. 
// We recommend putting a newline character (\n) on either side of your message so that the formatting looks nicer in the end.
  
      echo "\nMake your guess...\n";


// Ok! Time to get the player’s guess. Use the readline() function to get the player’s input from the terminal.
// We suggest passing in the prompt string ">> ". It helps the player see where they are typing.
// Make sure to save their response as a variable.
  
    $guess = intval(readline(">> "));


// Let’s print some information about the current round to the player. 
// Let them know what round number they’re on, what the random number was, and what they guessed.
  
    echo "Round: $play_count\nMy Number: $num\nYour guess: $guess";


// Adjust the global variables by comparing their guess to the random number:
// If their guess was the same as the random number, increment the $correct_guesses variable.
// If their guess was greater than the random number, increment the $guess_high variable.
// If their guess was smaller than the random number, increment the $guess_low variable.

    if ($guess === $num){
        $correct_guesses++; 
    }

    if ($guess > $num){
        $guess_high++;
    }

    if ($guess < $num){
        $guess_low++;
    }


// Calculate the percentage of guesses the player got right and save this value as a variable.

    $percent_correct = $correct_guesses/$play_count * 100;
    echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";
if ($guess_high > $guess_low){
    echo "When you guessed wrong, you tended to guess high";
} else if ($guess_high < $guess_low) {
    echo "When you guessed wrong, you tended to guess low";
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