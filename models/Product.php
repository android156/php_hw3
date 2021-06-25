<?php

namespace app\models;

class Product extends Model
{
    public $id;
    public $image;
    public $name;
    public $description;
    public $price;


    public function __construct($image = '', $name = '', $description = '', $price = '')
    {

        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

    }


    protected function getTableName()
    {
        return 'goods';
    }

}

