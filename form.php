<?php
/**
 * include main.php
 */
require_once 'main.php';

/**
 * declare css, javascript file
 */
$smarty->assign("css", ['index.css', ]);
$smarty->assign("js",['request.js',]);
/**
 * assign the custom variable
 */
$smarty->assign("title","Hello Smarty");
$smarty->assign("name","Zuolar");
$smarty->assign("process", $_SERVER['PHP_SELF'] );
$smarty->assign("send", 0);

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password1'];
}

if (isset($_POST['send'])) {
    if(!empty($username) && !empty($password)){
        $smarty->assign("send",1);
        $smarty->assign("username", $username);
        $smarty->assign("password",$password);
        if($_POST['password1'] != $_POST['password2'])
            $smarty->assign("password","Please comfirm the password");
    }
}

/**
 * display the templates
 */
$smarty->display("header.tpl");
$smarty->display("index.tpl");
$smarty->display("footer.tpl");