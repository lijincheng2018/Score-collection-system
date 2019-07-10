<?php
 	global $_SERVER;
    $uarowser=$_SERVER['HTTP_USER_AGENT'];

 
    if(strstr($uarowser, 'MSIE 6') || strstr($uarowser, 'MSIE 7') || strstr($uarowser, 'MSIE 8'))
    {
      echo'
        <br><br><br><p><font size="5" color="red">对不起，本系统不支持低版本的IE浏览器访问！<br>推荐升级至IE9或者试试谷歌浏览器或火狐浏览器，如果使用双核浏览器（像360浏览器，QQ浏览器等），请切换至极速模式！<br><br></font></p>';
        exit;//全面停止支持
    }
?>

