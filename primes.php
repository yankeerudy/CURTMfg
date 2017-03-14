<?php
// primes.php
// Purpose: Generate 1,000 prime numbers starting with 2
//
$primes = array(2); // create array with first prime number
$counter = 1; // starting value
while (count($primes)<1000) {
	$counter++; $counter++; // bump counter by two, since even numbers will never be primes
	$isprime = true; // toggle for counter
	foreach ($primes as $value) { // step through identified primes
		if (fmod($counter,$value) == 0) { 
			// divisible by a prime, so this is not a prime
			$isprime = false;
			break;
		}
	}
	if ($isprime) {
		$primes[] = $counter;
	}
}
$data = implode(',', $primes);
echo $data;