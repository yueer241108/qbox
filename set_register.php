<?php
require "includes/functions.php";
require "includes/mysql.php";
if($_POST['pw1'] != $_POST['pw2']) die("两次密码输入不匹配");
$db = new mysqli($db_address, $db_username, $db_pw, $db_name);
$cmd = "SELECT * FROM config WHERE id = 1;";
$cfg = $db->query($cmd);
$info = $cfg->fetch_assoc();
if($info['reg_ref_code'] != md5($_POST['rc']) and $info['reg_auth'] == 1) die("邀请码错误");
set_register($_POST['un'], $_POST['pw1'])
?>
