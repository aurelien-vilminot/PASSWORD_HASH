<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Hash Generator</title>
</head>
<body>

<form method="post" action="">
    <label for="password">
        Enter your password :
    </label>
    <br/>
    <input type="text" name="password" id="password" required>
    <input type="submit" value="Hash">
</form>

<?php
    if(!empty(trim($_POST['password']))) {
        $hashed_password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        echo '<p>Password hashed :</p>';
        echo '<br/>';
        echo '<p style="padding: 1vw; border: crimson solid 0.2vw">' . $hashed_password . '</p>';
    }

?>

</body>
</html>