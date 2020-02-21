<?php
	require_once 'config.php';
	session_start();
	function login(){
		if(empty($_POST['username'])){
			$GLOBALS['message']="请输入用户名";
			return;
		}
		if(empty($_POST['userpassword'])){
			$GLOBALS['message']="请输入密码";
			return;
		}
		$username=$_POST['username'];
		$userpassword=$_POST['userpassword'];
		$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		if(!$conn){
			$GLOBALS['message']="连接失败";
			return;
		}
		$query=mysqli_query($conn,"select username,userpassword from user where username='{$username}' limit 1;");
		$user=mysqli_fetch_assoc($query);
		if(!$user){
			$GLOBALS['message']="用户名不存在";
			return;
		}
		if($user['userpassword']!==$userpassword){
			$GLOBALS['message']="用户名和邮箱不匹配";
			return;
		}
		$_SESSION['is_logined_in']=true;
		$_SESSION['current_login_user']=$user;
		header('Location:/main.php');
	}
	if($_SERVER['REQUEST_METHOD']==='POST'){
		login()	;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="page">
		<div class="header">
			<div class="logo_wrap">
				<div class="logo"></div>
			</div>
		</div>
		<div class="content">
			<div class="content_layout">
				<div class="logo_box_wrap">
					<div class="logo_box">
						<div class="logo_title">密码登录</div>
						<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
							<div class="error" style="<?php echo empty($GLOBALS['message'])?'display:none': 'display:block';?>">
								<i></i>
								<p><?php echo $GLOBALS['message'];?></p>
							</div>
							<div class="username">
								<label for="user"></label>
								<span class="text">会员名/邮箱/手机账号</span>
								<input type="text" name="username" id="user" class="user_kuang">
							</div>
							<div class="password">
								<label for="pass"></label>
								<span><input type="text" id="pass" name="userpassword" class="password_kuang"></span>
							</div>
							<div class="submit-wrap">
								<button type="submit">登录</button>
							</div>
							<ul>
								<li>
									<a href="#"><span></span>微博登录</a>
									<a href="#"><span></span>支付宝登录</a>
								</li>
							</ul>
							<div class="logo_links">
								<a href="#">忘记密码</a>
								<a href="#">忘记会员名</a>
								<a href="zhuce.php">免费注册</a>
							</div>
						</form>
					</div>
				</div>
			</div>
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
	<script src="js/login.js"></script>
</body>
</html>