<?php

namespace App\Model;
class Product
{
protected $productCode;
protected $productName;
protected $price;
protected $productDescription;

    /**
     * Product constructor.
     * @param $productCode
     * @param $productName
     * @param $price
     * @param $productDescription
     */
    public function __construct($productCode, $productName, $price, $productDescription)
    {
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->price = $price;
        $this->productDescription = $productDescription;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param mixed $productDescription
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
    }


}