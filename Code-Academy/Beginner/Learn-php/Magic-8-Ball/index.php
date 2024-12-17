<?php

// MAGIC 8 BALL

// The Magic 8-Ball is a popular toy used for fortune-telling or seeking advice.

// In this project, you’ll be creating a function that can answer any “yes” or “no” question.

// Your magic8Ball() will take in any “yes” or “no” question (as a string) and give a psychic (random) answer.



function magic8Ball(){
echo "\nTell me.. What's your question ?\n";
$question = readline(">");
$rand = rand(0, 19);
echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: \n";


switch($rand){
 case 0:
 echo "It is certain.";
 break;
 case 1:
 echo "It is decidedly so.";
 break;
 case 2:
 echo "Without a doubt.";
 break;
 case 3:
 echo "Yes - definitely.";
 break;
 case 4:
 echo "You may rely on it.";
 break;
 case 5:
 echo "As I see it, yes.";
 break;
 case 6:
 echo "Most likely.";
 break;
 case 7:
 echo "Yes.";
 break;
 case 8:
 echo "No.";
 break;
 case 9:
 echo "Maybe.";
 break;
 case 10:
 echo "I don't know.";
 break;
 case 11:
 echo "Possibly.";
 break;
 case 12:
 echo "Why not.";
 break;
 case 13:
 echo "Surely.";
 break;
 case 14:
 echo "Hmmmm.";
 break;
 case 15:
 echo "I'm seek.";
 break;
 case 16:
 echo "Why ?.";
 break;
 case 17:
 echo "Oh.";
 break;
 case 18:
 echo "Obviously.";
 break;
 case 19:
 echo "Certainly.";
 break;
 default:
 echo "bad question";

}
}

magic8Ball();
