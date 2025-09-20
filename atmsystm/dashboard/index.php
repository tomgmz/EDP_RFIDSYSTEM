<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h5, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Hello <?php echo $_SESSION["user_email"]; ?></h5>
    <a href="../logout.php">Logout</a>
</body>
</html>