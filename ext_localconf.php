<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (FALSE === version_compare(TYPO3_version, '7.6', '<')) {
	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon('fluidcontent-bn_columns_TwoColumnGroup_html', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, array(
	    'source' => 'EXT:bn_columns/Resources/Public/Icons/Content/TwoColumnGroup.svg'
	));
	$iconRegistry->registerIcon('fluidcontent-bn_columns_ThreeColumnGroup_html', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, array(
	    'source' => 'EXT:bn_columns/Resources/Public/Icons/Content/ThreeColumnGroup.svg'
	));
	$iconRegistry->registerIcon('fluidcontent-bn_columns_FourColumnGroup_html', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, array(
	    'source' => 'EXT:bn_columns/Resources/Public/Icons/Content/FourColumnGroup.svg'
	));
}