<?php
	namespace Admin\Controller;
	
	use Think\Contrloller;
	
	class IndexController extends \Think\Controller{
		function index(){
			if (!$_SESSION['user']) {
				$this->redirect("index/login");
			} else {
				$this->display();
			}
		}
		public function login($username = null, $password = null, $verify = null){
			if(IS_POST){
				/*检测验证码*/
				$verify = $_POST['verify'];
			if(!check_verify($verify, 1)){
				$this->error('验证码输入错误！');
			} else {
				
			
			
			/* 数据库查找
            $db = M('user');
			$map['username'] = $username;
			$map['password'] = $password;
			
			$user = $db->where($map)->find();
			
			
			if(!$user){
				$this->error('帐号不存在或被禁用');
			}
			if($user['password'] != $password){
				$this->error('密码错误');
			}
			*/
			$auth = array(
				'uid'		=> $_POST['uid'],
				'username'	=> $_POST['username'],
			);
			
			session('user',$_POST['username']);
			$user = true ? $this -> display('Index/index') : $this->error("登陆失败");
			}
		} else {
			$this->display();
        }
		}
		
		Public function verify(){ //初始化验证码
			$verify = new \Think\Verify();
			$verify->codeSet = '0123456789'; 
			$verify->entry(1);   //entry方法需要传入可标识的信息,entry(1)表示验证码一
		}
	}
?>