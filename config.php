<?php
/*
Faucet by Ratnet - Made in México - 2015

I developed this for free to help spread the word about Bytecoin but if you want to tip me, everything will be appreciated :D

Donations to Ratnet Personal Wallet for Developing:

Bytecoin: 28qwqrRWSF7Ad8GjwUgR142yvhmnsa6GGbvf8KpxzWkqU1FEhK5LBijZhXseeQvDzij7cRETY3DPJ3e7opXQc5AhURdFt9U
Bitcoin: 1MXPDKMSbCr41n2imq2BEMivtu9SJyd4ES

Donations to Ratnet's Bytecoin Faucet:
Bytecoin: 24gKv1yqZ2oZ7Ln4KWcL3q7D7CXibndxhDzLvrJxxw1x7tiaQ5euuduT9EkHzDta144vmwToddz9Khct4pqSVzuBCxgVTYP

Changes for KRB by Karbo Dev team 2016, Looongcat 2018

Karbo Dev team donation wallet:
Kdev1L9V5ow3cdKNqDpLcFFxZCqu5W2GE9xMKewsB2pUXWxcXvJaUWHcSrHuZw91eYfQFzRtGfTemReSSMN4kE445i6Etb3

Looongcat donation wallet:
KfS4P6eape7iT9m12XVGr5MpTTicPHDANji41wTZ55AuLVq32Tu7NuoJqc1GHKqh3YjorSwytGegBRUxu2fZDMPMAffx9VN

*/

$faucetTitle      = "FRED Faucet";
$faucetSubtitle   = "Free FRED every 12 hours";
$logo             = "images/krbcoin.png";

// Address for RPC client
$jsonrpc_server = 'http://127.0.0.1:8754/json_rpc';
$password = 'password';

//Faucet address for donations
$faucetAddress    = "";

// Transaction for 1 fee and divider to convert atomic currency units to KRB
$transactionFee   = 100000000;
$dividirEntre     = 1000000000000;

//Reward time in hours
$rewardEvery      = "12";

//Max reward and min reward as decimals, e.g. Min = 10.0 & Max = 20.0
$minReward        = "0.1";
$maxReward        = "1";

//Database connection
$hostDB           = "127.0.0.1";
$database         = "";
$userDB           = "";
$passwordDB       = "";

//Recaptcha Keys. You can get yours here: https://www.google.com/recaptcha/
$keys             = array(
		'site_key' => '',
		'secret_key' => ''
);

//Addresses that can request more than one time but with a different payment ID.
$clearedAddresses = array( 
/*	"Eobot" => "22694R3K1JvGf1m98pBsbaXCA3ULQz4xdQiYHgnNAdsVDqZDjiTH9CMj6QHhKD232wPeYtfypNzp5TX5L3NcGGSmJ8pWnPJ",
	"Poloniex" => "25cZNQYVAi3issDCoa6fWA2Aogd4FgPhYdpX3p8KLfhKC6sN8s6Q9WpcW4778TPwcUS5jEM25JrQvjD3XjsvXuNHSWhYUsu",
	"HitBTC" => "24zavX3Bi2PiKGWLKh4bPGTiMsn4iHf3Y6JnKCF6V1PeBpDpuwiAMZ8di7ok6B5SQT6UXUtQgusruCoXbqUZm8VJAfq2xKK"
*/ );
?>
