<?php
/**
*
* Problem: 		You want to know if the sting contains a substring of a given template
* 		 		Say, you wish to find out if the email adress was submitted.
* Solution:		Use the strpos() function. Always use ===, since 0 will mean the beginning of the string.
*/ 

if (strpos($_GET['email'], '@') === false) {
	echo 'There was no @ in the e-mail address you have provided!';
}

echo "You have provided the right e-mail address.";