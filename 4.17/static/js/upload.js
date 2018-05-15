$("#image1").click(function(){
   let file=$("#url1").get(0).files[0];

   if(!file){
       return;
   }
   let fr=new FileReader();
   fr.readAsDataURL(file);
    
   fr.onload=function(){
      $("#url1").attr("data-image",fr.result);
   };
   let fd=new FormData();
   fd.append("file",file);
   $.ajax({
       url: $("#image1").attr("data-url"),
       type:"post",
       data:fd,
       processData:false,
       contentType:false,
       success:function(r){
          if(/^\/\//.test(r)){
              alert("上传成功");
              $("#hidden").val(r);
          }
       }
   })
});
$("#image2").click(function(){
   let files=$("#url2")[0].files;
    if(files.length==0){
      return;
    }
    
    $.each(files,function(index,file){
      let fr=new FileReader();
      fr.readAsDataURL(file); 
      fr.onload=function(){
        
     $("#url2").attr("data-image",fr.result);
      }
    });

    let len=files.length;
     i=0;
     var str="";
    $.each(files,function(index,file){
    let fd = new FormData();
            fd.append("file", file);
             
            $.ajax({
              url:$("#image2").attr("data-url"),
              data:fd,
              type:"post",
              processData:false,
              contentType:false,
              success:function(r){
               
                str+=r+";";
                i++;
                if(i==len){
                  alert("上传成功");
                      $("#hidden1").val(str);}
              }
              


            })  
       })
       
});
