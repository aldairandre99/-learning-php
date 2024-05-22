<?php

/* String oparations */
echo "<h1>String Operation</h1>";

/*The PHP strlen() function returns the length of a string. */
echo "Letters in string: " . strlen($name) . "<br><br>";

/* The PHP str_word_count() function counts the number of words in a string */

echo "Words in string: " . str_word_count($name) . "<br><br>";

/* 
  The PHP strpos() function searches for a specific text within a string.
  If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
*/

echo strpos("Hello world!", "world");

/* The strtoupper() function returns the string in upper case: */
echo "<br><br>";
echo strtoupper($name);

/* The strtolower() function returns the string in lower case: */
echo "<br><br>";
echo strtolower($name);

/* 
  The PHP str_replace() function replaces some characters with some other characters in a string.
 */
$x = "Hello World!";
echo "<br><br>";
echo $x;
echo "<br><br>";
echo str_replace("World", "Dolly", $x);