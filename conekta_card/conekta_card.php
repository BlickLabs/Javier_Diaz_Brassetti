<?php 

require_once '../conekta_card/MyConekta.php';
$amount 	= 2200;
$amount 	= (strstr($amount = $amount, '.')) ? str_replace('.', '', $amount) : $amount.'00';
$number 	= filter_input(INPUT_POST, 'card_number');
$exp_month 	= filter_input(INPUT_POST, 'month');
$exp_year 	= filter_input(INPUT_POST, 'year');
$cvc 		= filter_input(INPUT_POST, 'security_code');
$name 		= filter_input(INPUT_POST, 'Name');

MyConekta::card($amount, $number, $exp_month, $exp_year, $cvc,$name);