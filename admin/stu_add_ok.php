<?php
//var_dump($_POST);
header('Content-type:text/html;charset=utf-8');
$id=isset($_POST['id']) ? trim($_POST['id']) : '';
$name=isset($_POST['name']) ? trim($_POST['name']) : '';  //检测是否有$_POST['name']这个下标，判断数据的有效性，并去除空格。
$gender=isset($_POST['gender']) ? trim($_POST['gender']) : '';
$email=isset($_POST['email']) ? trim($_POST['email']) : '';
$wechat=isset($_POST['wechat']) ? trim($_POST['wechat']) : '';
$tel=isset($_POST['tel']) ? trim($_POST['tel']) : '';
$site=isset($_POST['site']) ? trim($_POST['site']) : '';
//数据验证。书名不能为空，类型不能为空。
if (empty($id) || empty($name)){
	//提示同时回到提交页
	header('Refresh:3;url=stu_add.html'); //header前不能有输出，header：refresh不会阻止脚本执行
    exit('学号和姓名都不能为空');
}
//数据入库
include_once("public.php");	
//执行sql语句。
	$sql="insert into stu values ('{$id}','{$name}','{$gender}','{$email}','{$wechat}','{$tel}','{$site}')";
    $result=my_query($link,$sql);
//成功操作
//提示同时去到列表页。	
header('Refresh:3;url=stu.php'); 
    echo ('新学生记录添加成功！');
?>