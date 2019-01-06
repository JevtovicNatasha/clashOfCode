
/** The program:
Your program must reverse all the letters of the words in a given sentence.
Input: Hello World
Output:olleH dlrow
Solution:
Inputs for testing: Hello World, Om nom nom, Lorem Ipsum Dice Deus, Numbers
**/

<?php 
$input;
$explode_input = explode(" ", $input);
foreach($explode_input as $value){
    $perm [] = strrev($value);
}
$result = implode($perm, " ");
echo $result;
?>

