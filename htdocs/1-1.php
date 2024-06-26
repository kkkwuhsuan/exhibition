<?php 
error_reporting(0);
$name=$_GET[name] ;
$day=$_GET[day];
$gender=$_GET[gender];
$phone=$_GET[phone];
$email=$_GET[email];
$number=$_GET[number];
$password=$_GET[password];
$password2=$_GET[password];


echo "<ul>";
echo "<li>姓名：$name</li>";
echo "<li>生日：$day</li>";
echo "<li>性別：$gender</li>";
echo "<li>電話：$phone</li>";
echo "<li>電子郵件：$email</li>";
echo "<li>帳號名稱：$number</li>";
echo "<li>密碼：$password</li>";
echo "<li>再次輸入密碼：$password2</li>";
echo "</ul>";
?>