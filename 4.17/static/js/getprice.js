$("#goprice").blur(function(){
	var gdiscount=$("#gdiscount").val();
    var reg=/^[0-1]$|^0\.[0-9]+$/;
    if(reg.test(gdiscount)){

        var gdiscount=$("#gdiscount").val();
    }else{
        var gdiscount=1;
        $("#gdiscount").val(gdiscount);
    }
	
	var goprice=parseFloat($("#goprice").val());

	
	if(isNaN(goprice)||goprice==0){
		
		var goprice=0;
		var gprice=goprice*gdiscount;

	}else{
		
		var gprice=Math.abs(goprice*gdiscount);

	}
	$("#gprice").val(gprice);
	
})
$("#gdiscount").blur(function(){
	var gdiscount=$("#gdiscount").val();
	var reg=/^[0-1]$|^0\.[0-9]+$/;
		if(reg.test(gdiscount)){

            var gdiscount=$("#gdiscount").val();
		}else{
            var gdiscount=1;
            $("#gdiscount").val(gdiscount);
		}
	// if(isNaN(gdiscount)||gdiscount==0){
	// 	var gdiscount=0;
	// }else{
	// 	var gdiscount=$("#gdiscount").val();
	// }
	
	var goprice=parseFloat($("#goprice").val());

	
	if(isNaN(goprice)||goprice==0){
		
		var goprice=0;
		var gprice=goprice*gdiscount;
	}else{
		
		var gprice=Math.abs(goprice*gdiscount);
	}
	$("#gprice").val(gprice);
	
	
})
