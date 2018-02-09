<?php
header('Content-type: text/plain');

//1. Declare a variable $party and initialize it with the following array:

$party = [
	'bilbo' => 'Bilbo Baggins',
	'frodo' => 'Frodo Baggins',
	'ring' => 'The One Ring'
];
var_dump($party);

//2. To the array $party add a new item under the key 'gandalf', the value will be 'Gandalf the Grey'
$party['gandalf'] = 'Gandalf the Grey';

//3. Using function unset, remove an item from array $party with the key 'bilbo'
echo 'unset($party[\'bilbo\']);' , "\n";
unset($party['bilbo']);
var_dump($party);

//4. To the array $party add a new item under the key 'sam', the value will be 'Samwise Gamgee'
$party['sam'] = 'Samwise Gamgee';

//5. Using function unset, remove an item from array $party with the key 'gandalf'
echo 'unset($party[\'gandalf\']);' , "\n";
unset($party['gandalf']);
var_dump($party);

//6. Declare a function leave_hobbiton (no arguments).

//7. Inside the function, import the global variable $party

//8. Inside the function change the value of $party with the return value of function array_merge. The first argument of array_merge will be the variable $party, the second will be the following array:
function leave_hobbiton ()
{
	global $party;
	
	return $party = array_merge($party, [
		'merry' => 'Meriadoc Brandybuck',
		'pippin' => 'Peregrin Took'
	]);
}

//9. Call the function leave_hobbiton
echo 'leave_hobbiton ();' , "\n";
leave_hobbiton ();
var_dump($party);

//10. Declare a function go_to_bree. It will take one argument: $party passed by value

//11. Inside the function add a new item to the variable $party under the key 'strider'. The value will be 'Strider'

//12. Inside the function return the value of variable $party
function go_to_bree ($party)
{
	$party['strider'] = 'Strider';
	
	return $party;
}
//13. Outside of the function, call the function go_to_bree and insert it's return value into the variable $party
echo "\$party = go_to_bree (\$party);\n";
$party = go_to_bree ($party);
var_dump($party);

//14. Declare a new function go_to_weathertop. It will take one argument, $party passed by reference (with &)

//15. Inside the function change the value of $party with the return value of function array_merge. The first argument of array_merge will be the variable $party, the second will be the following array:
function go_to_weathertop(&$party)
{
	return $party = array_merge($party, ['Witch King of Angmar', 'Nazgûl #2', 'Nazgûl #3', 'Nazgûl #4', 'Nazgûl #5', 'Nazgûl #6', 'Nazgûl #7', 'Nazgûl #8', 'Nazgûl #9']);
}
//16. Outside of the function, call the function go_to_weathertop
echo 'go_to_weathertop($party);' , "\n";
go_to_weathertop($party);
var_dump($party);

//You have now seen 3 ways of using a variable "from the outside" inside a function: importing from global scope, passing by value & returning and passing by reference. In the following functions, use any way you find practical or convenient.

//17. Declare a function meet_arwen, making the global variable $party in some way available in it.

//18. Inside the function add an item to the array with key 'arwen' and value 'Arwen Undómiel'
function meet_arwen ()
{
	global $party;
	$party['arwen'] = 'Arwen Undómiel';
	
	return $party;
}

//19. Inside the function call the function array_splice. The first argument of array_splice will be the variable $party (or similar that holds the value of the current party), the second will be the number -10, the third will be the number 9.

//20. Outside of the function call the function meet_arwen. Make sure that calling it changes the value of the global variable $party
echo "meet_arwen();\n";
meet_arwen();
var_dump($party);

//21. Declare a function go_to_rivendell (again, make sure that you will be able to change the global variable $party with your approach)

//22. Inside the function remove an item from the array with the key 'arwen'

//23. Inside the function change the value of $party with the return value of function array_merge. The first argument of array_merge will be the variable $party, the second will be the following array:

//23. Inside the function change the value of item with key 'strider' to 'Aragorn'

function go_to_rivendell ()
{
	global $party;
	unset($party['arwen']);
	
	return $party = array_merge($party, [
		'gandalf' => 'Gandalf the Grey',
		'boromir' => 'Boromir',
		'legolas' => 'Legolas',
		'gimli' => 'Gimli'
	]);
}


//24. Call the function go_to_rivendell (making sure that it changes the global variable $party)
echo "go_to_rivendell();\n";
go_to_rivendell();
var_dump($party);

//25. Declare a function go_to_moria (same principle as always)

//26. Inside the function remove the item with key 'gandalf'
function go_to_moria()
{
	global $party;
	unset($party['gandalf']);
	
	return $party;
}
//27. Call the previous function.
echo "go_to_moria();\n";
go_to_moria();
var_dump($party);


//28. Declare a function go_to_falls_of_rauros (same as always)

//29. Inside the function change the value of $party with the return value of function array_merge. The first argument of array_merge will be the variable $party, the second will be the following code:

//30. Inside the function remove the item with the key 'boromir'
function go_to_falls_of_rauros()
{
	global $party;
	
	$party = array_merge($party, array_fill(0, 100, 'Orc'));
	unset($party['boromir']);
	
	return $party;
}


//31. Call the function.
echo "go_to_falls_of_rauros();\n";
go_to_falls_of_rauros();
var_dump($party);

//32. Declare a function break_fellowship with 1 argument: $party, passed by value.

//33. Inside the function declare a new variable $mordor_party and initialize it as an empty array.

//34. Using 3 statements (= in a simple way), add 3 items into the new array from the array $party:

//item with the key 'frodo'
//item with the key 'sam'
//item with the key 'ring'
//35.
//Inside the function declare a new variable $hunting_party and initialize it as an empty array.

//36. Using 3 statements, add 3 items into the new array from the array $party:

//item with the key 'strider'
//item with the key 'legolas'
//item with the key 'gimli'
//37. Inside the function declare a new variable $hungry_party and initialize it as an empty array.
function break_fellowship($party)
{
	$mordor_party = [];
	$mordor_party['frodo'] = $party['frodo'];
	$mordor_party['sam'] = $party['sam'];
	$mordor_party['ring'] = $party['ring'];
	$hunting_party = [];
	$hunting_party['strider'] = $party['strider'];
	$hunting_party['legolas'] = $party['legolas'];
	$hunting_party['gimli'] = $party['gimli'];
	$hungry_party = [];
	
	$hungry_party = array_diff($party, $mordor_party, $hungry_party);
	
	return [$mordor_party, $hunting_party, $hungry_party];
}
//38. Inside the function change the value of $hungry_party with the return value of function array_diff_key. The first argument of array_diff_key will be the variable $party, the second will be the variable $mordor_party, the third will be the variable $hunting_party

//39. Inside the function return a multidimensional array consisting of 3 items: $mordor_party, $hunting_party and $hungry_party

//40. Outside of the function, call the function break_fellowship and insert it's return value to the variable $party
echo "\$party = break_fellowship();\n";
$party = break_fellowship($party);
var_dump($party);