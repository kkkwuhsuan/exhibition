<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>參館資訊</title>
	<style type="text/css">
		body{background-color:#FFF8DC;}
		#one{
			background-color: #E9967A;
			margin: 50px;
			padding: 50px;
			font-weight: bold;
			font-size: 20px;
		}

		#two{
			background-color: #E9967A;
			margin: 50px;
			padding: 50px;
		}	

		#three{
			background-color: #FFA500;
			margin: 50px;
			padding: 50px;
			width: 300px;
		}

		#four{
			background-color: #DEB887;
			text-align: center;
			font-size: 15px;
			left: 0;
			width: 100%;
			padding: 5px;
			color: 	#FFFFE0;

		}			
		header{	
			background-color: #FFA07A;
			text-align: center;
			font-size: 30px;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			padding: 15px;
			color: 	#FFFFE0;

		}
		h2{color: Maroon;}

	</style>
</head>
<body>
	<header>參館資訊</header>
	<br>
	<br>
	<br>
	<br>
	<a href="1.html">首頁</a>   
	     <a href="1-1.html">會員註冊</a>
         <a href="1-2.html">活動</a>
         <a href="1-3.php">訂票</a>
   
    <div id="one">
	<h2>參觀資訊</h2>
	<ol>
		<li>地址：10461臺北市中山區中山北路三段181號</li>
		<li>電話:02-2595-7656</li>
		<li>傳真:02-2594-4104</li>
		<li>電子郵件:info@tfam.gov.tw</li>
	</ol>
	</div>

    <div id="two">
    <h2>觀展須知</h2>
	<ul>
		<li>展場內請勿攜帶食物、飲料、雨傘、寵物入場。</li>
		<li>展場內禁止觸摸展品</li>
		<li>入館參觀請遵守參觀秩序，共同維持參觀品質</li>
		<li>原則上同意在不使用閃光燈及腳架之情況下適度開放拍照</li>
		<li>無論尺寸之雙肩背包、或超過40*30*20公分之隨身包及行李須辦理寄物</li>
	</ul>
	
	<table border="1">
	<tr>
		<td>週一</td>
		<td>週二</td>
		<td>週三</td>
		<td>週四</td>
		<td>週五</td>
		<td>週六</td>
		<td>週日</td>
	</tr>
	<tr>
		<td>休館</td>
		<td>10:00-16:00</td>	
		<td>10:00-16:00</td>
		<td>10:00-16:00</td>
		<td>10:00-16:00</td>
		<td>10:00-16:00</td>
		<td>10:00-16:00</td>
	</tr>
	</table>
	</div>

	<div id="three">
    <h2>聯絡我們</h2>
<form action="1-4.php" method="post">
	姓名：<input type="text" name="name"><br>
	性別：<input type="radio" name="o" value="女">女
	<input type="radio" name="o" value="男">男
	<br>
	電話：<input type="text" name="x"><br>  
	電子郵件：<input type="text" name="y"><br> 
	問題:<input type="checkbox" name="price" value="參觀問題">參觀問題
	<input type="checkbox" name="price" value="展覽問題">展覽問題
	<input type="checkbox" name="price" value="活動問題">活動問題
	<input type="checkbox" name="price" value="其他問題">其他問題
	<br>
	主旨：<input type="text" name="z"><br>
	信件內容：<input type="text" name="a"><br>
	<input type="submit" value="送出">
	<input type="reset" value="重填"><br>
	</div>
</form>
<div  id="four">
<h2>搜尋美術館位置</h2>
<form action="https://www.google.com/search" method="get">
	<input type="text" name="q">
	<input type="submit"value="搜尋" name="">
</form>
<a href="https://www.google.com/search?q=10461臺北市中山區中山北路三段181號">10461臺北市中山區中山北路三段181號</a>
</div>
<br>
<br>
<?php
error_reporting(0);
$name = $_POST["name"];
$o = $_POST["o"];
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$a = $_POST["a"];
echo "<ul>";
echo "<li>姓名：$name</li>";
echo "<li>性別：$o</li>";
echo "<li>電話：$x</li>";
echo "<li>電子郵件：$y</li>";
echo "<li>主旨：$z</li>";
echo "<li>信件內容：$a</li>";
echo "</ul>";
?>
</body>
</html>