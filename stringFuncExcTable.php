<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>String Func Table</title>
	<style>
		* {
			margin: 0;
			padding: 0;

		}

		body {
			font-size: 20px;
			padding: 30px 60px;
			margin: 0;
			box-sizing: border-box;
		}

		h2 {
			font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
		}

		.styled-table {
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			border-radius: 10px 10px 0 0;
		}

		.styled-table thead tr {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
		}

		.styled-table th,
		.styled-table td {
			padding: 12px 20px;
			max-width: 600px;
		}

		.styled-table td {
			border: 1px solid #dddddd;
		}

		.styled-table th:nth-child(1) {
			border-radius: 10px 0 0 0;
		}

		.styled-table th:nth-child(2) {
			border-radius: 0 10px 0 0;
		}

		.styled-table tbody tr {
			/* border-bottom: 1px solid #dddddd; */
		}

		.styled-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		.styled-table tbody tr:last-of-type {
			border-bottom: 2px solid #009879;
		}
	</style>
</head>

<body>
	<!-- TABLE -->
	<table class="styled-table">
		<thead>
			<tr>
				<th>
					<h2>Task</h2>
				</th>
				<th>
					<h2>Output</h2>
				</th>
			</tr>
		<tbody>
			<!-- ROW -->
			<tr>
				<td>String To Uppercase</td>
				<td>
					<?php
					$string1 = "Hello i'm Adam";
					echo strtoupper($string1);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>String To Lowercase</td>
				<td>
					<?php
					echo strtolower($string1);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>First Letter To Uppercase</td>
				<td>
					<?php
					echo ucfirst("adam");
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>First Letter To Lowercase</td>
				<td>
					<?php
					echo lcfirst("Adam");
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>First Letter Of All Words To Uppercase</td>
				<td>
					<?php
					echo ucwords($string1);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Split The String</td>
				<td>
					<?php
					$string2 = "082307";
					$array1 = str_split($string2, 2);
					echo implode(':', $array1);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Find in string</td>
				<td>
					<?php
					$string3 = "the quick brown fox jumps over the lazy dog";
					if (strstr($string3, "jumps") == true/*When i removed the 3rd "=" the code worked*/) {
						$result = "yes";
					}
					echo $result;
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Convert Var to String</td>
				<td>
					<?php
					$var1 = 7;
					echo "The variables type was: " . gettype($var1);
					echo "</br>";
					$string4 = strval($var1);
					echo "After coverting it the type is: " . gettype($string4);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Extract substring from main string (Negative indx)</td>
				<td>
					<?php
					$url1 = "www.example.com/public_html/index.php";
					echo "The filename is: " . substr($url1, -9);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Extract substring from main string (positive indx)</td>
				<td>
					<?php
					$email = "Ayham@example.com";
					echo "The username is: " . substr($email, 0, 5);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Get the last three characters of a string</td>
				<td>
					<?php
					echo "The Generic Top-Level Domain is: " . substr($email, -3);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Add two numbers & Format</td>
				<td>
					<?php
					$x = 65.45;
					$y = 104.35;
					$z = number_format($x + $y, 2);
					echo "Sum: " . $z;
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Generate a password</td>
				<td>
					<?php
					$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*()_+';
					echo substr(str_shuffle($data), 0, 8) . " <span style='padding-left:10px;font-size:14px;'><i><sup> -Reload the page to see effect</sup></span></i>";
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Replace the first word of string</td>
				<td>
					<?php
					echo preg_replace('/the/', 'That', $string3, 1);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Find the differrence "football vs footboll"</td>
				<td>
					<?php
					$first = "football";
					$second = "footboll";
					$str_pos = strspn($first ^ $second, "\0");
					printf(
						'First difference between two strings is at position %d: "%s" vs "%s"',
						$str_pos,
						$first[$str_pos],
						$second[$str_pos]
					);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>put a string in an array & dump info</td>
				<td>
					<?php
					$str = "Twinkle, twinkle, little star,</br> How I wonder what you are.</br> Up above the world so high,</br> Like a diamond in the sky.";
					$arr1 = explode("</br>", $str,);
					var_dump($arr1);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Get file name from string</td>
				<td>
					<?php
					$url2 = "https://www.orange.com/index.php";
					echo "The filename is: " . substr($url2, -9, 5);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Get next letter</td>
				<td>
					<?php
					$letters = 'c';
					$nextLetter = ++$letters;
					if (strlen($nextLetter) > 1) {
						$nextLetter = $nextLetter[0];
					}
					echo $nextLetter;
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Remove first part of string</td>
				<td>
					<?php
					$url3 = "rayy@example.com";
					echo strstr($url3, '@');
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Get hex dump of string</td>
				<td>
					<?php
					echo bin2hex($url3);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Insert string inside a string in a certain position </td>
				<td>
					<?php
					$orginalString = "The brown fox";
					$newstr = substr_replace($orginalString, "<b>quick</b> ", 4, 0);
					echo $newstr;
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Get the first word of a string.</td>
				<td>
					<?php
					$string5 = "The quick brown fox";
					$arr2 = explode(' ', $string5);
					echo $arr2[0];
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Remove extra zeros in the begining</td>
				<td>
					<?php
					$originalString = "000547023.24";
					echo trim($originalString, 0);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Removing a word from a string</td>
				<td>
					<?php
					$string6 = "The quick brown fox jumps over the lazy dog";
					echo str_replace('fox', '', $string6);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Removing part from the end of a string</td>
				<td>
					<?php
					$string7 = "The quick brown fox jumps over the lazy dog///";
					echo trim($string7, '/');
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Get part of string after "/"</td>
				<td>
					<?php
					$string7 = "The quick brown fox jumps over the lazy dog///";
					echo trim($string7, '/');
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Remove speacial characters (\"\1+2/3*2:2-3/4*3)</td>
				<td>
					<?php
					$string8 = '\"\1+2/3*2:2-3/4*3';
					echo preg_replace('/[^A-Za-z0-9]/', ' ', $string8);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Select first 5 words from a string</td>
				<td>
					<?php
					$pieces = explode(" ", $string3);
					$firstFive = implode(" ", array_splice($pieces, 0, 5));
					$otherPart = implode(" ", array_splice($pieces, 5));
					echo $firstFive;
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Remove comas from string</td>
				<td>
					<?php
					$string9 = "2,543.12";
					echo str_replace(",", '', $string9);
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- ROW -->
			<tr>
				<td>Print letters from ‘A’ to 'Z’</td>
				<td>
					<?php
					// Specify the range
					$a = range("A", "Z");
					// Show the character one after another
					foreach ($a as $char)
						echo $char;
					?>
				</td>
			</tr>
			<!-- END OF ROW -->
			<!-- END OF TABLE -->
		</tbody>
	</table>
</body>

</html>