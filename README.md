# testInterview
TestInterview
1. Source Code Test Palindrome 

<?php
// PHP code to check for Palindrome 
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


2.Source Code Test function Merge the words

<?php
$string = "ABC DDA ADA";

$arr_kata2 = explode ("A", $string, 3);
 

print_r ($arr_kata2);

?>
