/*登陆表单获取焦点变色*/
			$(function(){
			$(".login-form").on("focus", "input" , function(){
				$(this).closest('.item').addClass('focus');
			}).on("blur", "input" ,function(){
				$(this).closest('.item').removeClass('focus');
			});
			
			});
			
			//表单提交
    	$(document)
	    	.ajaxStart(function(){
	    		$("button:submit").addClass("log-in").attr("disabled", true);
	    	})
	    	.ajaxStop(function(){
	    		$("button:submit").removeClass("log-in").attr("disabled", false);
	    	});
			
			$(function(){
				//初始化选中用户名输入框
				$("#itemBox").find("input[name=username]").focus();
				
				//刷新验证码,需要先获取img的src地址
				var verifyimg = $(".verifyimg").attr("src");
				$(".reloadverify").click(function(){
					if(verifyimg.indexOf('?')>0){
						$(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
					}else{
						$(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
					}
				});
				
				$("form").submit(function(){
					window.console ? console.log('submit') : '';
					window.console ? console.log(self.serialize()) : '';
					var self=$(this);
					$.post(self.attr("action"),self.serialize(),success,"json");
					return false;
					
					function success(data){		//回调函数
						if(data.status){		//验证成功后进行跳转
							window.console ? console.log(data) : '';
							window.location.href = data.url;
						}else{
							//验证失败后寻找class为check-tips的标签，然后打印出错误信息
							self.find(".check-tips").text(data.info);
							//刷新验证码
							$(".reloadverify").click();
						}
					}
				});
				

			});
			
