<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Open Sans', sans-serif;
            color: #5B6069;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1170px;
            margin: 0 auto;
        }
        #heading {
            margin-top: 35px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .my-input {
            border-radius: 6px;
            border: 1px solid #666;
            padding: 5px 10px;
            line-height: 2;
            text-align: center;
            width: 100%;
        }
        #login {
            max-width: 400px;
            margin: 0 auto;
        }
        .float-left {
            float: left;
			margin:0;
        }
        .float-right {
            float: right;
			margin:0;
        }
        .btn{
            padding: 5px 15px;
            background-color: blue;
            text-align: center;
            color: #fff;
            border: 0;
            border-radius: 6px;
            line-height: 2;
              }
        .alert{
            background-color: rgb(212, 118, 118);
            color:#ff4646;
            padding:1rem 0.5rem;
            border-radius: 12px 12px 0 0;
            margin-bottom:0.5rem ;
            text-align: center;
            border: 1px solid blue;
        }
        mb-1{
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1 id="heading">
                Login
            </h1>
        </div>
    </header>
    
    <section>
        <div class="container">
            <form id="login" action="../checkPoint.php" method="POST">
                <div class="alert">
                    username or password not ccorrect.
                </div>
                <div class="form-group">
                    <input class="my-input" name="username" type="text" placeholder="username">
                </div>
                <div class="form-group">
                    <input class="my-input" type="password" name="pass" placeholder="password">
                </div>
                <div class="form-group">
                    <div class="float-left">
                        <input id="rememberMe" type="checkbox">
                        <label for="rememberMe">remember me</label>
                    </div>
                    <div class="float-right">
                        <button class="btn" type="submit" value="login">Submit</button><br>
                    </div>
                </div>
            </form>
        </div>
        <div>
<p class="text-center mb-1">
    <a href="#">Forgot passord?</a>
</p>
</div>
    </section>
    <footer>
        <div class="container">
            
        </div>
    </footer>





?>



</body>
</html>