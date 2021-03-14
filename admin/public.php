<?php
header('Content-type:text/html;charset=utf-8');
//连接初始化
$link=mysqli_connect('localhost','root','','db2') or die ('数据库连接失败');
//封装mysql语法错误检查函数并执行
/*
*@param1 $link,数据连接。
*@param2 string $sql，要执行的sql指令。
*@return $res,正确执行完返回的结果，如果sql错误，直接终止。
*/
function my_query($link,$sql){
	//执行sql语句
	$res=mysqli_query($link,$sql);
	//处理可能存在的错误。
	if(!$res){
		echo 'sql执行错误，错误编号为：'.mysqli_errno($link).'<br/>';
		echo 'sql执行错误，错误编号为：'.mysqli_error($link).'<br/>';
		//终止错误继续执行
		exit;
	}
	return $res;
}
//字符集处理；
my_query($link,'set names utf8');
?>