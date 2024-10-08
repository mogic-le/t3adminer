<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(static function() {

    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);

    if ($versionInformation->getMajorVersion() == 11) {
        // registration for v11
        ExtensionManagementUtility::addModule(
            'tools',
            'txt3adminerM1',
            '',
            null,
            [
                'routeTarget' => Jigal\T3adminer\Controller\AdminerController::class . '::main',
                'access' => 'systemMaintainer',
                'name' => 'tools_txt3adminerM1',
                'labels' => 'LLL:EXT:t3adminer/Resources/Private/Language/locallang_mod.xlf',
                'iconIdentifier' => 'adminer-module',
            ]
        );
    }
});
