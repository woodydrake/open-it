<?
include_once $_SERVER["DOCUMENT_ROOT"]."/__RootDIR__.php";
include_once $RootDIR."/_include/_header.php";
//member_login_check();

$page			= $_REQUEST["page"];
$size			= $_REQUEST["size"];
$schField		= $_REQUEST["schField"];
$schValue		= $_REQUEST["schValue"];

$depth01 = 1;
$depth02 = 1;

if(!$page) $page = 1; //기본 페이지
if(!$size) $size = 10; //기본 페이지

$sch_sql = "";

if($schValue != ""){
	if($schField == ""){
		$sch_sql = " AND ( MEMBER_ID LIKE '%".$schValue."%' OR MEMBER_NAME LIKE '%".$schValue."%' ) ";
	}else{
		$sch_sql = " AND ( ".$schField." LIKE '%".$schValue."%'  ) ";
	}
}

//if($memberType != "") {
//	if($memberType == "1") {
//		$sch_sql .= " and level = '1'";
//	}else{
//		$sch_sql .= " and level = '2'";
//	}
//}

if($stateYn != "") {
	if($stateYn == "Y") {
		$sch_sql .= " and use_yn = 'Y'";
	}else{
		$sch_sql .= " and use_yn = 'N'";
	}
}

if($start_date != "" && $end_date != ""){
	$sch_sql = $sch_sql." AND date_format(reg_dt, '%Y-%m-%d') BETWEEN '".$start_date."' and '".$end_date."' ";
}

//$sql = "SELECT COUNT(*) FROM t_member WHERE level = '1'".$sch_sql."";
$sql = "SELECT COUNT(*) FROM t_member WHERE level = '1'";
$result = mysql_query($sql);
$TotalCnt = mysql_result($result , 0 ,0 );

$getvalue = "schField=".$schField."&schValue=".$schValue."&start_date=".$start_date."&end_date=".$end_date."&size=".$size."&page=".$page."&stateYn=".$stateYn;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include "../_inc/title.php"; ?>
<script type="text/javascript">
$(document).ready(function (){
	$("#schField").val("<?=$schField?>");
	$("#schValue").val("<?=$schValue?>");
	$("#size").val("<?=$size?>");

	$("#start_date").val("<?=$start_date?>");
	$("#end_date").val("<?=$end_date?>");

	$("#start_date").datepicker();
	$("#end_date").datepicker();
});


function fn_delete( member_srl ){
	if(confirm("삭제 하시겠습니까?")){
		$("#SubmitMode").val("del");
		$("#member_srl").val(member_srl);
		$("#schFrm").attr("action" , "./member_proc.php");
		$("#schFrm").submit();
	}
}
function popdate_check(){
	var start = $("#start_date").val().replace("-","");
	start = start.replace("-","");
	var end = $("#end_date").val().replace("-","");
	end = end.replace("-","");
	if(start!="" && end!=""){
		if(start > end){
			alert("종료일이 시작일보다 앞설 수 없습니다.");
			return;
		}
		$("#schFrm").submit();
	}
}
</script>

</head>
<body>
	<div id="wrap">
		<div id="top">
		<? include "../_inc/top.php"; ?>
		</div>

		<div id="colgroup">
			<div id="left">
			<? include "../_inc/member_left.php"; ?>
			</div>
			<!--제목이나 메뉴가 길면 자동으로 늘어나게 했어요~ 글자수 상관없어요-->
			<div id="right">
				<!--위드값은 일부로 밖으로 빼놨어여~ 수정사히려면 수정하셔요 100%하셔도 되요! ie6은 무조껀 _width:770px;니깐 수정하지 마셔요-->
				<div style="width:900px; _width:770px;">
					<h3>회원관리 > 일반 회원관리</h3>
					<!--목록을 더 늘리실수 있어요~ li부분만 늘리셔서 사용하시면 되요-->
					<form name="schFrm" id="schFrm" method="get" action="member_list.php">
						<input type="hidden" name="SubmitMode" id="SubmitMode" value=""/>
						<input type="hidden" name="member_srl" id="member_srl" value=""/>
						<input type="hidden" name="page"  value="<?=$page?>"/>
						<ul class="search">
							<li>
								<p class="tit">가입일</p>
								<p class="select">
									<input type="text" name="start_date" id="start_date" size="14" class="datepicker-input " value="" style="height:25px;" onchange="popdate_check();" readonly/>&nbsp;~&nbsp;
									<input type="text" name="end_date" id="end_date" size="14" class="datepicker-input " value="" style="height:25px;" onchange="popdate_check();" readonly/>
								</p>
							</li>
							<li>
								<p class="tit">상태</p>
								<input type="radio" name="stateYn" id="stateYn1" value="" <?if($stateYn == ""){?>checked<?}?>/><label for="stateYn1"> 전체</label>&nbsp;
								<input type="radio" name="stateYn" id="stateYn2" value="Y" <?if($stateYn == "Y"){?>checked<?}?>/><label for="stateYn2"> Y</label>&nbsp;
								<input type="radio" name="stateYn" id="stateYn3" value="N" <?if($stateYn == "N"){?>checked<?}?>/><label for="stateYn3"> N</label>
							</li>
							<li>
								<p class="tit">검색</p>
								<p class="select">
									<select name="schField" id="schField">
										<option value="">전체</option>
										<option value="user_id">아이디</option>
										<option value="user_nm">이름</option>
										<option value="email">이메일</option>
										<option value="phone">연락처</option>
									</select>
									<input type="text" name="schValue" id="schValue" value="<?=$schValue?>">
									<input type="image" src="../_img/comn/btn_search.gif" width="46" height="20" border="0" alt="" style="width:46px;height:20px;border:0px">
								</p>
							</li>
						</ul>

						<div class="date">
							<p class="SearchDate">검색된 데이터 : <span id="total_cnt"><?=$TotalCnt?></span>건</p>
							<p class="DateView">
								<select name="size" id="size" onchange="schFrm.submit()">
									<option value="10">10개씩 보기</option>
									<option value="20">20개씩 보기</option>
									<option value="30">30개씩 보기</option>
									<option value="50">50개씩 보기</option>
								</select>
							</p>
						</div>
					</form>

					<table cellpadding="0" cellspacing="0" class="list01">
					  <colgroup>
						<col width="4%"/>
						<col width="4%"/>
						<col width="8%"/>
						<col width="8%"/>
						<col width="10%"/>
						<col width="10%"/>
						<col width="8%"/>
						<col width="8%"/>
						<col width="10%"/>
						<col width="10%"/>
						<col width="6%"/>
						<col width="12%"/>
					  <colgroup>
					  <tr class="tit">
						<th>No</th>
						<th><input type="checkbox" /></th>
						<th>ID</th>
						<th>이름</th>
						<th>Level</th>
						<th>핸드폰</th>
						<th>이메일</th>
						<th>가입일</th>
						<th>핸드퀼트</th>
						<th>머신퀼트</th>
						<th>사용여부</th>
						<th>수정</th>
					  </tr>
