<?php
include_once "data.php";
include_once "Product.php";

$result = data::loadProduct();
if (isset($_REQUEST['page'])){
    if ($_REQUEST['page']=='delete'){
        $id = $_REQUEST['id'];
        array_splice($result, $id,1);
        data::saveProduct($result);
        header("location: product.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    td{
        width: 200px;
    }
</style>
<body>
<a href="add-product.php" style="background: pink; color: white">ADD PRODUCT</a>
<table border="1px">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>price</td>
        <td>Address</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php foreach ($result as $key=>$product) ?>
    <tr>
        <td><?php echo $product->getId() ?></td>
        <td><?php echo $product->getName() ?></td>
        <td><?php echo $product->getPrice() ?></td>
        <td><?php echo $product->getAddress() ?></td>
        <td><a href="edit-product.php?id=<?php echo $product->getId()?>">Edit</a></td>
        <td><a href="product.php?page=delete&id=<?php echo $key?>"> Delete</a></td>
    </tr>
</table>

</body>
</html>
