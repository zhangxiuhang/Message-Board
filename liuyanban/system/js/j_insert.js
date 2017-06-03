// JavaScript Document
function j_submit(){
	picture="";
	for(i=0;i<form.picture.length;i++) {
		if(form.picture[i].checked==true){ 
			picture=1;	
			break;
		} 
	}
	if(document.form.username.value==""||document.form.title.value==""||document.form.content.value==""||picture==""){
		alert("NOT NULL");
		return false;
	}
	else{
		return true;
	}
}