<?php
	require_once 'function.php';
	$GLOBALS['message']="";
	function zhuce(){
		if(empty($_POST['username'])){
			$GLOBALS['message']="请输入用户名";
			return;
		}
		if(empty($_POST['password'])){
			$GLOBALS['message']="请输入密码";
			return;
		}
		$row=execute("insert into user (username,userpassword) values({$_POST['username']},{$_POST['password']})");
		if($row>0){
			$GLOBALS['message']="注册成功";
			header('Location:/login.php');
		}
	}
	if($_SERVER['REQUEST_METHOD']==='POST'){
		zhuce();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/zhuce.css">
	
</head>
<body>
	<div class="page">
		<div class="header">
			<div class="logo"></div>
		</div>
		<div class="content">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="user">
					<label for="username">用户名</label>
					<input type="text" id="username" name="username">
				</div>
				<div class="pass">
					<label for="password">密码</label>
					<input type="text" id="password" name="password">
				</div>
				<div class="zhuce_kuang">
					<button type="submit">注册</button>
				</div>
				<div class="message"><?php echo $GLOBALS['message'];?></div>
			</form>
		</div>
	</div>
	<div class="bottom">
		<div class="bottom_hd">
			<p>
				<a href="#">阿里巴巴集团</a>
				<b>|</b>
				<a href="#">阿里巴巴国际站</a>
				<b>|</b>
				<a href="#">阿里巴巴中国站</a>
				<b>|</b>
				<a href="#">全球速卖通</a>
				<b>|</b>
				<a href="#">淘宝网</a>
				<b>|</b>
				<a href="#">天猫</a>
				<b>|</b>
				<a href="#">聚划算</a>
				<b>|</b>
				<a href="#">一淘</a>
				<b>|</b>
				<a href="#">阿里妈妈</a>
				<b>|</b>
				<a href="#">飞猪</a>
				<b>|</b>
				<a href="#">虾米</a>
				<b>|</b>
				<a href="#">阿里云计算</a>
				<b>|</b>
				<a href="#">云OS</a>
				<b>|</b>
				<a href="#">万网</a>
				<b>|</b>
				<a href="#">支付宝</a>
				<b>|</b>
				<a href="#">来往</a>
			</p>
		</div>
		<div class="bottom_bd">
			<p>
				<a href="#">关于淘宝</a>
				<a href="#">合作伙伴</a>
				<a href="#">营销中心</a>
				<a href="#">廉正举报</a>
				<a href="#">联系客服</a>
				<a href="#">开放平台</a>
				<a href="#">诚征英才</a>
				<a href="#">联系我们</a>
				<a href="#">网站地图</a>
				<a href="#">法律声明及隐私权政策</a>
				<em>© 2018 Taobao.com 版权所有</em>
			</p>
			<p>
				<span>网络文化经营许可证：浙网文[2016]0132-032号</span>
				<b>|</b>
				<span>增值电信业务经营许可证：浙B2-20080224-1</span>
				<b>|</b>
				<span>信息网络传播视听节目许可证：1109364号</span>
			</p>
		</div>
	</div>
</body>
</html>