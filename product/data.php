<?php


class data
{
    public static $path = "product.json";

    public static function loadProduct()
    {
        $productJson = file_get_contents(self::$path);
        $product = json_decode($productJson);
        return self::convertProduct($product);
    }

    public static function saveProduct($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }

    public static function convertProduct($data)
    {
        $products = [];
        foreach ($data as $item){
            $product = new Products($item->id, $item->name, $item->price, $item->address);
            array_push($products, $product);
        }
        return $products;
    }

    public static function addProduct($product)
    {
        $products = self::loadProduct();
        array_push($products, $product);
        self::saveProduct($products);
    }

    public static function editProductById($id, $newProduct)
    {
        $products = self::loadProduct();
        foreach ($products as $product){
            if ($product->getId()==$id){
                $product->getName($newProduct->getName());
                $product->getPrice($newProduct->getPrice());
                $product->getAddress($newProduct->getAddress());
            }
        }
        self::saveProduct($products);
    }


    public static function getProductById($id)
    {
        $products = self::loadProduct();
        foreach ($products as $product) {
            if ($product->getId() == $id) {
                return $product;
            }
        }
    }

}