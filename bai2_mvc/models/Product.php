<?php
require_once "models/db.php";
class Product extends DB
{
    public function getProduct()
    {
        $sql = "select * from product";
        return $this->getData($sql);
    }
}

?>