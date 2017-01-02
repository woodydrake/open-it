<?
	include_once "../__RootDIR__.php";
	include_once $RootDIR."/_include/_header.php";

	unset($_SESSION["admin_id"]);
	unset($_SESSION['admin_nm']);
	unset($_SESSION['level']);
	unset($_SESSION['teacher_type']);

	$page = '../index.php';
			
	AlertMoveReplace("" , $page);
?>