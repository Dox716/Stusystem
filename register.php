<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>新用户注册</title>
	<style type="text/css">
		table{margin:auto;}
		a{text-decoration: none;}
		#size
		{
			height: 30px;
			width: 200px;
		}
		td
		{
			padding-left: 20px;
			vertical-align: middle;
			font: normal 10px/30px "微软雅黑";
		}
		#but
		{
			height: 30px;
			width: 100px;
			margin-left: 50px;
		}
	</style>
</head>

<body background="images/1.webp" style="background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed;">
	<form name="form" method="post" action="register_ok.php">
		<table width="400" border="0">
			<tbody>
				<tr><td height="50" colspan="2"></td></tr>
				<tr><td height="50" align="center" colspan="2" style="font-size: 25px">新用户注册</td></tr>
				<tr>
				<tr style="text-align: right"><td colspan="2" style="font-size: 15px"><a href="login.html">退出注册</a></td></tr>
					<td height="50" align="center" style="text-align: right" style="font-size: 15px">用户名：</td>
					<td><input id="size" type="text" name="user" size="20"></td>	
				</tr>
				<tr>
					<td height="50" align="center" style="text-align: right" style="font-size: 15px">密码：</td>
					<td><input id="size" type="password" name="pwd" size="20"></td>	
				</tr>
				<tr>
					<td height="50" align="center" style="text-align: right" style="font-size: 15px">确认密码：</td>
					<td><input id="size" type="password" name="repwd" size="20"></td>	
				</tr>
				<tr>
					<td height="50" align="center" style="text-align: right" style="font-size: 15px">电子邮箱：</td>
					<td><input id="size" type="email" name="email" size="20"></td>	
				</tr>
				<tr>
					<td height="50" align="center" style="text-align: right" style="font-size: 15px">电话：</td>
					<td><input id="size" type="tel" name="tel" size="20"></td>
				</tr>
				<tr>
					<td height="50" align="center" style="text-align: right" style="font-size: 15px">性别：</td>
						<td>
							<input type="radio" name="gender" value="男" checked>男
							<input type="radio" name="gender" value="女">女
						</td>
				</tr>
				<tr>
					<td height="48" colspan="2">
						<input id="but" type="submit" name="submit" value="提交">
						<input id="but" type="reset" name="reset" value="重置">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>