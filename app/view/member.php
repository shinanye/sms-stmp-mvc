
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>member</title>
    <style>
        *{text-align: center;}
        header{
            height: 50px;
            margin: auto;
            background-color: yellow;
            display: flex;
        }
        header>.left{
            width: 79%;
            border: 2px solid white;
        }
        header>.right{
            width: 19%;
            border: 0.5% solid black;
            display: flex;
            justify-content:flex-end;
            align-items:flex-end;
        }
        main{
            height: 500px;
            background-color: pink;
        }
        footer{
            height: 70px;
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <header>
        <div class="left">left</div>
        <div class="right">
            right
        </div>
    </header>
    <main>
        主页
        <strong><?php echo $_POST["user"] ?></strong><span>会员中心</span>
    </main>
    <footer>
        &copy;版权
    </footer>
</body>
</html>