<?
					if($TotalCnt > 0){
						if($page > ceil($TotalCnt / $size)) $page = ceil($TotalCnt / $size);
						$start = ($page-1) * $size;
						$count = $TotalCnt - (($page-1) * $size);
						/*$sql = "
							SELECT *,
								date_format(reg_dt, '%Y-%m-%d') as reg_dt,
								(select code_nm from t_code where code_grp_cd = 'T003' and code_cd = t_member.member_type_h limit 0,1) as member_type_h_nm,
								(select code_nm from t_code where code_grp_cd = 'T004' and code_cd = t_member.member_type_h_explain limit 0,1) as member_type_h_explain_nm,
								(select code_nm from t_code where code_grp_cd = 'T003' and code_cd = t_member.member_type_m limit 0,1) as member_type_m_nm,
								(select code_nm from t_code where code_grp_cd = 'T004' and code_cd = t_member.member_type_m_explain limit 0,1) as member_type_m_explain_nm
							FROM
								t_member WHERE level ='1'".$sch_sql."
							ORDER BY
								reg_dt DESC
							LIMIT ".$start.",".$size;*/

						$sql = "SELECT * FROM `t_member` WHERE level = '1'";

						$result = mysql_query($sql);

						echo $result;

						while($row = mysql_fetch_array($result )){
							$member_email	= explode( '@',$row["user_email"] );
?>
							<tr onMouseOver="this.className='pic_on'" onMouseOut="this.className='pic_off'">
								<td><?=$count--?></td>
								<td><input type="checkbox" /></td>
								<td><a href="member_view.php?member_srl=<?=$row["member_srl"]?>&<?=$getvalue?>&page=<?=$page?>"><?=$row["user_id"]?></a></td>
								<td><a href="member_view.php?member_srl=<?=$row['member_srl']?>&<?=$getvalue?>&page=<?=$page?>"><?=$row['user_name']?><?if($row['branch_nm'] != '') echo "(".$row['branch_nm'].")"  ?></a></td>
								<td>
									<? if($row["level"] == "1") { ?>
										회원
									<? } else {?>
										강사
									<?}?>
								</td>
								<?
									$tempTelNumber = $row['user_phone'];
								?>
								<td>
									<? if($row['user_phone'] != "") { ?>
										<?=$tempTelNumber?>
									<? } ?>
								</td>
								<td><?=$row['user_email']?></td>
								<td><?=$row['user_regist_day']?></td>
								<td>
									<? if($row['member_type_h_nm'] != "") { ?>
										<?=$row[member_type_h_nm]?><br>(<?=$row[member_type_h_explain_nm]?>)
									<? } ?>
								</td>
								<td>
									<? if($row['member_type_m_nm'] != "") { ?>
										<?=$row[member_type_m_nm]?><br>(<?=$row[member_type_m_explain_nm]?>)
									<? } ?>
								</td>
								<td><?=$row['use_yn']?></td>

								<!--<td style="<?=$thisStyel?>">
									<?if($level == 9){?><a href="/_admn_/member/memberAdd.php?member_srl=<?=$data['member_srl']?>" class="button"><span>수정</span></a><?}?>
									<?if($level == 2){?><a href="/_admn_/member/memberAddT.php?member_srl=<?=$data['member_srl']?>" class="button"><span>수정</span></a><?}?>
								</td>=-->

								<td class="last">
									<a class="btn_s_gray" href="./member_write.php?member_srl=<?=$row["member_srl"]?>&<?=$getvalue?>&page=<?=$page?>&SubmitMode=upt"><span>수정</span></a>
									<a class="btn_s_gray" href="javascript:fn_delete('<?=$row["member_srl"]?>')"><span>삭제</span></a>
								</td>
							</tr>
<?
						}
					}else{
?>
						<tr><td colspan="10">등록(검색) 결과가 없습니다.</td></tr>
<?
					}
?>
							<tr>
								<td colspan="12" class="num_bg">
									<p class="num"><?paging("$_SERVER[PHP_SELF]?$getvalue", $TotalCnt, $page, $size);?></p>
								</td>
							</tr>
					</table>

					<div class="ListBtn">
						<div id="gBtn1" class="float_right">
							<a href="./member_write.php"><span>등록하기</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<? include "../_inc/footer.php"; ?>
</body>
</html>
