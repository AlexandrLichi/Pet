<?php
namespace Model\UserModel;
use Pet\Model\Model;
use Pet\Request\Request;


class UserModel extends Model{

    public $table = "user";
    public $insert = false;
    public $join = ['company_id'];

    function index(Request $request){

    }
}
?>