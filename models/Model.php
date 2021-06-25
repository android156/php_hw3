<?php

namespace app\models;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{


    abstract protected function getTableName();


    public function getOne($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";

        //return DB::getInstance()->queryOne($sql, ['id' => $id]);
        return DB::getInstance()->queryOneObject($sql, ['id' => $id], get_called_class());
    }
    public function getAll() {
        $sql = "SELECT * FROM {$this->getTableName()}";

        return DB::getInstance()->queryAll($sql);
    }

    public function insert() {
        $sql = "INSERT INTO {$this->getTableName()} (";
        $column_names = [];
        $sprint_exp = '';
        foreach ($this as $key => $value) {
            if ($key == 'id') continue;
            $params[$key] = $value;
            $column_names[] = $key;
            $obj_values[] = $value;
        }
        $sql .= implode(', ', $column_names);
        $sql .= ") VALUES (:image, :name, :description, :price)";
        var_dump($sql);
        var_dump($params);
        DB::getInstance()->execute($sql, $params);
        $this->id = DB::getInstance()->lastInsertId();
        return $this;
    }

    public function update() {

    }

    public function delete() {

    }

}