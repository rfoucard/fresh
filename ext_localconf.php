<?php
defined('TYPO3') || exit('Access denied.');
$isFreshActive = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['fresh']['active'] ?? '0';
if($isFreshActive) {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['stylesheets']['fresh'] = 'EXT:fresh/Resources/Public/CSS/fresh.css';
}
