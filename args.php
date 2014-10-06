<?php

if ($argc == 3) {
	echo "Guess between {$argv[1]} and {$argv[2]} \n";
}


$number = mt_rand($argv[1], $argv[2]);


fwrite(STDOUT, 'What number am I thinking? ');


$count = 0;

do {
	$guess = trim(fgets(STDIN));

	if($guess < $number) {
		fwrite(STDOUT, "Higher\n");
	}

	elseif($guess > $number) {
		fwrite(STDOUT, "Lower\n");
	}
	else { 
		fwrite(STDOUT, "Nailed It\n");
	}
$count++;

}while($guess != $number);

echo "It took you $count guesses\n";