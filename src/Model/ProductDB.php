<?php


namespace App\Model;


class ProductDB
{
    protected $dbConnect;

    public function __construct()
    {
        $db = new DBConnect();
        $this->dbConnect = $db->connect();
    }

    public function getAll()
    {
        $sql='SELECT *FROM customers';
        $stmt=$this->dbConnect->query($sql);
        $result=$stmt->fetchAll();
        $arr=[];
        foreach ($result as $item){
            $product=new Product($item['customerNumber'],$item['customerName'],$item['phone'],$item['city']);
            array_push($arr,$product);
        }
        return ($arr);
    }

}