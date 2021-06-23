<?php


class Product
{
    public $id;
    public $name;
    public $price;
    public $address;


    public function __construct($id, $name, $price, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->address = $address;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price): void
    {
        $this->price = $price;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address): void
    {
        $this->address = $address;
    }

}