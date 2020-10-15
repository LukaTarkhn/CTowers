<?php

namespace ibuild\base;

use ibuild\Db;

class Model {

    public $attributes = [];
    public $errors = [];
    public $rules =[];

    public function __construct() {
        Db::instance();
    }

    public  function  save($table) {
        $tbl = \R::dispense($table);
        foreach ($this->attributes as $username => $value) {
            $tbl->$username = $value;
        }
        return \R::store($tbl);
    }

    public function update($table, $id){
        $bean = \R::load($table, $id);
        foreach($this->attributes as $name => $value){
            $bean->$name = $value;
        }
        return \R::store($bean);
    }

    public  function load($data) {
        foreach ($this->attributes as $username => $value) {
            if(isset($data[$username])) {
                $this->attributes[$username] = $data[$username];
            }
        }
    }
}