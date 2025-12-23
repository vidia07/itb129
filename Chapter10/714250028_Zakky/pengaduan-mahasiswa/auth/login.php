<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
<div class="container">
    <h2>Login Admin</h2>
    <form method="POST" action="proses_login.php">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button id="kembali"><a href="../index.php">Kembali</a></button>
        <button id="login">Login</button>
    </form>
</div>
</body>
</html>
