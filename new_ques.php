<center><h1><font color = "blue">新建问题！</font></h1></center><br/>
<?php error_reporting(E_ALL^E_NOTICE); ?>
<form method = "post" action = "set_new_ques.php">
<center>请输入对方的用户名：<input type = "text" name = "username" value = "<?php echo $_GET['target_un']; ?>"></center><br/>
<center>请输入问题：<input type = "text" name = "ques"></center><br/>
<center><input type = "submit" value = "下一步"></center>
</form>
