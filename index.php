<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require 'smarty-3.1.38/libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

// list of data
include ('data.php');


$smarty->assign("navigation", $navigation);
$smarty->assign("title", "Quick Facts");
$smarty->assign("quickfacts", $quickfactsArr);
$smarty->assign("contactsdata", $contactArr);
$smarty->assign("Name", "Villa Aiko");
$smarty->assign("Title", "Quick Facts");


$smarty->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
$smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
$smarty->assign("option_selected", "NE");
$smarty->display('templates/index.tpl');
