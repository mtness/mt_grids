<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mt_grids".
 *
 * Auto generated 10-01-2018 17:07
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Mtness Gridelements Configuration',
  'description' => 'Gridelements preconfig. Column grids, grids for simple accordions, tabs and content slider.',
  'category' => 'misc',
  'author' => 'Pascal Mayer, Markus Timtner',
  'author_email' => 'typo3@bsdist.ch, markus@timtner.tech',
  'author_company' => '',
  'version' => '1.5.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '11.5.0-11.5.99',
      'gridelements' => '11.5.0-0.0.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'MarkusTimtner\\MtGrids\\' => 'Classes',
    ),
  ),
  'clearcacheonload' => true,
);

