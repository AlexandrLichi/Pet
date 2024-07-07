<?php
namespace Model\CompanyModel;
use Pet\Model\Model;
use Pet\Request\Request;


class CompanyModel extends Model{

    public $table = "company";
    public $insert = false;
    public $join = [''];

    function index(Request $request){

    }
}
?>