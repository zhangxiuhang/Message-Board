<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update</title>
<script type="text/javascript" src="<?php echo $js; ?>j_insert.js" ></script>
</head>

<body>
<a href="<?php echo $base; ?>">查看留言</a>
<a href="<?php echo $insert; ?>">添加留言</a>
<?php if($username==""){ ?>
<a href="<?php echo $login; ?>">后台管理</a>
<?php }else{ ?>
<a href="<?php echo $login_out; ?>">退出管理</a>
<?php } ?>
<br />
<h1>修改留言</h1>
<form action="<?php echo $update_ok; ?>" method="post" name="form" onsubmit="return j_submit()" >
<?php $row=$ci_update->row(); ?>
username:<input name="username" type="text" id="username" value="<?php echo $row->username; ?>" /><br />
picture:
<input <?php if (!(strcmp($row->picture,"pic1.gif"))) {echo "checked=\"checked\"";} ?> name="picture" type="radio" value="pic1.gif" /><img src="<?php echo $picture; ?>pic1.gif" />
<input <?php if (!(strcmp($row->picture,"pic2.gif"))) {echo "checked=\"checked\"";} ?> name="picture" type="radio" value="pic2.gif" /><img src="<?php echo $picture; ?>pic2.gif" />
<input <?php if (!(strcmp($row->picture,"pic3.gif"))) {echo "checked=\"checked\"";} ?> name="picture" type="radio" value="pic3.gif" /><img src="<?php echo $picture; ?>pic3.gif" />
<input <?php if (!(strcmp($row->picture,"pic4.gif"))) {echo "checked=\"checked\"";} ?> name="picture" type="radio" value="pic4.gif" /><img src="<?php echo $picture; ?>pic4.gif" />
<br />
title:<input name="title" type="text" id="title" value="<?php echo $row->title; ?>" /><br />
content:
<textarea name="content" cols="50" rows="10"><?php echo $row->content; ?></textarea><br />
<input name="submit" type="submit" value="修改" />
<input name="reset" type="reset" value="重置" />
</form>
</body>
</html>