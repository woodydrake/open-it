<?php
include_once "../__RootDIR__.php";
include_once $RootDIR."/_include/_header.php";

$admin_id = $_REQUEST["admin_id"];
//$admin_pw = hash("sha256", $_REQUEST["admin_pw"]);
$admin_pw = $_REQUEST["admin_pw"];
$rtn_page = $_REQUEST["rtn_page"];

if( !empty($admin_id) &&  !empty($admin_pw)){

	$sql = "select * from t_member where user_id = '$admin_id'";
	//$sql = "select * from t_member where user_id = '$admin_id' and user_pwd = '$admin_pw' and (level in (2,9) or member_type_h = '1' or member_type_m = '1') and is_able_teaching = 'Y' or user_id = 'admin'";
	$result = mysql_query($sql);
	$affect = mysql_num_rows($result);

	if($affect){
		$row = mysql_fetch_array($result);

		$_SESSION["admin_id"]		= $row["user_id"];
		$_SESSION['admin_nm']		= $row['user_nm'];
		$_SESSION['level']			= $row['level'];
		$_SESSION['teacher_type']	= $row['teacher_type'];

		if($rtn_page == ""){
			$rtn_page = '/admin/member/member_list.php';
		}
		
		AlertMoveReplace("" , $rtn_page);
	}else{
		ErrorBack ("계정 정보를 확인해 주세요.");
	}
}else{
	ErrorBack ("잘못된 접근입니다.");
}
