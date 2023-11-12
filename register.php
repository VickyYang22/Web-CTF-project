<?php 
    session_start();
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
</head>
<body style="background:#222121;">
    <div class="header">
        <h2>
            Register
        </h2>
    </div>
    
    <form action="register_db.php" method ="post">
        <?php include('errors.php');?>
        <?php if(isset($_SESSION['error'])):?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset( $_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?> 
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1" required>
        </div>

        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2" required>
        </div>

        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Submit</button>
        </div>
        <p>Already a member? <a href="login.php"> login</a></p>
    </form>

</body>
</html>