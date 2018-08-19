<?php
/**
 * Created by PhpStorm.
 * User: rushikwin8
 * Date: 019 19-08-2018
 * Time: 11:06 PM
 */
echo '<pre>';
    print_r($GLOBALS);
echo '</pre>';
$ROOTBASECURL = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$ROOTBASECURL .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('base_url',$ROOTBASECURL);

define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
echo FCPATH;