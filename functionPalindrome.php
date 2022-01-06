<?php
// PHP code to check for Palindrome string in PHP

function Palindrome($string){
	if (strrev($string) == $string){
		return 1;
	}
	else{
		return 0;
	}
}

$original = "YAY";
if(Palindrome($original)){
	echo "true";
}
else {
    echo "false";
}

$original = "no lemons, no melon";
if(Palindrome($original)){
	echo "true";
}
else {
    echo "false";
}

$original = "hello worlds";
if(Palindrome($original)){
	echo "true";
}
else {
    echo "false";
}
?>