	<script type="text/javascript">	 
	function flushYZM()
	{
		var yzmimg=document.getElementById("yzmflush");
 		var   date=new   Date();   
		yzmimg.src=yzmimg.src+"?"+date.toLocaleString();
	}
 
	<!--		
		function validate(){
			if(document.login.usr.value == ""){
				alert("请输入用户名！");
				document.login.usr.focus();
				return false;
			}
			else if(document.login.psd.value == ""){
				alert("请输入密码！");
				document.login.psd.focus();
				return false;
			}else if(document.login.yzm.value == ""){
				alert("请输入验证码！");
				document.login.yzm.focus();
				return false;
			}
			return true;
		}
		
		function changeImage(a){
			if(a == 0)
				document.getElementById("input3").src="student_login_loginButton_down.jpg";
			else if(a == 1)
				document.getElementById("input3").src="student_login_loginButton_up.jpg";
		}
	//-->
</script>

		 
<div class="login">
<h2 align="center">Emusic Login Here!</h2>
<form class="logform" name="login" action="?pra=login" method="post" onsubmit="return validate();">

<table align="center" cellpadding="0px" cellspacing="0px">
<tr>
	<td class="lf">
	usrname
	</td>
	<td>
		<input type="text" name ="usr"style="width:150px;height:20px;">
	</td>
</tr>
<tr>
	<td class="lf">
	password
	</td>
	<td>
		<input type="password" name="psd" style="width:150px; height:20px;">
	</td>
</tr>
<tr>
	<td class="lf">
	ckcode
	</td>
	<td class="rg">
		<input type=" text" name="yzm" style="width:88px; height:20px;" >
 		<img src="yzm.php" id="yzmflush" onclick="flushYZM();">

	</td>
</tr>
<tr  >
	<td>
		 
	</td>
	<td class="rg2">
		<input id="sub" style="width:50px; height:30px;" type="submit" name="login" value="submit">  
		<input id="reg" style="width:50px; height:30px;"  type="button" name="reg" value="regist">  
	</td>
</tr>
</table>  
</form>
<?php
if(isset($_REQUEST['pra']))
{
	if($_REQUEST['pra']=="login")
	{
		include("core/database.php");
		$str=comp("user",$_POST['usr']);
		 
		$handle=mysql_query($str,$select)or die('querry error!'.mysql_error()); ;
		$row=mysql_fetch_row($handle);
		
		if(mysql_num_rows($handle)==0)
		{
		
			echo "<script type=\"text/javascript\">alert(\" not exsit usr \");</script>";
		}else
		{
		 
			if($row[2]==$_POST['psd'])
			{
				
				if($_SESSION['yzm']==$_POST['yzm'])
				{
					echo "<script type=\"text/javascript\">alert(\"success\");</script>";
					
				}else echo "<script type=\"text/javascript\">alert(\"yzm error!\");</script>";  
			}
			else
			echo   "<script type=\"text/javascript\">alert(\"password error!\");</script>";
 
		}
		

	}
}
?>


</div>