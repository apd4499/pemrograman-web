<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        .inputan {
            width: 100%;
            padding: 10px 20px;
            margin: 15px 0;
            box-sizing: border-box;
        }
        input[type=submit]  {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px:
            text-decoration: none;
            margin: 15px 0px;
            cursor: pointer;
            width: 100px
        }
    </style>
</head>
<body>
    <p>Login System<p>
    <form method="post" action="konfirmasi.php">
        <label>Username</label>
        <input class="inputan" type="text" name="username">
        <label>Password</label>
        <input class="inputan" type="password" name="password">
        <label>nama depan</label>
        <input class="inputan" type="text" name="namadepan">
        <label>nama belakang</label>
        <input class="inputan" type="text" name="namabelakang">
        <label>email</label>
        <input class="inputan" type="text" name="email">
        <input type="submit" name="tombolsubmit" value="Login">
        <input type="submit" name="tombolsubmit" value="Konfirmasi">
        </form>
</body>
</html>