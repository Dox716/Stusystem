<?php
//var_dump($_POST);
header('Content-type:text/html;charset=utf-8');
$title=isset($_POST['title']) ? trim($_POST['title']) : '';  //检测是否有$_POST['name']这个下标，判断数据的有效性，并去除空格。
$author=isset($_POST['author']) ? trim($_POST['author']) : '';
$content=isset($_POST['content']) ? trim($_POST['content']) : '';
//数据验证。书名不能为空，类型不能为空。
if (empty($title) || empty($author) || empty($content))
{
	//提示同时回到提交页
	header('Refresh:3;url=comment.html'); //header前不能有输出，header：refresh不会阻止脚本执行
    exit('您似乎忘了啥呢，请重新输入');
}
//数据入库
include_once("public.php");	
//执行sql语句。
	$sql="insert into note values (null,'{$author}','{$title}','{$content}')";
    $result=my_query($link,$sql);
//成功操作
//提示同时去到列表页。	
header('Refresh:3;url=comment_view.php'); 
    echo ('信息添加成功！');
?>