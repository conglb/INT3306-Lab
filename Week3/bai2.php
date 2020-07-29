<?php
function isPalindrome($string)
{

    if ($string === strrev($string)) {
        return true;
    }

    return false;
}

$string = trim(fgets(STDIN, 1024));

echo isPalindrome($string);
