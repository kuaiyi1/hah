var t=60;
$(".code").click(function(){
		if(!$(".phone").val()){
			return;
		}
		if(t!=60){
			return;
		}

		$.ajax({
			url:"index.php?m=index&c=members&a=checkphone",
			data:{ phone:$(".phone").val() },

			success:function(r){

			}
		})
		
		var st=setInterval(function(index,val){

			t--;
			var str="";
			str=t+"s后重新获取";
			$(".code").val(str);
			if(t==0){
				clearInterval(st);
				$(".code").val("重新获取");
				t=60;
			}
		}, 1000);
})
// $(".phone").blur(function(){

// 	var phone=$(".phone").val();
// 	$.ajax({
			
// 			data:{ phone:$(".phone").val() },
			
// 			success:function(r){
// 				// $.each(function(index,val){
// 				// 	let str=`<div>val</div>`;
// 				// })
				
// 				console.log(r);
// 				$("#displayerror").html(r);
// 			}
			
// 	})
		
// })
$(".jiegou").validate({
	 rules: {
	 	
      phone:{ 
      	required:true,
      	minlength:11,
      	remote:{
      		url:"index.php?m=index&c=members&a=checkregphone",
      		type:"get" 
      	}
      },

      code: "required",
      password:"required",
      password1:{
      	 required:true,
      	 equalTo: "#password3"
      }
      },
      
      messages:{
      	
      	phone:{ 
      	required:"请输入手机号",
      	minlength:"请输入11位的手机号",
      	remote:"该号码已被注册过"
      	},
      	code: "请输入验证码",
      	password:"请输入密码",
      	password1:{
      		required:"请再次输入密码",
      	 	equalTo: "两次密码不一致"
      	}
      },

      errorPlacement: function(error, element) {
			// Append error within linked label
			 $("#displayerror").html("");
			$( "#displayerror" )
					.append( error );
		}
		





})

