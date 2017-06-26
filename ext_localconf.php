<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'DPN.Dmailsubscribe',
    'Fe',
    [
        'Subscription' => 'new, subscribe, confirm, unsubscribe, unsubscribeform, message',
    ],
    [
        'Subscription' => 'new, subscribe, confirm, unsubscribe, unsubscribeform, message',
    ]
);
