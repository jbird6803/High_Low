<?php



fwrite(STDOUT, 'What number am I thinking? ');



$number = mt_rand(1, 100);

$count = 1;

do {
	$guess = fgets(STDIN);

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