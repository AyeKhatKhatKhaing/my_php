<?php require_once "template/core/base.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $url ?>/template/core/assets/css/style.css">
    <meta name="title" content="<?php echo $info['name'] ;?>" />
    <meta name="description" content="<?php echo $info['description'] ;?>" />
</head>

<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>