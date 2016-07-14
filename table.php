<?php
/**
 * Created by PhpStorm.
 * User: Zoular_li
 * Date: 2016/7/12
 * Time: 下午 01:40
 */

require_once "main.php";
/**
 * Manager the HTML info
 */
$smarty->assign("css", []);
$smarty->assign("linkcss", ['http://www.w3schools.com/lib/w3.css', ]);
$smarty->assign("js",[]);
$smarty->assign("title","Table Order System");


/**
 * Connect the Redis
 * and get the "table" Set value
 */
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
if($redis->sCard("order")==0 && !$redis->exists("table")){
    for($i = 5; $i >= 1; $i--){
        $redis->sAdd("table",$i);
    }
}

/**
 * if the form return menu
 */
if(isset($_POST['table']) && !empty($_POST['table'])
    && isset($_POST['menu']) && !empty($_POST['menu'])){
    $temp = $_POST['table'];
    $redis->sRem("table",$temp);
    $redis->sAdd("order",$temp) ;
    $redis->incr("step");

    $tm = $_POST['menu'];
    foreach( $tm as $m){
        $redis->lPush($temp, $m);
    }

}

/**
 * if the form return order
 */
if(isset($_POST['order']) && !empty($_POST['order'])){
    $temp = $_POST['order'];
    $redis->sRem("order",$temp);
    $redis->sAdd("table",$temp) ;
}

/**
 * Convert redis to variable
 */
$step = $redis->get("step");
$table = $redis->sMembers("table");
$order = $redis->sMembers("order");
$menu = ['牛排', '豬排', '雞腿排', '魚排', '羊排'];
$select = [];
foreach ($order as $o) {
    $temp = $redis->lRange($o,0,$redis->lLen($o));
    $select[$o] = $temp;
}


/**
 * assign the Form information
 */
$smarty->assign("step",$step);
$smarty->assign("menu",$menu);
$smarty->assign("table",$table);
$smarty->assign("order",$order);
$smarty->assign("sendTo", $_SERVER['PHP_SELF']);
$smarty->assign("select",$select);

/**
 * Disconnect the Redis
 */
$redis->close();

/**
 * Display the templates
*/
$smarty->display("header.tpl");
$smarty->display("table.html");
$smarty->display("footer.tpl");
