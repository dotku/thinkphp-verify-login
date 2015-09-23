<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
	<head>
		<title>后台登陆</title>
		
		<link rel="stylesheet" type="text/css" href="/lab/thinkphp/thinkphp-verify-login/Public/Admin/css/login.css" media="all">
		<script type="text/javascript" src="/lab/thinkphp/thinkphp-verify-login/Public/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="/lab/thinkphp/thinkphp-verify-login/Public/Admin/js/login.js"></script>
	</head>
	<body id="login-page">
		<div id="main-content">
			<!--主体-->
			
			<div class="login-body">
				<div class="login-main">
					<form action="<?php echo U('login');?>" method="post" class="login-form">
						<h3 class="welcome">后台管理平台</h3>
						<div id="itemBox" class="item-box">
							<div class="item">
								<i class="icon-login-user"></i>
								<input type="text" name="username" placeholder="请填写用户名" autocomplete="off" />
							</div>
							<span class="placeholder_copy placeholder_un">请填写用户名</span>
							<div class="item pwd">
								<i class="icon-login-pwd"></i>
								<input type="password" name="password" placeholder="请输入密码" autocomplete="off" />
							</div>
							<span class="placeholder_copy placeholder_pwd">请输入密码</span>
							<div class="item verifycode">
								<i class="icon-login-verifycode"></i>
								<input type="code" name="verify" placeholder="请输入验证码" autocomplete="off" />
								<a class="reloadverify" title="换一张" href="javascript:void(0)">换一张？</a>
							</div>
							<span class="placeholder_copy placeholder_check"></span>
							<div>
								<img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('Public/verify');?>" />
							</div>
						</div>
						<div class="login-btn-panel">
							<button class="login-btn" type="submit">
								<span class="in"><i class="icon-loading"></i>登 录 中 ...</span>
								<span class="on">登录</span>
							</button>
							<div class="check-tips"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		

	</body>
</html>