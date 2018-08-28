<?php
require_once('admin_sqlin.php');
$conf['debug']['level']=5;

/*		数据库配置		*/
$conf['db']['dsn']='mysql:host=116.206.92.137;dbname=dasheng';
$conf['db']['user']='dasheng';
$conf['db']['password']='www.123.com';
$conf['db']['charset']='utf8';
$conf['db']['prename']='z4r5jk12_';

$conf['safepass']='946703';     //后台登陆安全码

$conf['cache']['expire']=0;
$conf['cache']['dir']='_Y6f9=jyyB9.c,ER#-u/';     //前台缓存目录
$conf['url_modal']=2;
$conf['action']['template']='ADMIN.Front/admin/';
$conf['action']['modals']='ADMIN.Back/admin/';
$conf['member']['sessionTime']=15*60;	// 用户有效时长
$conf['node']['access']='http://116.206.92.180:8800';	// node访问基本路径

error_reporting(E_ERROR & ~E_NOTICE);
ini_set('date.timezone', 'Asia/Shanghai');
ini_set('display_errors', 'Off');
