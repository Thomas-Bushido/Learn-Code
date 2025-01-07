<?php
// Change player location
function changeLocation()
{
    // Write your code here:
    global $location;

    echo "Where do you want to go?\n";

    $go_to = readline(">> ");
    $go_to = strtolower($go_to);
    echo "\n";
    if ($location === "kitchen" && $go_to === "bathroom") {
        $location = $go_to;
        echo "You go to: bathroom.\n";
    } else if ($location === "kitchen" && $go_to === "woods") {
        $location = $go_to;
        echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    } else if ($location === "bathroom" && $go_to === "kitchen") {
        $location = $go_to;
        echo "You go to: kitchen.\n";
    } else if ($location === "woods" && $go_to === "kitchen") {
        $location = $go_to;
        echo "You go to: kitchen.\n";
    } else if ($location === "woods" && $go_to === "bathroom") {
        $location = $go_to;
        echo "You go to: bathroom.\n";
    } else {
        echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
    }
}
