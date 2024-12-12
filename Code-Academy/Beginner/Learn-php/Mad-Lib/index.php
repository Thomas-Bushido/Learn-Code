<?php
function generateStory($singular_noun, $verb, $color, $distance_unit)
{
    $story = "\nThe $singular_noun are lovely, $color, and deep.
              \nBut I have promises to keep,\nAnd $distance_unit miles to go before I $verb,
              \nAnd $distance_unit miles to go before I $verb.\n";


    return $story;
}

echo generateStory("dog", "eat", "purple", 2);
