<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改学生信息</title>
<style type="text/css">
	table{ margin:auto;
			text-align:center;
		 }
	a{text-decoration: none;}
</style>
</head>

<body background="../images/3.webp" style="background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed;">
<table width="760" border="0" >
  <tbody>
   <tr style="text-align: left"><td height="50" colspan="4" style="font-size: 20px">管理员系统</td></tr>
			<tr style="text-align: right"><td><a href="stu.php">返回查看学生信息</a></td></tr>
			<tr>
				<td height="200" colspan="4"><h1>修改学生信息</h1></td></tr>
			<tr>
    <tr>
      <td><table width="700" border="1" >
        <tbody>
          <tr>
            <td>学号</td>
            <td>姓名</td>
			<td>性别</td>
			<td>邮箱</td>
            <td>微信</td>
            <td>电话</td>
			<td>籍贯</td>
			<td>操作</td>
          </tr>
     <?php
    include_once("public.php");
	$pagesize=10;//每页的记录的数量
	$res=mysqli_query($link,'select * from stu');
	$num=mysqli_num_rows($res);//获取数据表总的行数
	$pagecount=ceil($num/$pagesize);//$pagecount是总页数
	//获取当前的页码
	$pageno=isset($_GET['pageno']) ? $_GET['pageno'] : 1;
	if($pageno>$pagecount)
	{
		$pageno=$pagecount;
	}
	if($pageno<1)
	{
		$pageno=1;
	}
	$startno=($pageno-1)*$pagesize;//确定起始位置
	$query="select * from stu limit $startno,$pagesize";//获取当前页内容
	$result=mysqli_query($link,$query);
	while ($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	 ?>
          <tr height="20">
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['name'] ?></td>
			<td><?php echo $rows['gender'] ?></td>
			<td><?php echo $rows['email'] ?></td>
			<td><?php echo $rows['wechat'] ?></td>
            <td><?php echo $rows['tel'] ?></td>
            <td><?php echo $rows['site'] ?></td>
            <td>
				<a href="stu_update_ok.php?id=<?php echo $rows['id'];?>">修改</a>
            </td>
          </tr>
			<?php
	}

  ?> 
			<tr>
				<td colspan="8">
				<a href="?pageno=1">首页</a>
				<a href="?pageno=<?php echo $pageno-1;?>">上一页</a>
				<a href="?pageno=<?php echo $pageno+1;?>">下一页</a>
				<a href="?pageno=<?php echo $pagecount;?>">尾页</a>
				</td>
			</tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>
