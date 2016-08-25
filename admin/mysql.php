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

member::validation();								
$admin_session = session::get('admin_session');		
$session = uicms::json(ption::de($admin_session), true);

if(empty($session['uid']) && member::$user['uid']<>$session['uid'])
{
	die();
}

$db = uicms::_config('db/1');

define('A_DRIVER','mysql'); // [mysql,sqlite,sqlite2] 可选, 默认为mysql
define('A_SERVER',$db['dbhost']); // [localhost, 127.0.0.1, 远程地址] 服务器地址,可带端口号**:3306.
define('A_USERNAME', $db['dbuser']); // 必须定义mysql用户名
define('A_PASSWORD',$db['dbpw']); // mysql密码
define('A_URLQUERY','api=uicms&d=zhongi'); // 手工指定保留参数, 解决url参数冲突问题
define('A_DB', $db['dbname']);  //库
define('A_LEFTCLOSE', 0);
include_once(A_P.'mysql.inc.php'); //引入文件即可.
?>