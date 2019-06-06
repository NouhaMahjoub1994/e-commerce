
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue</title>
</head>
<body>
<?php include ('../includes/header.php'); ?>
<form action="login.php" method="post">
    <label> votre pseudo:</label>  <input type="text" name="username" >
    <label> Votre mot de passe:</label>  <input type="password" name="password" >
    <input type="submit" value="se connecter">

</form>
<?php include ('../includes/footer.php'); ?>
</body>
</html>
