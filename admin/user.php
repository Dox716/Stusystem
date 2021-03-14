<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户信息管理</title>
	<style type="text/css">
		table
		{
			margin: auto;
			text-align: center;
		}
		a{text-decoration: none;}
	</style>
</head>

<body background="../images/3.webp" style="background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed;">
	<table width="760" border="0">
		<tbody>
			<tr style="text-align: left"><td height="50" colspan="4" style="font-size: 20px">管理员系统</td></tr>
			<tr style="text-align: right"><td><a href="index.html">返回系统主页</a></td></tr>
			<tr>
				<td height="100" colspan="4"><h1>用&nbsp;户&nbsp;信&nbsp;息</h1></td></tr>
			<tr>
		<table width="760" border="0">
			<tr>
			<td><a href="user_add.html">增加纪录</a></td>
            <td><a href="user_delete.php">删除纪录</a></td>
            <td><a href="user_update.php">修改纪录</a></td>
			</tr>
		</table>
			<tr>
				<td>
					<table width="700" border="1">
						<tbody>
							<tr>
								<td>id</td>
								<td>用户名</td>
								<td>密码</td>
								<td>邮箱</td>
								<td>电话</td>
								<td>性别</td>
							</tr>
			<?php
			include_once("public.php");
			//定义页面大小（m每页显示的记录数）
			$pagesize=10;
			//求总的页码数
			$sql="select * from user";
			$res=mysqli_query($link,$sql);
			$num=mysqli_num_rows($res);
			//echo $num;
			$pagecount=ceil($num/$pagesize);
			//获取当前的页码
			$pageno=isset($_GET['pageno']) ? $_GET['pageno'] : 1 ;
			//获取当前页码范围的设置，最大不能超过总页数，最小不小于1.
			if($pageno>$pagecount)
			{
				$pageno=$pagecount;
			}
			if($pageno<1)
			{
				$pageno=1;
			}
			//echo $pageno;
			//每页开始的记录位置
			$startno=($pageno-1) * $pagesize;
			$query="select * from user";
			$result=my_query($link,$query);
			while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				?>
					<tr height="20">
						<td><?php echo $rows['id'] ?></td>
						<td><?php echo $rows['name']?></td>
						<td><?php echo $rows['pwd']?></td>
						<td><?php echo $rows['email'] ?></td>
						<td><?php echo $rows['tel'] ?></td>
						<td><?php echo $rows['gender'] ?></td>
					</tr>
				<?php
					}
			?>
					<tr>
						<td colspan="6">
							<a href="?pageno=1">首页</a>
							<a href="?pageno=<?php echo $pageno-1;?>">上一页</a>
							<a href="?pageno=<?php echo $pageno+1;?>">下一页</a>
							<a href="?pageno=<?php echo $pagecount;?>">尾页</a>
						</td>
					</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>