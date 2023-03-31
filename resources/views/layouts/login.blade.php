<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
    <body>
        <div class="container">
            <form action="" method="POST">
                @csrf
                <div class="usr-lgn">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Username">
                </div>
                <div class="usr-pass">
                    <label for="passoword">Password</label>
                    <input type="text" placeholder="Password">
                </div>
            </form>
        </div>
    </body>
</html>