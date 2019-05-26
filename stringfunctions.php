<?php include 'header.php';

$string = "Hello World!";
$lowercase_sentence = "hello, welcome to the world";
$uppercase_sentence = "HELLO WORLD!";

echo $string . "<br>";
// Count how many words in str
echo str_word_count("Hello, my name is James") . "<br>";
// Count how many characters are in string
echo strlen("I wonder how") . "<br>";
// Reverse a string
echo strrev($string) . "<br>";
// checks whether second the param exsists in strin. If so return postion.
// If false returns false
echo strpos($string, "World") . "<br>";
// Replace word(s) in string with another
// First param is word we want to be replaced
// Second param is the word we want it to be replaced with
// Third param is the string we want to alter
echo str_replace("World", "Universe", $string) . "<br>";

// Converts to title case
echo ucwords($lowercase_sentence) . "<br>";

// Converts to uppercase
echo strtoupper($string) . "<br>";

// Converts to lowercase
echo strtolower($uppercase_sentence);

// Repeat a string
// First param is what we want to be repeated
// Second param is how many times we want this to be repeated
echo str_repeat($string, 5) . "<br>";
// Compares two strings
// If strings arethe same 0 is returned
// If string1 is greater tha string2 positive number is returned
// If string2 is greater tha string1 negative number is returned
echo strcmp("hello", "hello") . "<br>";

// Returns part of a string
// First param is input
// second param is the start point 
// third param is how many characters from that start point
echo substr($string, 2, 7) . "<br>";

// Remove set characters from a string and whitespace from the ends of the string
echo trim(" Hello world ", "H d");


include 'footer.php';
