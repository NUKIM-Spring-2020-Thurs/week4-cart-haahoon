<head>
	<title>呷飽 set chu</title>

	 <?php
    session_start();
    if ( isset($_POST["choice"]) ) {
        $_SESSION["num"] = $_POST["num"];
        $id = $_POST["choice"];  
        $_SESSION["id"] = $id; 
        switch ($id) {
            case "01":
                $_SESSION["name"] = "泡菜";
                $_SESSION["price"] = 180;
                break;
            case "02":
                $_SESSION["name"] = "肉燥麵";
                $_SESSION["price"] = 180;
                break;
            case "03":
                $_SESSION["name"] = "芝麻拌麵";
                $_SESSION["price"] = 130;
                break;   
        }  
        header("Location: addcart.php");  
    }
    ?>

</head>

<meta charset="utf-8">

<body>

<?php

session_start();

if(isset($_SESSION["login"])){

	$date=strtotime("+7 days",time());
	setcookie("ID",$_SESSION["ID"],$date);

}else{
	header('Location:login.php');
}



?>

<form action="http://localhost/catalog.php" method="POST">

<center><img src="https://scontent.frmq1-1.fna.fbcdn.net/v/t1.0-9/90129228_102058074772053_8616159421791207424_o.png?_nc_cat=102&_nc_sid=dd9801&_nc_ohc=dD1DdrmdSEoAX_OamIY&_nc_ht=scontent.frmq1-1.fna&oh=a5370e8ac22e281ddb7512174bbf6838&oe=5EA91E55"  width="50%"> </center></br>

<center>
選擇商品:
<select name="choice">
<option value="01" >泡菜-$180</option>
<option value="02" >肉燥麵-$180</option>
<option value="03" >芝麻拌麵-$130</option>
</select>
<input type="number" max="200" min="0" placeholder="1" name="num" size="2"> <input type="submit" value="訂購"> </br>
</center>


<hr size="5px" align="center" width="100%">
<center>
<a href="http://localhost/catalog.php"> <img src="https://www.moedict.tw/%E5%95%86%E5%93%81%E7%9B%AE%E9%8C%84.png?font=wt064" width="6%"> </a>
<a href="http://localhost/cart.php"> <img src="https://img.51miz.com/Element/00/77/78/68/01e44fbc_E777868_aa1104af.png" width="5%"> </a>
</center>

</body>









