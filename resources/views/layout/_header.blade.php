<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
                margin: 0;
                padding: 0%;
                
            }
            body{
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 10% 3% 80% 30%;
                height: 100vh;
            }
            header{
                display: flex;
                width: 100%;
                background-color: rgb(255, 219, 101);
                align-items: center;
                justify-content: center;

            }
            img{
                width: 8vh;
                height: 8vh;
                
            }
            nav{
                display: flex;
                flex-direction: row;
                width: 100%;
                background-color: rgb(201, 172, 78);
                align-items: center;
                justify-content: center;

            }
            a{
                background-color: rgb(252, 239, 196);
                width: 10vh;
                padding: 0.3vh;
                margin: 0.2vh;
                border:none;
                text-decoration: none;
                color:  rgb(153, 128, 46);
                text-align: center;
            }
            main{
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }
            main div{
                height: 80vh;
                width: 80vh;
            }
            main div img{
                height: 80vh;
                width: 80vh;
            }
            
            footer{
                background-color: rgb(255, 219, 101);
                display: flex;
                flex-direction: row;
                justify-content: end;
                align-items: end;
                padding: 1vh
            }
        </style>
        <title>@yield("title")</title>
    </head>
    <body>
        <header>
            <img src="./images/header-icon.jpg" alt="">
        </header>
        <nav>
            <a href="/">Orochi</a>
            <a href="/babiba">babiba</a>
            <a href="/babidi">babidi</a>
        </nav>
    