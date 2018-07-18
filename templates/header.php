<?php


echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flaffyland</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__nav">
                <div class="header__logo">
                    <a href="index.php"><img src="img/logo-bg.png" alt="HOME" height=42 ></a>
                </div>
                <div class="header__btn_back">
                    <a href="'. $btn[0] . '.php " class="btn btn-success">' . $btn[1] . '</a>
                </div>
            </div>
        </div>
    </header>
';