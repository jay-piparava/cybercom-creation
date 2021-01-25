<?php

//for count a word.
$text = "Hello I am jay.i am a student.";
$words = str_word_count($text);
echo "$text contain <b>$words</b> Words.<br>";//op: Hello I am jay.i am a student. contain 8 Words.

//if you want to return a words in a array then just add a argument in function.
$words = str_word_count($text,1);
print_r($words);                  //op: Array ( [0] => Hello [1] => I [2] => am [3] => jay [4] => i [5] => am [6] => a [7] => student )

//for associate array just cheange argument 2 as a 2. in assocative array key means a position of word in that string see the ex:
$words = str_word_count($text,2);
echo "<br>";
print_r($words);   //op: Array ( [0] => Hello [6] => I [8] => am [11] => jay [15] => i [17] => am [20] => a [22] => student )

?>