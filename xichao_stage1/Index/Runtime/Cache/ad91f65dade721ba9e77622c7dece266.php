<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>个人主页</title>
</head>

<body>
	<a href="__APP__/Index/index">首页</a></br>
	<!--没有登录注册链接，能进入此页说明已经登录了-->
	<a href="__APP__/Logout/logout">注销</a></br><a href="__APP__/Person/index"><?php echo ($_SESSION['username']); ?></a></br>
	<p>个人主页</p></br>
	<a href="__APP__/Recruit/index">招募</a>
</body>

</html>