<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3tags_test".
 *
 * Auto generated 11-03-2019 21:40
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Test extension for t3tags',
  'description' => 'Extension fixture to provide test setup',
  'category' => '',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '0.1.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '8.7.8-8.7.99',
      't3tags' => '0.1.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:3:{s:14:"ext_tables.sql";s:4:"f28c";s:42:"Configuration/TCA/Overrides/tt_content.php";s:4:"5f26";s:36:"Resources/Public/Icons/Extension.svg";s:4:"e822";}',
);
