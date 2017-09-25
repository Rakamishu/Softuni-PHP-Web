<?php

/**
 * test 1
 */
$line1 = 32;
$line2 = "chop, chop, chop, chop, chop";
/**
 * test2
 */
$line3 = 9;
$line4 = "dice, spice, chop, bake, fillet";

echo cooking($line1, $line2);
echo "<hr />";
echo cooking($line3, $line4);


function cooking($line1, $line2)
{

    $actions = explode(", ", $line2);
    $count = count($actions);
    

    for($i = 0; $i < $count; $i++)
    {
        if($actions[$i] == "chop")
        {
            $line1 = $line1 / 2;
            echo $line1."<br />";
        }
        else if($actions[$i] == "dice")
        {
            $line1 = sqrt($line1);
            echo $line1."<br />";
        }
        else if($actions[$i] == "spice")
        {
            $line1 = $line1 + 1;
            echo $line1."<br />";
        }
        else if($actions[$i] == "bake")
        {
            $line1 = $line1 * 3;
            echo $line1."<br />";
        }
        else if($actions[$i] == "fillet")
        {
            $line1 = $line1 - ($line1 * 20 / 100);
            echo $line1."<br />";
        }
    }

}