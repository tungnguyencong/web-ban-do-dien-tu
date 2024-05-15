<?php
require_once("model.php");
class TinTuc extends Model
{
    function detail_tintuc($id)
    {
        $query =  "SELECT * from tintuc where `id` = $id ";
         require("result.php");
       return $data;
    }
    function detail_all()
    {
        $query =  "SELECT * from tintuc";
         require("result.php");
       return $data;
    }
}