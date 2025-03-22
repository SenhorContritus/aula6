<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
                margin: 0;
                padding: 0%;
                grid-template-columns: 1;
                grid-template-rows: 10% 80% 30%;
            }
            header{
                width: 100%;
                background-color: rgb(255, 219, 101);
                height: 10%;
            }
            footer{
                width: 100%;
                background-color: rgb(255, 219, 101);
            }
        </style>
        <title>@yield("title")</title>
    </head>
    <body>
        <header>
            <img src="./images/header-icon.jpg" alt="">
        </header>
    