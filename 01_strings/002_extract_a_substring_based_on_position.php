<?php
/**
 * Problem:		     Extract the part of the string starting from the special position.
 * 				     For instance, we need the first 8 characters of the username.
 * Solution:	     Use the substr($string,$start,$length) to cut the string.
 */
$string = $_GET['username'];                // andremaha	

// Cut from the beginning, 8 chars long
$first_eight_chars = substr($string, 0, 8);
echo $first_eight_chars . "\n";             // andremah

// Cut from the third char till the end of the string
echo substr($string, 3) . "\n";             // remaha

// When the start is negative, the counting goes from the back of the string
echo substr($string, -4) . "\n";             // maha

// When both the start and the length is negative, the length is counted from the end of the string
echo substr($string, -9, -4) . "\n";        // andre