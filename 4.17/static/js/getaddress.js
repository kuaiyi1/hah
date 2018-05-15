var gprice="";
// var options=$("#gname option:selected");//获取选中的项
// var gid=options.val();
// console.log(gid);
$("#gname").change(function(val,index){
         var gid=$("#gname").val();


        $.ajax({
          type:'post',
          url:'index.php?m=admin&c=orders&a=getprice',
          data:"id="+gid,
          dataType:"json",
          success:function(r){

              $.each(r,function(index,val){
                  var m=`${val.gprice}`;

                  if(m=="0"){
                    gprice=`0`;
                  }else{
                  gprice=`${val.gprice}`;}
                 
              })
          }
        })
});
$("#gname").blur(function(val,index){
      var num=$("#gnumber").val();
      var gp=parseFloat(gprice);
      var g=Math.abs(gp*num);
     
      if(isNaN(g)){

        $("#gprice").val("0");
      }else{
      $("#gprice").val(g);}
})
 $("#gnumber").blur(function(val,index){
      var num=$(this).val();
      var gp=parseFloat(gprice);
      var g=gp*num;

      if(isNaN(g)){
        $("#gprice").val("0");
      }else{
      $("#gprice").val(g);}
})

   $("#username").change(function(val,index){
      var uid=$("#username").val();
     $.ajax({
      type:'post',
      url:'index.php?m=admin&c=orders&a=getaddress',
      data:"id="+uid,
      dataType:"json",
      success:function(r){
      	
          let str=`<option value="未选择">请输入收件人地址</option>`;
          $.each(r,function(index,val){
            str+=`<option value="${val.aid}">${val.area}</option>`;
          })
         
          $("#address1").html(str);
      }

     });
     
   })
