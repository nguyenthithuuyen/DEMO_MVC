<?php
echo '<pre>';
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
<body>
<table border="1px">

    <tr>
        <th>STT</th>
        <th>product code</th>
        <th>product name</th>
        <th>price</th>
        <th>product description</th>
    </tr>
    <?php foreach ($all

    as $key => $product): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $product->getProductCode() ?></td>
        <td><?php echo $product->getProductName() ?></td>
        <td><?php echo $product->getPrice() ?></td>
        <td><?php echo $product->getProductDescription() ?></td>
    </tr>
    <?php endforeach;

    ?>
</table>
</body>
</html>
