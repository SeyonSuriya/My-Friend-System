<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="../Styles/style.php"/>
    <title>Login</title>
</head>
<body>
    <div class="top">
        <h1>My Friend System</h1>
    </div>
    <br>
    <div>
        
        <form class= "one" action="login_check.php" method="POST">
        <h2>Login Page</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <p>
                <label>Email </label>
                <input type="email" name="email" placeholder="Email"/>
            </p>
            <p>
                <label>Password </label>
                <input type="password" name="password" placeholder="Password"/>
            </p>
            <p>
                <input type="submit" id="btn" name="Login" value="Login"/>
                <input type="reset" id="btn" value="Clear" />
            </p>
            
        </form>
    </div>
    <br>
    <div class="top">
        <h3>copyright &#xa9; setu.kln.ac.lk</h3>
    </div>
    
</body>
</html>
