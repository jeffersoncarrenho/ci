<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo;?></title>
    <style>
        form{
            margin: 10px;
        }
        form label {
            display: block;
        }
        form input[type=text]{
            width:250px;
            border:solid 1px #ggg;
            padding:5px;
        }
        form input[type=password]{
            width:150px;
            border:solid 1px #ggg;
            padding:5px;
        }
        form input[type=text]:focus,
        form input[type=password]:focus{
            border:1px solid #0cf;
        }
        form input[type=submit]{
            border:1px solid #ggg;
            padding: 5px;
            cursor:pointer;
            display:block;
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
    <div>