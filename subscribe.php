<?php
    
	// MailChimp API Key
	// MailChimp API Key ARTICLE at http://kb.mailchimp.com/accounts/management/about-api-keys#Finding-or-generating-your-API-key
	$api_key = 'YOUR_API_KEY';
    
	// MailChimp List ID
	// MailChimp List ID ARTICLE at http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id
	$list_id = 'YOUR_LIST_ID';
    
	include('mailchimp/inc/MailChimp.php');
	use \DrewM\MailChimp\MailChimp;
	$MailChimp = new MailChimp($api_key);
    
	$result = $MailChimp->post("lists/$list_id/members", [
        'email_address' => $_POST["subscribe-email"],
        'status'        => 'subscribed'
    ]);
    
?>
