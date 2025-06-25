<?php
$name = readline("Enter name: ");
$principal = readline("Enter the amout borrowed: ");
$rate = readline("Enter the rate at which the loan will be paid: ");
$time = readline("Enter the time give: ");
$solution = $principal * $rate * $time;
$result = $solution/100;
$total = $principal + $result;


echo "$name you borrowed $principal naira at $rate% rate, to pay back in $time years, the interest he is paying back with along with $principal naira the amount borrowed is $result naira, which is in total $total naira";

?>