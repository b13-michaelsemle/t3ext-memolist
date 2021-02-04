<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Memolist: API Functions to attach data to a FE session or user record',
	'description' => 'Memolist is a simple helper extension for everybody who needs to store data (like a memolist, a wishlist) that is attached to a website user (can be located in the users\' session or a logged-in user). Helpful for programmers only, as it is just a better abstraction to existing functions.',
	'category' => 'fe',
	'author' => 'Benjamin Mack',
	'author_email' => 'typo3@b13.com',
	'author_company' => 'b13 GmbH',
	'dependencies' => 'frontend',
	'conflicts' => '',
	'priority' => '',
	'state' => 'stable',
	'clearCacheOnLoad' => 0,
	'version' => '2.1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-10.4.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	)
);

?>
