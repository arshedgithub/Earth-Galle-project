<html>
<head>
    <title>Formt</title>
    <style>
        form {
            border: 1px solid black;
            border-radius: 10px;
            padding: 15px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Earth Bit Galle</h1>
    <form action="server.php" method="post">
        Name : <input type="text" name="name" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>"><br><br>
        Password : <input type="password" name="pwd" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>"><br><br>
        <input type="checkbox" name="remember"> Remember me<br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>