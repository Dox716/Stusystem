<?php
//var_dump($_POST);
header('Content-type:text/html;charset=utf-8');
$name=isset($_POST['name']) ? trim($_POST['name']) : '';  //检测是否有$_POST['name']这个下标，判断数据的有效性，并去除空格。
$pwd=isset($_POST['pwd']) ? trim($_POST['pwd']) : '';
$email=isset($_POST['email']) ? trim($_POST['email']) : '';
$tel=isset($_POST['tel']) ? trim($_POST['tel']) : '';
$gender=isset($_POST['gender']) ? trim($_POST['gender']) : '';
//数据验证。书名不能为空，类型不能为空。
if (empty($name) || empty($pwd)){
	//提示同时回到提交页
	header('Refresh:3;url=user_add.html'); //header前不能有输出，header：refresh不会阻止脚本执行
    exit('用户名和密码都不能为空');
}
//数据入库
include_once("public.php");	
//执行sql语句。
	$sql="insert into user values (null,'{$name}','{$pwd}','{$email}','{$tel}','{$gender}')";
    $result=my_query($link,$sql);
//成功操作
//提示同时去到列表页。	
header('Refresh:3;url=user.php'); 
    echo ('新用户添加成功！');
?>