<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
    <div id ="frm">
        <form action="process.php" method="POST">
            <p>

            <label>USERNAME:</label>
            <input type="text" id="user" name="user"/>
            </p>  
            
            <p>

            <label>PASSWORD:</label>
            <input type="password" id="pass" name="pass"/>
            </p>
            
            <p>

            <input type="submit" id="btn" name="login"/>
            </p>


        </form>
    </div>
</body>
</html>