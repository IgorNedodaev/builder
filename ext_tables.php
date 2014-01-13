<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = 'Tx_Builder_Command_BuilderCommandController';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin('builder', 'frontend', 'Builder: Frontend', 'EXT:builder/ext_icon.gif');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
	$_EXTKEY,
	'tools',
	'tx_builder_module',
	'',
	array(
		'Backend' => 'index,syntax,build',
	),
	array(
		'access' => 'user,group',
		'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
		'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml',
	)
);
