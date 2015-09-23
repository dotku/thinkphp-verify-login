<?php
	namespace Admin\Controller;
	
	use Think\Contrloller;
	
	class IndexController extends \Think\Controller{
		function index(){
			$this->redirect("index/login");
		}
		public function login($username = null, $password = null, $verify = null){
			if(IS_POST){
				/*检测验证码*/
			if(!check_verify($verify)){
				$this->error('验证码输入错误！');
		}
				
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
			
			$auth = array(
				'uid'		=> $user['uid'],
				'username'	=> $user['username'],
			);
			
			session('user',$auth);
			$user = true ? $this -> display('Index/index') : $this->error("登陆失败");
			
		}else {
				//if(is_login()){
					//$this->redirect('Index/index');
			//	}else{
					$this->display();
			//	}
		//	dump($auth);
		
        }
		}
		
		Public function verify(){ //初始化验证码
			$verify = new \Think\Verify();
			$verify->entry(1);   //entry方法需要传入可标识的信息,entry(1)表示验证码一
		}
	}
?>