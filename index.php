<?php
/**
 * Created by PhpStorm.
 * User: rushikwin8
 * Date: 019 19-08-2018
 * Time: 11:06 PM
 */

$ROOTBASECURL = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
$ROOTBASECURL .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('base_url', $ROOTBASECURL);
define('FCPATH', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define('DS', DIRECTORY_SEPARATOR);

$app = 'app';

define('APPPATH',realpath($app).DS);
$model = '';
if (file_exists('system/main.php')) {
    require_once('system/main.php');
}



