<?php
// window \ liunx  /
// 定义当前路径分割符
define("DS",DIRECTORY_SEPARATOR);
// 定义本地文件根目录 D:\wamp\www\4.17\
define("ROOT",__DIR__.DS);	
// echo ROOT;
//定义核心类根目录  D:wamp\www\4.17\libs\
define("LIBS_PATH",ROOT."libs".DS);
//smarty编译文件放置的目录 D:\wamp\www\4.17\compile\
define("COMPILE_PATH",ROOT."compile");
//当前应用文件的根目录
define("APP_PATH",ROOT."app".DS);
//mvc 各自的根目录
define("MODEL_PATH",APP_PATH."model".DS );
define("VIEWER_PATH",APP_PATH."viewer".DS);
define("CONTROLLER_PATH",APP_PATH."controller".DS);

//定义当前网站根路径  http://localhost/4.17/
define("WEB_PATH","//".$_SERVER["SERVER_NAME"].substr(
	$_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")+1));
//定义各种静态文件的根路径
define("CSS_PATH",WEB_PATH."static/css");
define("JS_PATH",WEB_PATH."static/js");
define("IMG_PATH",WEB_PATH."static/images");
define("FONT_PATH",ROOT."static/font");
//导入当前应用的核心类。
include LIBS_PATH."db.class.php";
include LIBS_PATH."session.class.php";
include LIBS_PATH."router.class.php";
include LIBS_PATH."code.class.php";
include LIBS_PATH."smarty".DS."libs".DS."Smarty.class.php";
include LIBS_PATH."controller.class.php";
include LIBS_PATH."pager.class.php";
include LIBS_PATH."upload.class.php";
include LIBS_PATH."indexcontroller.class.php";
include LIBS_PATH."Ucpaas.class.php";
define("UPLOAD_PATH",ROOT."upload".DS);
$rooter=new rooter();
$rooter->jump();



