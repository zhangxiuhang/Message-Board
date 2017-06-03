<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<script type="text/javascript" src="<?php echo $js; ?>j_login.js" ></script>
</head>

<body>
<a href="<?php echo $base; ?>">查看留言</a>
<a href="<?php echo $insert; ?>">添加留言</a>
<a href="<?php echo $login; ?>">后台管理</a>
<br />
<h1>注册页面</h1>

<script>
var base_url = "<?=$base; ?>";
</script>


<form action="<?php echo $base; ?>zhuce_ok/" method="post" name="form" onsubmit="z_submit()">
请输入用户名:<input type="text" name="username"/><br />
请输入密码&nbsp&nbsp&nbsp:<input type="password" name="password"/><br />
<input name="submit" type="submit" id="submit" value="注册" />
<!--  
<input name="reset" type="reset" id="reset" value="重置" />
-->
</form>

</body>
</html>