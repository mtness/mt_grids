<?php

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
	// frame class icons
	'tx-mtgrids-columns' => [
		'provider' => BitmapIconProvider::class,
		'source' => 'EXT:mt_grids/Resources/Public/Icons/gridlayout_columns.gif'
	],
	'tx-mtgrids-col' => [
		'provider' => BitmapIconProvider::class,
		'source' => 'EXT:mt_grids/Resources/Public/Icons/gridlayout_col2.gif'
	],
	'tx-mtgrids-col2' => [
		'provider' => BitmapIconProvider::class,
		'source' => 'EXT:mt_grids/Resources/Public/Icons/gridlayout_col2.gif'
	],
	'tx-mtgrids-col3' => [
		'provider' => BitmapIconProvider::class,
		'source' => 'EXT:mt_grids/Resources/Public/Icons/gridlayout_col3.gif'
	],
	'tx-mtgrids-col4' => [
		'provider' => BitmapIconProvider::class,
		'source' => 'EXT:mt_grids/Resources/Public/Icons/gridlayout_col4.gif'
	],
	'tx-mtgrids-simpletabs' => [
		'provider' => BitmapIconProvider::class,
		'source' => 'EXT:mt_grids/Resources/Public/Icons/gridlayout_simpletabs.gif'
	],
	'tx-mtgrids-accordion' => [
		'provider' => BitmapIconProvider::class,
		'source' => 'EXT:mt_grids/Resources/Public/Icons/gridlayout_accordion.gif'
	],
	'tx-mtgrids-slider' => [
		'provider' => BitmapIconProvider::class,
		'source' => 'EXT:mt_grids/Resources/Public/Icons/gridlayout_slider.gif'
	],
];