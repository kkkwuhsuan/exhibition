<?php 
error_reporting(0);
$groupname=$_GET[groupname] ;
$day=$_GET[day];
$people=$_GET[people];
$contact=$_GET[contact];
$phone=$_GET[phone];
$mail=$_GET[mail];
$art=$_GET[art];
echo "<ul>";
echo "<li>團體名稱：$groupname</li>";
echo "<li>預定時間：$day</li>";
echo "<li>參加人數：$people</li>";
echo "<li>聯絡人姓名：$contact</li>";
echo "<li>行動電話：$phone</li>";
echo "<li>電子郵件：$mail</li>";
echo "<li>展覽：$art</li>";
echo "</ul>";
 ?>