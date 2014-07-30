<?php
	/**
	*后台公共文件
	*主要定义后台公共函数库
	****/
	
	
		/**
 * 检测用户是否登录
 * @return integer 0-未登录，大于0-当前登录用户ID
 */
function is_login(){
		$user = session('user');
		if(!$user){
			return $this->redirect('User/login');
		}else{
			return $user['uid'];
		}
	}
	function check_verify($code,$id=1){
		$verify = new \Think\Verify();
		return $verify->check($code,$id);
	}
?>