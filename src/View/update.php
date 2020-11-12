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
<form action="" method="post">
    <fieldset>
        <legend>Update User</legend>
        <input type="text" hidden name="user-id" value="<?php echo $user->getId()?>">
        <p> <?php echo $user->getId()?></p>
        <input type="text" placeholder="First Name" name="user-first" value="<?php echo $user->getFirstName() ?>">
        <input type="text" placeholder="Last Name" name="user-last" value="<?php echo $user->getLastName() ?>" >
        <input type="text" placeholder="Email" name="user-email" value="<?php echo $user->getEmail() ?>">
        <input type="date" placeholder="Birthday" name="user-birth" value="<?php echo $user->getBirthday() ?>">
        <button type="submit">Update</button>
    </fieldset>
</form>
</body>
</html>

