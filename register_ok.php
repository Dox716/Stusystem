<?php
header('Content-type:text/html;charset=utf-8');
//接收数据
$user=isset($_POST['user']) ? trim($_POST['user']) : '';
$pwd=isset($_POST['pwd']) ? $_POST['pwd'] : '';
$repwd=isset($_POST['repwd']) ? trim($_POST['repwd']) : '';
$email=isset($_POST['email']) ? trim($_POST['email']) : '';
$tel=isset($_POST['tel']) ? trim($_POST['tel']) : '';
$gender=isset($_POST['gender']) ? $_POST['gender'] : '';
//验证数据的合法性
if(empty($user) || empty($pwd))
{
	header('Refresh:3;url=register.php');
	exit('用户名和密码不能为空');
}
if($pwd !== $repwd)
{
	header('Refresh:3;url=register.php');
	exit('两次输入的密码不一致，请重新设置密码');
}
//数据入库
include_once ("public.php");
$sql="insert into user values (null,'{$user}','{$pwd}','{$email}','{$tel}','{$gender}')";
$result=my_query($link,$sql);
header('Refresh:3;url=login.html');
echo('注册成功请登录！');
?>