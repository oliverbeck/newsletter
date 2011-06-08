<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// ExtDirect API
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ExtDirect']['TYPO3.Newsletter.Remote'] = 'EXT:newsletter/class.tx_newsletter_remote.php:tx_newsletter_remote';

   
if (!isset($TYPO3_CONF_VARS['EXTCONF']['newsletter']['extraMailHeaders']['X-Mailer'])) $TYPO3_CONF_VARS['EXTCONF']['newsletter']['extraMailHeaders']['X-Mailer'] = 'TYPO3 CMS - newsletter extension';
if (!isset($TYPO3_CONF_VARS['EXTCONF']['newsletter']['extraMailHeaders']['X-Precedence'])) $TYPO3_CONF_VARS['EXTCONF']['newsletter']['extraMailHeaders']['X-Precedence'] = 'bulk';
if (!isset($TYPO3_CONF_VARS['EXTCONF']['newsletter']['extraMailHeaders']['X-Provided-by'])) $TYPO3_CONF_VARS['EXTCONF']['newsletter']['extraMailHeaders']['X-Sponsored-by'] = 'http://www.casalogic.dk/ - Open Source Experts.';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_newsletter_NewsletterTask'] = array(
        'extension'        => $_EXTKEY,
        'title'            => 'Run TC Newsletter',
        'description'      => 'Send email',
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_newsletter_NewsletterbounceTask'] = array(
        'extension'        => $_EXTKEY,
        'title'            => 'Run TC Newsletter Bounce',
        'description'      => 'Fetch bounce statistic',
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'TxNewsletterM1',
	array(
		// controller Actions declared
		'Newsletter' => 'index, show, new, create, edit, update, delete',
		'Statistic' => 'index, show, new, create, edit, update, delete',
	),
	array(
		// non cachable actions -> change this to 'create, update, delete'
		'Newsletter' => 'index, show, new, create, edit, update, delete',
		'Statistic' => 'index, show, new, create, edit, update, delete',
	)
);
