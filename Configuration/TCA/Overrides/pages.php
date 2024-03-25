<?php

defined('TYPO3') || die ('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::registerPageTSConfigFile('mt_grids', 'Configuration/TsConfig/page.tsconfig', 'element configuration for gridelements');
