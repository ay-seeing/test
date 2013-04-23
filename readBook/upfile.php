<?php 
include("header.php");
 ?>

<div class="content">
	<div class="upfiles">
		<div class="upfiles--h">上传文件</div>
		<div class="upfiles--m">
			<form action=<?php echo basename(__FILE__); ?> method="get" name="upfiles">
				<div><input type="file"></div>
				<div class="mt10"><select name="bookType" class="book_type"><option value="0">选择种类</option><option value="jsj">计算机</option></select><span class="red ml5">*</span></div>
				<p class="red" id="typeTip">请选择类型</p>
				<div class="mt10"><input type="text" name="bookTitle" class="bookT" maxsize="5" placeholder="书名"><span class="red ml5">*</span></div>
				<p class="red" id="titleTip">请填写书名，长度不能超过25个中文字，50个英文字</p>
				<div class="mt10"><input type="text" name="publishTime" class="publishTime" placeholder="出版时间"><span class="red ml5"><span class="red">*</span></span></div>
				<p class="red" id="publishTip">请填写该书的出版时间，时间格式“2012-03-25”或“2012.03.25”或“2012/03/25”</p>
				<div class="mt10"><input type="button" value="上传" class="btn" name="upBtn"></div>
			</form>
		</div>
	</div>
</div>
<script>
var oUpFiles=document.forms["upfiles"];
var oType=oUpFiles["bookType"];
var oTypeTip=document.getElementById("typeTip");
var oTitle=oUpFiles["bookTitle"];
var oTitleTip=document.getElementById("titleTip");
var tPublishTime=oUpFiles["publishTime"];
var oPublishTip=document.getElementById("publishTip");
var tUpBtn=oUpFiles["upBtn"];
tUpBtn.onclick=function(){
	if(oType.value==0){
		alert("请选择类型");
		oType.focus();
		//oTypeTip.style.display="block";
		return false;
	}
	if(!oTitle.value){
		oTitle.focus();
		return false;
	}else if(oTitle.value.length>50){
		alert("输入的字符大于25个中文字或50个英文字");
		oTitle.focus();
		return false;
	}
	if(!tPublishTime.value){
		tPublishTime.focus();
		return false;
	}else if(!tPublishTime.value.match(/^\d{4}[-.\/]\d{2}[-.\/]\d{2} *$/)){
		alert("您输入的时间格式不正确");
		tPublishTime.focus();
		return false;
	}
	alert("判断完成");
}
</script>


 <?php 
include("footer.php");
 ?>