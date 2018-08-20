<?php
/**
 * Created by PhpStorm.
 * User: aakashwin8
 * Date: 020 20-08-2018
 * Time: 08:30 PM
 */

    //all Constants and global variables
    require_once 'Constant.php';

    //Config file
    require_once 'Config.php';

    //Database file

        require_once FCPATH.'app/model/Database.php';
        //id Default Database . Connect That Database

        $dbobj = new Database();
        $dbobj->dbConn($db['host'],$db['username'],$db['password'],$db['database']);

        $dbobj->delete('table',array('user_id'=>1,'username'=>'rushik'));





