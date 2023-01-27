<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$s=$obj->fetchdata();
$smartyObj->assign("data",$s);
$smartyObj->display("table.tpl");
?>