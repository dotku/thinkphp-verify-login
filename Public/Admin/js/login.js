/*��½����ȡ�����ɫ*/
			$(function(){
			$(".login-form").on("focus", "input" , function(){
				$(this).closest('.item').addClass('focus');
			}).on("blur", "input" ,function(){
				$(this).closest('.item').removeClass('focus');
			});
			
			});
			
			//���ύ
    	$(document)
	    	.ajaxStart(function(){
	    		$("button:submit").addClass("log-in").attr("disabled", true);
	    	})
	    	.ajaxStop(function(){
	    		$("button:submit").removeClass("log-in").attr("disabled", false);
	    	});
			
			$(function(){
				//��ʼ��ѡ���û��������
				$("#itemBox").find("input[name=username]").focus();
				
				//ˢ����֤��,��Ҫ�Ȼ�ȡimg��src��ַ
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
					
					function success(data){		//�ص�����
						if(data.status){		//��֤�ɹ��������ת
							window.console ? console.log(data) : '';
							window.location.href = data.url;
						}else{
							//��֤ʧ�ܺ�Ѱ��classΪcheck-tips�ı�ǩ��Ȼ���ӡ��������Ϣ
							self.find(".check-tips").text(data.info);
							//ˢ����֤��
							$(".reloadverify").click();
						}
					}
				});
				

			});
			
