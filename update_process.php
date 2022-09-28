<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);
        file_put_contents('data/'.$_POST['title'],$_POST['description']);
        header('Location: /index.php?id='.$_POST['title']);
    ?>
</body>
</html>