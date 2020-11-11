<?php

namespace App\Controller;

use App\Model\ProductDB;

class ProductController
{
    protected $connectProduct;

    public function __construct()
    {
        $this->connectProduct = new ProductDB();
    }

    function viewAll()
    {
        $all = $this->connectProduct->getAll();
        include_once 'src/View/list.php';

    }
}