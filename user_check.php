<?php
//1、接收数据；可以对数据的合法性作判断。
if(isset($_POST['submit']))
{
	$username=isset($_POST['user']) ? trim($_POST['user']) : '';
	$pwd=$_POST['pwd'];
}
//2、数据不合法的处理
if(empty($username))
{
	header('Refresh:3;url=login.html');
	echo"用户名不能为空";
}
include_once 'public.php';
//3、组织Sql语句，如记录存在，则表示有此用户，则登录成功，实现相应的跳转。
$sql="select * from user where name='{$username}' and pwd='{$pwd}'";
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($res);
//var_dump(res);
if(mysqli_num_rows($res) == 1)
{
	//启动session
	$_SESSION['username']=$username;
	$_SESSION['userid']=$row['id'];
	//成功后进行页面的跳转
	echo $username,'欢迎您！进入<a href="user/uindex.html">用户中心</a><br/>';
	echo '点击此处<a href="user_loginout.php">注销</a><br/>';
}
else
{
	//登录失败则返回登录页面
	header('Refresh:3;url=login.html');
	echo"用户名或密码错误，登录失败";
}
?>