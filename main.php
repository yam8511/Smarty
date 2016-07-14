<?php
/**
 * loads a Smarty.class file
 */
require_once "libs/Smarty.class.php";

/**
 * @var object $smarty
 * set left delimiter
 * and right delimiter
 */
$smarty = new Smarty();
$smarty->left_delimiter = "<?=";
$smarty->right_delimiter = "?>";
