<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	/**
	*后台首页
	*@author  Maple <chffengye1102@163.com>
	*/
    public function index(){
       // if(!$auth['uid']){
		//	$this->redirect('Public/login');
	//	}else{
			$this->display();
		//}
    }
}