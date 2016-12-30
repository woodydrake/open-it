<?php
include_once "../__RootDIR__.php";
include_once $RootDIR."/_include/_header.php";


$_SESSION["ss_admin_id"]	= "";
$_SESSION["ss_admin_name"] = "";
$_SESSION["ss_admin_auth"] = "";
$_SESSION["ss_admin_robot_del"] = "";
AlertMoveReplace("로그아웃 되었습니다." , '/admin/index.php');
