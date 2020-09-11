<?php 
	require_once('vendor/autoload.php');
	$stripe_public_key = get_option('invoices_live_pk_label');
	$stripe_secret_key = 'sk_live_U2pRcMKRcU1zbCeo0EYpqTg300zK3IA0w7';
	\Stripe\Stripe::setApiKey($stripe_secret_key);
