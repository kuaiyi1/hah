$.getJSON($("#address").attr("data-src"), function(r){
	 var data=r;
	 
	var str="";
	 str="<option value='未选择'>请选择省</option>";
	 let name=$("#province").val();
	 
		data.forEach(function(val,index){
			if(name===`${val.name}`){
	 	str+=`<option selected>${val.name}</option>`;}
	 	else{
	 		str+=`<option >${val.name}</option>`;
	 	}
	 });
		
	 $("#province").html(str);
	 var pindex;
	 $("#province").change(function(val,index){
	 	var str="";
	 	 pindex=this.selectedIndex-1;
	 	 
	 	 str="<option value='未选择'>请选择市</option>";
	 	 var city=data[pindex].city;
	 	 city.forEach(function(val,index){
	 	 	str+=`<option >${val.name}</option>`;
	 	 })
	 	 $("#city").html(str);
	 })
	 
	 var cindex="";
	 $("#city").change(function(val,index){
	 	var str="";
	 	cindex=this.selectedIndex-1;
	 	str="<option value='未选择'>请选择区</option>";
	 	area=data[pindex].city[cindex].area;
	 	area.forEach(function(val,index){
	 		str+=`<option >${val}</option>`;
	 	})
	 	 $("#area").html(str);

	 });
	



});
 