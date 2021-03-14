<?php
header('Content-type:text/html;charset=utf-8');
$id=isset($_POST['id']) ? intval($_POST['id']) : ''; 
$name=isset($_POST['name']) ? trim($_POST['name']) : '';  //检测是否有$_POST['name']这个下标，判断数据的有效性，并去除空格。
$gender=isset($_POST['gender']) ? trim($_POST['gender']) : '';
$email=isset($_POST['email']) ? $_POST['email'] : '';
$wechat=isset($_POST['wechat']) ? $_POST['wechat'] : '';
$tel=isset($_POST['tel']) ? trim($_POST['tel']) : '';
$site=isset($_POST['site']) ? trim($_POST['site']) : '';
//数据验证。书名不能为空，类型不能为空。
if (empty($id) || empty($name)){
	//提示同时回到提交页
	header('Refresh:3;url=stu_update.php'); //header前不能有输出，header：refresh不会阻止脚本执行
    exit('学号和姓名都不能为空');
}
include_once 'public.php';
//组织sql并更新到数据库
$sql="update stu set id = '{$id}',name = '{$name}',gender = '{$gender}',email = '{$email}',wechat='{$wechat}',tel='{$tel}',site='{$site}' where id={$id}";
my_query($link,$sql);

//提示
header('Refresh:3;url=stu_update.php');
echo '当前学生记录更新成功';
