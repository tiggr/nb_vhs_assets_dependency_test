<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Nb.' . $_EXTKEY,
	'Pi1',
	array(
		'Dummy' => 'index',

	),
	// non-cacheable actions
	array(
		'Dummy' => 'index',

	)
);

?>