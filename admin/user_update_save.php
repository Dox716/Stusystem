<?php
header('Content-type:text/html;charset=utf-8');
$id=isset($_POST['id']) ? intval($_POST['id']) : 0; 
$name=isset($_POST['name']) ? trim($_POST['name']) : '';  //检测是否有$_POST['name']这个下标，判断数据的有效性，并去除空格。
$pwd=isset($_POST['pwd']) ? $_POST['pwd'] : '';
$email=isset($_POST['email']) ? $_POST['email'] : '';
$tel=isset($_POST['tel']) ? trim($_POST['tel']) : '';
$gender=isset($_POST['gender']) ? trim($_POST['gender']) : '';
//数据验证。书名不能为空，类型不能为空。
if (empty($name) || empty($pwd)){
	//提示同时回到提交页
	header('Refresh:3;url=user_update.php'); //header前不能有输出，header：refresh不会阻止脚本执行
    exit('用户名和密码都不能为空');
}
include_once 'public.php';
//组织sql并更新到数据库
$sql="update user set name = '{$name}',pwd = '{$pwd}',email = '{$email}',tel='{$tel}',gender='{$gender}' where id={$id}";
my_query($link,$sql);

//提示
header('Refresh:3;url=user_update.php');
echo '当前用户记录更新成功';
