<?php


class Top_Sale
{


    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getDataFromTopSale($table='product'){
        $id ='item_id';
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE {$id}>24 AND item_id<31");

        $resultArray = array();

        //fetch top-sale data one by one
        while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function getData($table='product'){
        $id ='item_id';
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        //fetch top-sale data one by one
        while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getTopProduct($item_id=null,$table='product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id} AND item_id > 24 AND item_id<31");

            $resultArray = array();
            //fetch product data one by one
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
}
?>