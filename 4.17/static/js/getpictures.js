$("#image1").click(function(){
    var file=$("#url1").get(0).files[0];

    if(!file){
        return;
    }
   var  fr=new FileReader();
    fr.readAsDataURL(file);

    fr.onload=function(){
        $(".email img").attr("src","");
        $(".email img").attr("src",fr.result);
    };
    var fd=new FormData();
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
})
$("#image2").click(function(){
    console.log(2);
    var file=$("#url2").get(0).files[0];

    if(!file){
        return;
    }
    var  fr=new FileReader();
    fr.readAsDataURL(file);

    fr.onload=function(){
        $(".email img").attr("src","");
        $(".email img").attr("src",fr.result);
    };
    var fd=new FormData();
    fd.append("file",file);
    $.ajax({
        url: $("#image2").attr("data-url"),
        type:"post",
        data:fd,
        processData:false,
        contentType:false,
        success:function(r){
            if(/^\/\//.test(r)){
                console.log(r);
                alert("上传成功");
                $("#hidden2").val(r);
            }
        }
    })
});