<?php

// Neue Bezeichnungen für fe_users

t3lib_div::loadTCA('fe_users');

$TCA['fe_users']['columns']['cnum']['label'] = 'LLL:EXT:jl_typo3_fe_users/locallang_db.xml:fe_users.cnum';
$TCA['fe_users']['columns']['city']['label'] = 'LLL:EXT:jl_typo3_fe_users/locallang_db.xml:fe_users.city';
$TCA['fe_users']['columns']['email']['label'] = 'LLL:EXT:jl_typo3_fe_users/locallang_db.xml:fe_users.email';
$TCA['fe_users']['columns']['www']['label'] = 'LLL:EXT:jl_typo3_fe_users/locallang_db.xml:fe_users.www';
$TCA['fe_users']['columns']['title']['label'] = 'LLL:EXT:jl_typo3_fe_users/locallang_db.xml:fe_users.title';
$TCA['fe_users']['columns']['company']['label'] = 'LLL:EXT:jl_typo3_fe_users/locallang_db.xml:fe_users.company';

?>
