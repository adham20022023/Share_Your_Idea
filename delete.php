<?php require_once('config.php'); ?>
<?php $page_title = 'Delete an idea'; ?>
<?php $page_heading = 'Idea Deletion'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="delete.css">
</head>

<body>
    <h1> <?php echo $page_heading; ?> </h1>
    <p> <a href="index.php" class="link">Go back to the homepage</a> </p>

    <?php if(isset($_GET['id'])): ?>
    <?php $id = $_GET['id'] ?>
    <?php $connection = new PDO($dsn, $dbuser, $dbuserpassword, $options); ?>

    <?php $sql = "DELETE FROM ideastable WHERE id=:id" ?>

    <?php $statement =  $connection->prepare($sql); ?>
    <?php  $statement->bindValue(":id", $id); ?>
    <?php $statement->execute(); ?>

    <div class="success-message">
        <p>The idea is deleted</p>
    </div>
    <?php endif; ?>

</body>

</html>
