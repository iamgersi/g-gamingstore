<?php


class New_Games
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getDataFromNewGames($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id>31");

        $resultArray = array();


        //fetch newgames data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getNewGame($item_id=null,$table='product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id} AND item_id>31");

            $resultArray = array();
            //fetch product data one by one
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
}