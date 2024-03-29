<?php

########################################################################
# Extension Manager/Repository config file for ext "googlequery".
#
# Auto generated 18-09-2012 11:35
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Google Search Appliance Data Provider - Tesseract project',
	'description' => 'Provides search information from a Google Search Appliance (GSA or mini) or Google Site Search service, and acts as a Data Provider for Tesseract components. More info on http://www.typo3-tesseract.com/',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.3.1',
	'dependencies' => 'tesseract',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Roberto Presedo (Cobweb)',
	'author_email' => 'typo3@cobweb.ch',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'tesseract' => '1.1.1-0.0.0',
			'typo3' => '4.5.0-4.7.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:55:{s:9:"ChangeLog";s:4:"e198";s:10:"README.txt";s:4:"e1f3";s:24:"class.tx_googlequery.php";s:4:"76f9";s:25:"class.tx_googlequery2.php";s:4:"d5b3";s:30:"class.tx_googlequery_cache.php";s:4:"dc1a";s:31:"class.tx_googlequery_parser.php";s:4:"8d64";s:30:"class.tx_googlequery_tools.php";s:4:"06ad";s:16:"ext_autoload.php";s:4:"1e56";s:21:"ext_conf_template.txt";s:4:"8d18";s:12:"ext_icon.gif";s:4:"9eb4";s:14:"ext_icon_2.gif";s:4:"afaf";s:17:"ext_localconf.php";s:4:"a950";s:14:"ext_tables.php";s:4:"97a8";s:14:"ext_tables.sql";s:4:"ffcf";s:15:"flexform_ds.xml";s:4:"a923";s:23:"locallang_constants.xml";s:4:"126d";s:29:"locallang_csh_googlequery.xml";s:4:"7014";s:16:"locallang_db.xml";s:4:"a348";s:7:"tca.php";s:4:"0f8d";s:14:"doc/manual.pdf";s:4:"c731";s:14:"doc/manual.sxw";s:4:"ebe0";s:14:"doc/manual.txt";s:4:"5b76";s:38:"lib/class.tx_googlequery_mimetypes.php";s:4:"fc81";s:32:"pi1/class.tx_googlequery_eid.php";s:4:"3887";s:32:"pi1/class.tx_googlequery_pi1.php";s:4:"1183";s:17:"pi1/locallang.xml";s:4:"d342";s:20:"pi1/locallang_db.xml";s:4:"cef5";s:22:"pi1/res/autosuggest.js";s:4:"fa87";s:19:"pi1/res/clicklog.js";s:4:"af62";s:21:"pi1/res/template.html";s:4:"2daf";s:27:"pi1/res/css/autosuggest.css";s:4:"97b9";s:31:"pi1/res/css/img/ajax-loader.gif";s:4:"f9b7";s:30:"pi1/res/css/img/as_pointer.gif";s:4:"49fb";s:32:"pi1/res/css/img/hl_corner_bl.gif";s:4:"8eb6";s:32:"pi1/res/css/img/hl_corner_br.gif";s:4:"32f0";s:32:"pi1/res/css/img/hl_corner_tl.gif";s:4:"1a1b";s:32:"pi1/res/css/img/hl_corner_tr.gif";s:4:"deb0";s:32:"pi1/res/css/img/ul_corner_bl.gif";s:4:"5916";s:32:"pi1/res/css/img/ul_corner_br.gif";s:4:"bb46";s:32:"pi1/res/css/img/ul_corner_tl.gif";s:4:"2d36";s:32:"pi1/res/css/img/ul_corner_tr.gif";s:4:"e6a5";s:38:"pi1/res/css/img/_source/as_pointer.png";s:4:"cf61";s:37:"pi1/res/css/img/_source/li_corner.png";s:4:"ad65";s:37:"pi1/res/css/img/_source/ul_corner.png";s:4:"5d15";s:28:"res/googlequery_examples.t3d";s:4:"b554";s:17:"res/locallang.xml";s:4:"2c72";s:35:"res/templatedisplay_keymatches.html";s:4:"e017";s:39:"res/templatedisplay_relatedqueries.html";s:4:"b5ff";s:38:"res/templatedisplay_searchresults.html";s:4:"56ab";s:36:"res/templatedisplay_suggestions.html";s:4:"e36c";s:36:"res/icons/add_googlequery_wizard.gif";s:4:"d69c";s:41:"res/icons/icon_tx_googlequery_queries.gif";s:4:"d291";s:42:"res/icons/icon_tx_googlequery_queries2.gif";s:4:"afaf";s:20:"static/constants.txt";s:4:"dc06";s:16:"static/setup.txt";s:4:"b979";}',
	'suggests' => array(
	),
);

?>