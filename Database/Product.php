<?php

//fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }


    //fetch data using getData method

    public function getDataFromProduct($table = 'product')
    {
        $id = 'item_id';
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE {$id}<=24");

        $resultArray = array();


        //fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    //get product using item id
    public function getProduct($item_id=null,$table='product')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id} AND item_id<=24 ");

            $resultArray = array();
            //fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }

        public function getAllProducts($item_id = null, $table = 'product')
        {
            if (isset($item_id)) {
                $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id} ");

                $resultArray = array();
                //fetch product data one by one
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $resultArray[] = $item;
                }
                return $resultArray;
            }
        }
}

