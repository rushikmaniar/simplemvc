<?php
/**
 * Created by PhpStorm.
 * User: aakashwin8
 * Date: 020 20-08-2018
 * Time: 08:51 PM
 */
class Database
{
    public $con;

    public function __construct()
    {

    }
    public function dbConn($host,$user,$pas,$db,$port=3306)
    {
        $this->con = mysqli_connect($host,$user,$pas,$db,$port);
    }


    public function custom_query($query)
    {
        return mysqli_query($this->con,$query);
    }

    public function delete($table,$where)
    {
        $delete = "DELETE FROM $table WHERE ";
        if(is_string($where)){
            $delete = $delete." ( ".$where." ) ";
        }
        else{
            $i=0;
            $numItems = count($where);
            foreach ($where as $key=>$val){
                if(++$i === $numItems) {
                    $delete = $delete. $key ." = ".$val;
                }
                else{
                    $delete = $delete. $key ." = ".$val." AND ";
                }
            }
        }
        echo $delete;

    }

}