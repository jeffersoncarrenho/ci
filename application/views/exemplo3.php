<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemplo 3</title>
</head>
<body>
    <header>
        <h1><?php echo $titulo; ?></h1>
    </header>
    <nav>
        <ul>
        <?php foreach($menu as $item):?>
            <li><?php echo $item;?></li>  
        <?php endforeach;?>
        </ul>
    </nav>
    <div>
        <p><?php echo $text;?></p>
        <p><?php echo $segmento;?></p>
    </div>
    <footer>
        <p>
            &copy; Copyright by John Doe
        </p>
    </footer>
</body>
</html>