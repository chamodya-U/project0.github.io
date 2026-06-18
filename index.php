<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cossette+Titre:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Karla:ital,wght@0,200..800;1,200..800&family=Kode+Mono:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');



      /* *{
        border: 1px solid red;
      } */
        body{
            padding: 0;
            margin: 0;
            font-family: "Roboto", sans-serif;
        }

        nav {
            background-color: black;
            color: white;
            width: 200px;
            height: 100vh;
            padding-top: 30px;
        }

        #navbar-profile{
            width: 80px;
            height: 80px;
            
            margin:  auto;
            border-radius: 50%;
            background-color: white;
            border: 2px solid rgba(255, 255, 255, 0.7);
        }

        nav > ul{
            width: 100%;
            list-style-type: none;
        }
        nav>ul>li{
            padding: 10px 0;
            width: 100%;
            transform: translateX(-40px);
            text-align: center;
        }

        nav>ul>li:hover{
            background-color: rgba(255, 255, 255, 0.5);
        }

        

    </style>
</head>
<body>
    <?php
    
    include "./src/components/navbar.php";

    echo "hello";
    
    
    ?>
</body>
</html>