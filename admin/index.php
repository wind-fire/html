<?php
 /*
 * 后台操作引导页
 * ============================================================================
 * 版权所有: 优艾网络，并保留所有权利。
 * 网站地址: http://www.uicms.net；
 * 邮箱 admin@uicms.net
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。若要二次开发或用于商业用途的，需要经过作者同意。
 * ============================================================================
*/
define('A_P',dirname(__FILE__).'/');
define('Mdirname', preg_replace("/(.*)\/([^\/]+)/is","\\2",str_replace("\\","/",dirname(__FILE__))) );
require_once A_P.'../source/global.php';
define('ADMIN_TPL','default'); // 后台模板
A::admin_api();
uicms::db();
admin::init();
?>