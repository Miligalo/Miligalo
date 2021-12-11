<?php
require_once 'index.php';
$obj = new \Home\User("Vlad","123","gmail.com","Odessa");
echo $obj->GetInfo();

/*
	$a = 10; // целое
	$b = 10.5; // дробное
	$c = true; // булево
	$d = '$a приветов!'; // строка
	$e = "$a приветов!"; // строка
	$f = null; // пустота
	$some = $d . $e;

	/*
	echo $a;
	echo '<br>';
	echo $b;
	echo '<br>';
	echo $c;
	echo '<br>';
	echo $d;
	echo '<br>';
	echo $e;
	
	# что-то
	echo "$a<br>$b<br>$c<br>$d<br>$e<br>";

	$b = ($a * 3) + $b - $a;
	// * + - / %
	echo "$b<br>";

	define('PI', 3.14);

	echo PI . '<br>test<br>';

	$b += 10; // $b = $b + 10
	echo "$b<br>";
	*/