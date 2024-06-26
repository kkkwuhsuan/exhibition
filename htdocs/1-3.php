<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>訂票</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
	<style type="text/css">
		

		body{background-color:#D3D3D3;}
		#one{
			background-color: #FFDEAD;
			margin: 50px;
			padding: 50px;
			font-size: 20px;
			font-family: 'Noto Serif TC', serif;
		}
		#four{
			background-color: #F0E68C;
			text-align: center;
			font-size: 15px;
			left: 0;
			width: 100%;
			padding: 5px;
			color: 	#483D8B;

		}			
		header{	
			background-color: #4682B4;
			text-align: center;
			font-size: 40px;
			font-weight: bold;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			padding: 15px;
			color: 	#483D8B;
		}
        h2{text-align: center;}

	</style>

</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<a href="1.html">首頁</a>   
	     <a href="1-1.html">會員註冊</a>
         <a href="1-2.html">活動</a>
         <a href="1-4.php">參館資訊</a>
        
<header>網路訂票</header>
<div id="one">
<form action="1-3.php" method="post">
	姓名:<input type="text" name="name">
	<br>
	電話:<input type="text" name="phone">
	<br>
	電子郵件:<input type="text" name="mail">
	<br>
	<h3>展覽</h3>
	<br>
	<input type="radio" name="art" value="現代驅魔師">現代驅魔師
	<input type="radio" name="art" value="未竟之役">未竟之役
	<input type="radio" name="art" value="住家小宇宙">住家小宇宙

    <h3>票價</h3>
    <br>
	<input type="checkbox" name="price" value="$300">$300一般票
	<br>
	<input type="checkbox" name="price" value="$250">$250學生票
	
	<br>
	<input type="checkbox" name="price" value="$200">$200敬老票

	<br>
	<input type="checkbox" name="price" value="$100">$100兒童票
	
	<br>
	<input type="checkbox" name="price" value="$100">$100愛心票
	
	<h3>日期</h3>
    <select name="date">
    	<option value="1/18">1/18 </option>
    	<option value="1/19">1/19</option>
    	<option value="1/20">1/20</option>
    	<option value="1/21">1/21</option>
    	<option value="1/22">1/22</option>
    </select>
    <br>
    <h3>時間</h3>
    <select name="time">
    	<option value="10:00">10:00</option>
    	<option value="11:00">11:00</option>
    	<option value="12:00">12:00</option>
    	<option value="13:00">13:00</option>
    	<option value="14:00">14:00</option>
    	<option value="15:00">15:00</option>
    	<option value="16:00">16:00</option>
    </select>
    <br>
    <br>

<input type=submit value="訂購" >
</form>
</div>

<br>
<br>
<div id="four">
<h2>搜尋更多展覽資訊</h2>
<form action="https://www.google.com/search" method="get">
	<input type="text" name="q">
	<input type="submit"value="搜尋" name="">
</form>
<a href="https://www.google.com/search?q=現代驅魔師">搜尋現代驅魔師</a>
<br>
<a href="https://www.google.com/search?q=未竟之役">搜尋未竟之役</a>
<br>
<a href="https://www.google.com/search?q=住家小宇宙 ">搜尋住家小宇宙</a>
</div>
<br>
<br>
<?php
error_reporting(0);
$name = $_POST["name"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];
$art = $_POST["art"];
$price = $_POST["price"];
$date = $_POST["date"];
$time = $_POST["time"];
echo "<ul>";
echo "<li>姓名：$name</li>";
echo "<li>電話：$phone</li>";
echo "<li>電子郵件：$mail</li>";
echo "<li>展覽：$art</li>";
echo "<li>票價：$price</li>";
echo "<li>日期：$date</li>";
echo "<li>時間：$time</li>";
echo "</ul>";
?>
</body>
</html>