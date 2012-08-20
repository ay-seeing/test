function ajax(url,fnResult,fnFailure){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			fnResult(xmlhttp.responseText);
		}else if(xmlhttp.status!=200 && fnFailure){
			fnFailure("数据读取失败");
		}
	}
};