<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amautas | Home</title>
    <style>
        /*@import url(//fonts.googleapis.com/css?family=Lato:700);*/

        body {
            margin:0;
            font-family:'Lato', 'Helvetica', sans-serif;
            text-align:center;
            color: #999;
        }

        .welcome {
            width: 300px;
            height: 200px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -150px;
            margin-top: -100px;
        }

        a, a:visited {
            text-decoration:none;
        }

        h1 {
            font-size: 32px;
            margin: 16px 0 0 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Amautas OnLine</h1>
    </header>
    <div class="welcome">
        @yield('content')
    </div>
    <footer>
        <p>Made in Chosica with &lt;3</p>
    </footer>
</body>
</html>
