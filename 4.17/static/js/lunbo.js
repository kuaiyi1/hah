
  var mySwiper = new Swiper ('.swiper-container', {
        // 轮播图的方向，也可以是vertical方向
      direction:'horizontal',
        loop:true,
        autoplay:true,
         pagination: {
        el: '.swiper-pagination',
        clickable: true

        },
        autoplayDisableOnInteraction :false,
        
    });




  $(".bottom_btn_wenzi").click(function(){

      var gid=$(".product_shuliang").attr("id");
      var gprice=parseInt($(".p").html());
      var num=Math.abs(parseInt($(".product_fangkuang").val()));

      if(isNaN(num))	{
          num=1;
          // gprice=parseFloat(gprice*num);
      }else{
          num=num;
          // gprice=parseFloat(gprice*num);

      }

      location.href="index.php?m=index&c=gouwuche&a=insertgouwuche&gid="+gid+"&gprice="+gprice+"&num="+num;

  })
  $(".bottom_btn1").click(function(){
      var gid=$(".product_shuliang").attr("id");
      var gprice=parseInt($(".p").html());
      var num=Math.abs(parseInt($(".product_fangkuang").val()));

      if(isNaN(num))	{
          num=1;

      }else{
          num=num;


      }

      $.ajax({

          url:"index.php?m=index&c=gouwuche&a=insertgouwuche1&gid="+gid+"&gprice="+gprice+"&num="+num,

          success:function(r){
             if(r=="1"){
                    console.log(1);
             }else{

             }

          }
      });
  })
