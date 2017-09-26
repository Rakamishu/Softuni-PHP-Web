<?php

function isPalindrome($str)
{
    if(strrev($str) == $str)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}

echo isPalindrome("abcccba");