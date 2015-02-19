<?php

// Store Email for POST
	$email = $_POST['email'];
// Gets autoloader
	require("vendor/autoload.php");
//Lists the lists in the MailChimp Account	
	//$MailChimp = new \Drewm\MailChimp('7b51088c44ee2b077f8d154d975ed996-us10');
	//print_r($MailChimp->call('lists/list'));
	//echo "Hello World";     
	$MailChimp = new \Drewm\MailChimp('18267233ebf8a5c58f2be52d0b6278d2-us10');
	$result = $MailChimp->call('lists/subscribe', array(
			'id'             => 'ecb723d384',
	                'email'             => array('email'=> $email),
	                'double_optin'      => false,
	                'update_existing'   => true,
	                'replace_interests' => false,
	                'send_welcome'      => false,
	            ));
		    //print_r($info);
	//print_r($result);
		    header("Location: index.html?subscribed#sbscrb-row");

?>