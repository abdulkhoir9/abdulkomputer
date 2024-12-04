<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Visual Reguler 2021</title>
    <style rel="stylesheet" type="text/css">
        .label_input{
            margin-left: 15px;
        }

        .input{
            background: #FDF5CA;
            width: 200px;
            margin-left: 20px;
            margin-bottom: 20px;    
        }

        .box{
            background: #F3F1F5;
            width: 350px;
            height: 200px;
            margin-left: 500px;
        }
        
        #btn_login{
            margin-left: 215px;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="box">
        <form id="form_login" name="form_login" action="Welcome/login" method="POST">
            <h3 align="center">Login</h3>
            <span class="label_input" for="username" >Username : </span>
            <input class="input" type="text" id="username" name="username" placeholder="Masukkan username anda">
            <br>
            <span class="label_input" for="password" >Password : </span>
            <input class="input" type="password" id="password" name="password" placeholder="Masukkan password anda">
            <br>
            <button class="btn_login" type="submit" id="btn_login" name="btn_login">Login</button>
        </form>
    </div>
</body>
</html>