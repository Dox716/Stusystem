<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>留言墙</title>
<style type="text/css">
table{ margin:auto;
text-align:center;
}
</style>
</head>

<body background="../images/2.webp" style="background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed;">
<table width="760" border="0" >
  <tbody>
			 	<tr><td height="50" colspan="4"></td></tr>
	   			<tr><td colspan="6" style="text-align:right"><a href="uindex.html">返回系统主页</a></td></tr>
				<tr>
					<td height="50"><h3 align="center" style="font-size: 30px">They say</h3></td>
				</tr>
    <tr>
      <td><table width="700" border="1" >
        <tbody>
          <tr>
            <td>作者</td>
            <td>标题</td>
            <td>内容</td>
          </tr>
     <?php
    include_once("public.php");
	$pagesize=5;//每页的记录的数量
	$res=mysqli_query($link,'select * from note');
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
	$query="select * from note limit $startno,$pagesize";//获取当前页内容
	$result=mysqli_query($link,$query);
	while ($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	 ?>
          <tr height="20">
            <td><?php echo $rows['author'] ?></td>
            <td><?php echo $rows['title'] ?></td>
            <td><textarea name="content" readonly="readonly" rows="5" cols="55"><?php echo $rows['content']?></textarea></td>
          </tr>
          <?php
	}

  ?> 
		<tr>
			<td colspan="6">
			<a href="?pageno=1">首页</a>
			<a href="?pageno=<?php echo $pageno-1;?>">上一页</a>
			<a href="?pageno=<? echo $pageno+1?>">下一页</a>
			<a href="?pageno<?php echo $pagecount;?>">尾页</a>
			</td>
		</tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>