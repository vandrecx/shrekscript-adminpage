<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        
    </head>

    <body>
        <style>
            .titulo{
                color:black;
            }
            body,
            .signin {
            background-color: #d3d3d3;
            font-family: 'Montserrat', sans-serif;
            color: black;
            font-size: 14px;
            letter-spacing: 1px;
            }

            .login {
            position: relative;
            height: 500px;
            width: 405px;
            margin: auto;
            padding: 60px 60px;
            background: url(https://veja.abril.com.br/wp-content/uploads/2016/06/imperdivel-2010-shrek-original.jpeg?quality=70&strip=info&w=760&resize=1200,800) no-repeat   center center #505050;   
            background-size: cover;
            box-shadow: 0px 30px 60px -5px #000;
            }

            form {
            padding-top: 80px;
            }

            .active {
                border-bottom: 2px solid green;
                color: black;
            }

            .nonactive {
                color: green;
            }
            .nonactive:hover{
                border-bottom: 2px solid green;
                color: black;
                cursor: pointer;
            }

            h2 {
            padding-left: 12px;
            font-size: 22px;
            text-transform: uppercase;
            padding-bottom: 5px;
            letter-spacing: 2px;
            display: inline-block;
            font-weight: 100;
            }

            h2:first-child {
            padding-left: 0px;
            }

            span {
            text-transform: uppercase;
            font-size: 12px;
            opacity: 50;
            position: relative;
            top: -65px;
            transition: all 0.5s ease-in-out;
            text-align: left;
            display: block;
            color: black;
            }

            .text {
            border: none;
            width: 89%;
            padding: 10px 20px;
            display: block;
            height: 15px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0);
            overflow: hidden;
            margin-top: 15px;
            transition: all 0.5s ease-in-out;
            }

            .text:focus {
            outline: 0;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            background-color: green;
            }

            .text:focus + span {
            opacity: 0.6;
            }

            input[type="text"],
            input[type="password"] {
            font-family: 'Montserrat', sans-serif;
            color: #fff;
            }



            input {
            display: inline-block;
            padding-top: 20px;
            font-size: 14px;
            }

            h2,
            span,
            .custom-checkbox {
            margin-left: 20px;
            }

            .custom-checkbox {
            -webkit-appearance: none;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 8px;
            border-radius: 2px;
            display: inline-block;
            position: relative;
            top: 6px;
            }

            .custom-checkbox:checked {
            background-color: rgba(17, 97, 237, 1);
            }

            .custom-checkbox:checked:after {
            content: '\2714';
            font-size: 10px;
            position: absolute;
            top: 1px;
            left: 4px;
            color: #fff;
            }

            .custom-checkbox:focus {
            outline: none;
            }

            label {
            display: inline-block;
            padding-top: 10px;
            padding-left: 5px;
            }

            .signin {
            background-color: green;
            color: #FFF;
            width: 100%;
            padding: 10px 20px;
            display: block;
            height: 39px;
            border-radius: 20px;
            margin-top: 30px;
            transition: all 0.5s ease-in-out;
            border: none;
            text-transform: uppercase;
            }

            .signin:hover {
            background: green;
            box-shadow: 0px 4px 35px -5px green;
            cursor: pointer;
            }

            .signin:focus {
            outline: none;
            }

            hr {
            border: 1px solid rgba(255, 255, 255, 0.1);
            top: 85px;
            position: relative;
            }

            a {
            text-align: center;
            display: block;
            position: relative;
            text-decoration: none;
            color: black;
            }
            .signina{
            background-color: green;
            color: #FFF;
            width: 100%;
            padding: 10px 20px;
            display: block;
            height: 39px;
            border-radius: 20px;
            margin-top: 30px;
            transition: all 0.5s ease-in-out;
            border: none;
            text-transform: uppercase;
            }
            .signina:hover {
            background: green;
            box-shadow: 0px 4px 35px -5px green;
            cursor: pointer;
            }
            .signin:focus {
            outline: none;
            }

        </style>

            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <div class="login">
        <h2 class="active"> Login </h2>

        <h2 class="nonactive"><a href="cadastro.php">cadastrar-se<a></h2>
        
        <form method="POST" action="login.php">

            <input type="email" class="text" name="email" id="email" value="">
            <span>email</span>

            <br>
            
            <br>

            <input type="password" class="text" name="senha" id="senha" value="">
            <span>senha</span>
            <br>
            
            <button class="signin">Fazer Login</button>
        </form>
        <form metho="POST" action="index.php">
                <button class="signina">Voltar para página principal</button>
        </form>

        <p style="color:white">
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </p>

        </div>

    </body>

</html>