$(".erji_item ").click(function(){
		var type=$(".content").attr("id");
		
		$(this).css({'color':'#af0716','border-bottom':'0.08rem solid #bf0000'}).siblings().css({'color':'#2f2f2f','border-bottom':'0'});
		if($(this).hasClass("gprice")){

			$.ajax({
				url:"index.php?m=index&c="+type+"&a=getgprice",
				data:{id:$("#erji").attr("class")},
				dataType:"json",
				success:function(r){
					let str="";

					$.each(r,function(index,val){
						str+=`<a href="index.php?m=index&c=${type}&a=getcontent&id=${val.gid}">
			<div id="xianhua">
					<div class="xianhua_left">
						<img src="${val.gthumb}" alt="">
					</div>
				<div class="xianhua_right">
					<div class="xianhua_right_title">
						${val.gname}
						<!-- 守护爱情是甜蜜的琼浆，醉人的醇酒 -->
					
					</div>
					<div class="xianhua_right_price">
						<p class="xianhua_right_price1">${val.gprice}</p>
						<p class="xianhua_right_price2">元</p>
						<p class="xianhua_right_price3">${val.goprice}元</p>
						<p class="xianhua_right_price4">${val.gdiscount}折</p>
					</div>
					<div class="xianhua_right_goumai">
						<p class="xianhua_right_goumai_price" >
							${val.gsells}人已经购买
						</p>
						<a href="index.php?m=index&c=${type}&a=getcontent&id=${val.gid}">
							<p class="xianhua_right_goumai_gouwuche" >&#xe66f;</p>
						</a>
					</div>	
				</div>
			</div>
			</a>`;
					})
					
					$(".content1").html(str);
				}

			});

		}else if($(this).hasClass("gid")){
			
			$.ajax({
				url:"index.php?m=index&c=flower&a=getgid",
				data:{id:$("#erji").attr("class")},
				dataType:"json",
				success:function(r){
					let str="";
					$.each(r,function(index,val){
						str+=`<a href="index.php?m=index&c=${type}&a=getcontent&id=${val.gid}">
			<div id="xianhua">
					<div class="xianhua_left">
						<img src="${val.gthumb}" alt="">
					</div>
				<div class="xianhua_right">
					<div class="xianhua_right_title">
						${val.gname}
						<!-- 守护爱情是甜蜜的琼浆，醉人的醇酒 -->
					
					</div>
					<div class="xianhua_right_price">
						<p class="xianhua_right_price1">${val.gprice}</p>
						<p class="xianhua_right_price2">元</p>
						<p class="xianhua_right_price3">${val.goprice}元</p>
						<p class="xianhua_right_price4">${val.gdiscount}折</p>
					</div>
					<div class="xianhua_right_goumai">
						<p class="xianhua_right_goumai_price" >
							${val.gsells}人已经购买
						</p>
						<a href="index.php?m=index&c=${type}&a=getcontent&id=${val.gid}">
							<p class="xianhua_right_goumai_gouwuche" >&#xe66f;</p>
						</a>
					</div>	
				</div>
			</div>
			</a>`;
					})
					
					$(".content1").html(str);
				}

			});

		}else if($(this).hasClass("gsort")){

			$.ajax({
				url:"index.php?m=index&c=flower&a=getgsort",
				data:{id:$("#erji").attr("class")},
				dataType:"json",
				success:function(r){
					let str="";
					$.each(r,function(index,val){
						str+=`<a href="index.php?m=index&c=${type}&a=getcontent&id=${val.gid}">
			<div id="xianhua">
					<div class="xianhua_left">
						<img src="${val.gthumb}" alt="">
					</div>
				<div class="xianhua_right">
					<div class="xianhua_right_title">
						${val.gname}
						<!-- 守护爱情是甜蜜的琼浆，醉人的醇酒 -->
					
					</div>
					<div class="xianhua_right_price">
						<p class="xianhua_right_price1">${val.gprice}</p>
						<p class="xianhua_right_price2">元</p>
						<p class="xianhua_right_price3">${val.goprice}元</p>
						<p class="xianhua_right_price4">${val.gdiscount}折</p>
					</div>
					<div class="xianhua_right_goumai">
						<p class="xianhua_right_goumai_price" >
							${val.gsells}人已经购买
						</p>
						<a href="index.php?m=index&c=${type}&a=getcontent&id=${val.gid}">
							<p class="xianhua_right_goumai_gouwuche" >&#xe66f;</p>
						</a>
					</div>	
				</div>
			</div>
			</a>`;
					})
					
					$(".content1").html(str);
				}

			});
		}
})
// console.log(1);
// 			