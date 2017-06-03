<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板</title>
</head>

<body>
<a href="<?php echo $base; ?>">查看留言</a>
<a href="<?php echo $insert; ?>">添加留言</a>
<a href="<?php echo $register; ?>">用户注册</a>
<?php if($username==""){ ?>
<a href="<?php echo $login; ?>">后台管理</a>
<?php }else{ ?>
<a href="<?php echo $login_out; ?>">退出管理</a>
<?php } ?>
<br />
<h1>留言列表</h1>
<?php echo $links; ?>
<table width=100% >

<?php foreach($ci_get->result() as $row){ ?>
  <tr>
    <td width=20% >usename:<?php echo $row->username; ?></td>
    <th align="center"><?php echo $row->title; ?></th>
    <?php if($username!=""){ ?>
    <td rowspan="3" width=10% >
    <a href="<?php echo $delete.$row->id; ?>">删除留言</a><br />
    <a href="<?php echo $update.$row->id; ?>">修改留言</a>
    </td>
	<?php } ?>
  </tr>
  <tr>
    <td width=20% ><img src="<?php echo $picture.$row->picture; ?>" /></td>
    <td rowspan="2" align="center"><?php echo $row->content; ?></td>
  </tr>
  <tr>
    <td width=20% >times:<?php echo $row->times; ?></td>
  </tr>
  
  
   <tr>
    <td colspan="3" bgcolor="#999999" align="center">——世界将由我来分割——</td>
  </tr>
  
<?php } ?>
  
</table>


</body>
</html>