<?php
include("../inc/conn.php");
$answerid=$_POST['answerid'];
$askid=$_POST['askid'];
checkid($answerid);
checkid($askid);

$rs = query("select jifen from caicaicms_ask where id='".$askid."'");
$row = fetch_array($rs);
$jifen=$row['jifen'];

$rs = query("select editor from caicaicms_answer where id='".$answerid."'");
$row = fetch_array($rs);
$answer_editor=$row['editor'];

query("update caicaicms_user set totleRMB=totleRMB+".$jifen." where username='$answer_editor'");//发问题时就给发布者扣积分
query("insert into caicaicms_pay (username,dowhat,RMB,mark,sendtime) values('$answer_editor','回答赚积分','+".$jifen."','','".date('Y-m-d H:i:s')."')");//记录积分
query("update caicaicms_answer set caina=1 where id='$answerid'");
query("update caicaicms_ask set typeid=1 where id='$askid'");

showmsg('采纳成功',$_SERVER['HTTP_REFERER']);
?>