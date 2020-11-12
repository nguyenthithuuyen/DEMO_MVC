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

<a href="index.php?page=add">add</a>
<table border="1px">

    <tr>
        <th>STT</th>
        <th>id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Sinh nhat</th>
    </tr>
    <?php foreach ($all

    as $key => $user): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $user->getId() ?></td>
        <td><?php echo $user->getFirstName() ?></td>
        <td><?php echo $user->getLastName() ?></td>
        <td><?php echo $user->getEmail() ?></td>
        <td><?php echo $user->getBirthday() ?></td>
        <td> <a href="index.php?page=update&id=<?php echo $user->getId()?>">Update</a>
        <td> <a onclick="return confirm('DO YOU REALLY WANT TO DELETE???') " href="index.php?page=delete&id=<?php echo $user->getId()?>">Delete</a>
        </td>
    </tr>
    <?php endforeach;

    ?>

</table>
</body>
</html>
