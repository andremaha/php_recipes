<?php
/**
* Problem:		The part of the string needs to be found and replace with another part.
* 				Say, we want to show only the last 4 digits of a credit card.
* Solution:		Use substr_replace($old_string, $replacement, $start, $length)
*/
$credit_card_raw   	= '4111 1111 1111 1111';
$credit_card_safe 	= '';

$credit_card_safe	= substr_replace($credit_card_raw, 'xxxx ', 0, -4);
echo $credit_card_safe . "\n";															// xxxx 1111

// If start and length are 0 the function will insert the new string at the beginning
echo substr_replace($credit_card_raw, 'UNSAFE CREDIT CARD: ', 0, 0) . "\n";				// UNSAFE CREDIT CARD: 4111 1111 1111 1111

// Create a read more link with the substr_replace function after the 255th character
$original_text = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";
echo substr_replace($original_text, '... read more ->', 255);