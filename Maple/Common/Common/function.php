<?php
	/**
	*��̨�����ļ�
	*��Ҫ�����̨����������
	****/
	
	
		/**
 * ����û��Ƿ��¼
 * @return integer 0-δ��¼������0-��ǰ��¼�û�ID
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