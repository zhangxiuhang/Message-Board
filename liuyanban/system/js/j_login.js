// JavaScript Document
function j_submit(){
	if(document.form.username.value==""){
		alert("username NOT NULL");
		return false;
	}else if(document.form.password.value==""){
		alert("password NOT NULL");
		return false;
	}else{
		return true;
	}
}


//注册页面的JS
function z_submit(){
	if(document.form.username.value==""){
		alert("用户名不能为空");
		return false;
	}else if(document.form.password.value==""){
		alert("密码不能为空");
		return false;
		
	}else{
		alert("注册成功");
		return true;
		
		/*var username = form.username.value;
		var password = form.password.value;*/
		
		/*console.log();
		console.log();
			
		$.post(base_url + 'zhuce_ok/', {username : username,password : password}, function(result) {

			switch (result) {
			case "1":
				//成功添加
				alert('注册成功');
				break;

			case "0":
				//添加失败
				alert('注册失败');
				break;

			}
		});*/
		
	}
}