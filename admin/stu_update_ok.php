
<?php
//书目管理：编辑指定书目纪录
header('Content-type:text/html;charset=uft8');
//接收要编辑的书目id
$id=isset($_GET['id']) ? (integer)$_GET['id'] : 0 ; //0不会存在。
if ($id == 0){
	header('Refresh:3;url=stu_update.php');
	echo '当前要编辑的学生记录不存在';
	exit();	
}

//获取当前id对应的新闻信息
include_once 'public.php';
$sql="select * from stu where id = {$id}";
$res=mysqli_query($link,$sql);
$new=mysqli_fetch_assoc($res);

//加载模板
include_once 'stu_update.html';

?>