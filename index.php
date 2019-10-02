<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularz</title>
</head>
<body>
    <form action="" method="POST">
    <p>Podaj wiadomość:</p>
    <textarea type="text" name="message"></textarea>
    <input type="submit" name="button" value="Wyslij">
    <br>

<?php
    $message=$_POST['message'];
    if(isset($_POST['message'])) {
        echo 'Twoja wiadomość to: ' .$message;
    }
?>
</body>
</html>