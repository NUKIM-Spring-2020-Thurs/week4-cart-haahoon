<h2>歡迎來到呷飽setchu</h2><br/>

<?php
if(isset($_COOKIE["ID"])){
	$user=$_COOKIE["ID"];
	echo "歡迎再度光臨".$_COOKIE["ID"];
	setcookie("ID","",time()-3600);
}else{
	echo "來成為小chu吧!";
	$user="";
}

?>

<form action="http://localhost/check.php" method="POST">

請輸入您的帳號:<input type="text" name="id"> <br/>
請輸入您的密碼:<input type="password" name="pwd"> <br/>
<input type="submit">
</form>
