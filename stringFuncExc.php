<?php
//1 string funcs

// String To Uppercase
$string1 = "Hello i'm Adam";
echo strtoupper($string1);
echo "</br>";

// String To Lowercase
echo strtolower($string1);
echo "</br>";

// First Letter To Uppercase
echo ucfirst("adam");
echo "</br>";

// First Letter To Lowercase
echo lcfirst("Adam");
echo "</br>";

// First Letter Of All Words To Uppercase
echo ucwords($string1);
echo "</br>";

//2 Split This String & The output should be "08:23:07"
$string2 = "082307";
// $array1 = (explode(" ",$string2));
// echo implode(":",$array1);
$array1 = str_split($string2 ,2);
echo implode(':', $array1);
echo "</br>";
/*echo outputs"array" print_r outputs the array*/

//3 Find in string
$string3 = "the quick brown fox jumps over the lazy dog";
if (strstr ( $string3, "jumps" ) == true/*When i removed the 3rd "=" the code worked*/) {
	$result = "yes";
}
echo $result;
echo "</br>";

//4 Convert Var to String
$var1 = 7;
echo "The variables type was: ".gettype($var1);
echo "</br>";
$string4 = strval($var1);
echo "After coverting it the type is: ".gettype($string4);
echo "</br>";

//5 extract substring from main string using a negative index

$url1 = "www.example.com/public_html/index.php";
echo "The filename is: ".substr($url1, -9);
echo "</br>";

//6 extract substring from main string using a positive index
$email = "Ayham@example.com";
echo "The username is: ".substr($email, 0,5);
echo "</br>";

//7 Write a PHP script to get the last three characters of a string
echo "The Generic Top-Level Domain is: ".substr($email, -3);
echo "</br>";

//8 Add two numbers
$x=65.45;  
$y=104.35;  
$z=number_format($x+$y,2);  
echo "Sum: ".$z;  
echo "</br>";

//9 Generate a password
$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*()_+';
echo substr(str_shuffle($data), 0, 8);
echo "</br>";

//10 Replace the first word of string
echo preg_replace('/the/', 'That', $string3,1);
echo "</br>";

//11 Find the differrence
$first = "football";
$second = "footboll";
$str_pos = strspn($first ^ $second, "\0");
printf('First difference between two strings is at position %d: "%s" vs "%s"',
$str_pos, $first[$str_pos], $second[$str_pos]);
echo "</br>";

//12 put a string in an array
$str = "Twinkle, twinkle, little star,</br> How I wonder what you are.</br> Up above the world so high,</br> Like a diamond in the sky.";
$arr1 = explode("</br>", $str,);
// print_r ($arr1);
var_dump($arr1);
echo "</br>";

//13 Get file name from string
$url2 = "https://www.orange.com/index.php";
echo "The filename is: ".substr($url2, -9,5);
echo "</br>";

//14 Get next letter
$letters = 'z';
$nextLetter = ++$letters; 
if (strlen($nextLetter) > 1) 
{
$nextLetter = $nextLetter[0];
 }
echo $nextLetter;
echo "</br>";

//15 Remove first part of string
$url3 = "rayy@example.com";
echo strstr ( $url3, '@');
echo "</br>";

//16 get hex dump of string
echo bin2hex($url3);
echo "</br>";

//17 insert string inside a string in a certain position 
$orginalString= "The brown fox";
$newstr = substr_replace($orginalString,"<b>quick</b> ", 4, 0);
echo $newstr;
echo "</br>";

//18 get the first word of a string.
$string5="The quick brown fox";
$arr2 = explode(' ',$string5);
echo $arr2[0];
echo "</br>";

//19 Remove extra zeros in the begining
$originalString = "000547023.24";
echo trim($originalString, 0);
echo "</br>";

//20 removing a word from a string
$string6 = "The quick brown fox jumps over the lazy dog";
echo str_replace('fox', '', $string6);
echo "</br>";

//21 removing part from the end of a string
$string7 = "The quick brown fox jumps over the lazy dog///";
echo trim($string7,'/');
echo "</br>";

//22 get part of string after /
$url4 = "http:/www.example.com/5478631";
$id = substr($url4, strrpos/*(strpos-with one r) Finds the position of the first(/last if strrpos-with two r's) occurrence of "php" inside the string*/($url4, '/')+1);
echo $id;
echo "</br>";

//23 Remove speacial characters
$string8 = '\"\1+2/3*2:2-3/4*3';
echo preg_replace('/[^A-Za-z0-9]/', ' ', $string8);
echo "</br>";

//24 select first 5 words from a string
$pieces = explode(" ", $string3);
$firstFive = implode(" ", array_splice($pieces, 0, 5));
$otherPart = implode(" ", array_splice($pieces, 5));
echo $firstFive;
echo "</br>";

//25 remove comas from string
$string9 = "2,543.12";
echo str_replace(",", '', $string9);
echo "</br>";

//26 print letters from ‘A’ to 'Z’.

//1st way
// for($c='a'; $c <= 'z'; $c++){
// 	echo $c;
// }
// echo "</br>";

//2nd way
// // Get the alphabet one after another
// for ($x = ord('a'); $x <= ord('z'); $x++)
// // Show the characters
// echo chr($x);

//3rd way
// Specify the range
$a = range("A","Z");
// Show the character one after another
foreach($a as $char)
    echo $char;


