<?php
//书目管理：删除指定书目纪录
header('Content-type:text/html;charset=uft8');
//接收要删除的书目id
$id=isset($_GET['id']) ? (integer)$_GET['id'] : 0 ; //0不会存在。
if ($id == 0){
	header('Refresh:3;url=stu_delete.php');
	echo '当前要删除的学生记录不存在';
	exit();
}
//删除数据
include_once 'public.php';

//组织sql语句并执行
my_query($link,'delete from stu where id ='.$id);

//提示
header('Refresh:3;url=stu.php');
echo '当前学生记录删除成功';
?>