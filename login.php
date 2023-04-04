<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Login</p>
        <form action="halaman.php" method="post" role="form">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="password" autocomplete="off">
            <input type="submit" class="tombol_login" value="Login">
        </form>
    </div> 
</body>
</html>
