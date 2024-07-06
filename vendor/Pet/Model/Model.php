<?php
namespace Pet\Model;
use Pet\DataBase\DB;
use Pet\FrontClasses\FrontClasses;

class Model extends DB{


    static private $search = [];
    static private $nameFunction = '';
    static private $valueFunction = null;

    public function find(array $column = [] , $cross = "AND")
    {

        $select = [];

        foreach($column as $name=>$value){
            $select[] = "`{$name}`='{$this->escapeStr($value)}'";
        }

        return $this->select([], implode(" $cross ", $select));
    }



    public function findOR(array $column = [])
    {
      return $this->find($column, "OR");
    }


    public function findUpOrIn($findUpOrIn):Model|string
    {
        

        if (count(Model::$search) != 0) {

            Model::$nameFunction = '';
            Model::$valueFunction = null;

            $find = $this->find(Model::$search);

            if(count($find) == 0){
    
                $this->insert($findUpOrIn);

                Model::$search = [];
                return 'insert';

            }else{
    
               foreach($find as $row)
               {
                    $findUpOrIn['id'] = $row['id'];
                    $this->update($findUpOrIn);
               }

               Model::$search = [];
               return 'update';
    
            }

        }else{

            Model::$nameFunction = 'findUpOrIn';
            Model::$valueFunction = $findUpOrIn;

            return $this;

        }
    }



     public function findAndUpdate($update):Model|int
     {
         
         if(count(Model::$search) != 0){

            Model::$nameFunction = '';
            Model::$valueFunction = null;
            
            $find = $this->find(Model::$search);
            
            foreach($find as $row){
                $update['id'] = $row['id'];
                $this->update($update);
            }

            Model::$search = [];
            return count($find);

        }else{

            Model::$nameFunction = 'findAndUpdate';
            Model::$valueFunction = $update;

            return $this;
        }
    }

    public function search($search){

        Model::$search = $search;

        $FrontClasses = new FrontClasses;

        return $FrontClasses->classStarted([$this, Model::$nameFunction], Model::$valueFunction);
     }


     
    public function findAndInset($findInsert):bool
    {

        $find = $this->find($findInsert);

        if(count($find) == 0){
            $this->insert($findInsert);
        }

        return count($find) == 0;
    }





}