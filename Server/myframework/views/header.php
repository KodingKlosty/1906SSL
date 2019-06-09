<html>
    <head>
        <title> Week 1 Act 2 SSL </title>
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    </head>
    <body>
        <style> 
            body{
                font-family: 'Lobster', cursive;
            }
            header{
                height: 50px;
                width: 100%;
                background-color: darkorange;
            }
            ul{
                list-style: none;
                text-decoration: none;
                font-size: 16px;

            }

            nav li{
                color: white;
                display: inline-block;
                padding: 15px 25px;
                margin: 0 auto;
                text-decoration: none;

            }
            a{
                text-decoration: none;

            }

            a:hover{
                color: white;
                padding: 15px 15px 30px 15px;
                background-color: blue;
            }

            a:visited{
                color:white
            }

            footer{
                height: 50px;
                width: 100%;
                background-color: darkorange;
                text-align: center;
            }
            footer div{
                font-size: 12px;
                padding: 17px;
            }
            p{
                margin: 50px;
            }
        </style>
        <header>
            <nav>
                <ul>
                    <?
                        for($x=0; $x < count($data); $x++)
                        {
                            echo "<li><a href='#'>$data[$x]</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </header>