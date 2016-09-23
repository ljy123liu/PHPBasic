<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/7/16
 * Time: 9:06 PM
 */

/*
 * cookie的生命周期,不设定失效时间,生命周期为浏览器的会话期间,只要关闭浏览器,cookie就会消失.如果设定了失效时间,浏览器会把cookie保存到硬盘中
 */

date_default_timezone_set("PRC");
//通过cookie传递参数
setcookie("name","learn php in jkxy");
//header("Location:a.php");
setcookie("ioser","php");


if (!isset($_COOKIE["visittime"])) {
    setcookie("visittime",date("Y-m-d H:i:s"));
    echo "欢迎你第一次访问网站!"."<p>";
}else {
    setcookie("visittime",date("Y-m-d H:i:s"),time()+60);
    echo "您上次访问网站的时间为: ".$_COOKIE["visittime"]."<p>";
}
echo "您本次次访问网站的时间为: ".date("Y-m-d H:i:s")."<p>";

/*
 * 删除Cookie
 */
//10秒后删除cookie
setcookie("delete",time()-10);


?>



