<!DOCTYPE html>

<?php
require_once('lib/print.php');
require_once('lib/sql.php');
$conn = connection();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    settype($_POST['id'], 'integer');
    $filtered = array(
        'id' =>  mysqli_real_escape_string($conn, $_POST['id']),
        'name' => mysqli_real_escape_string($conn, $_POST['name']),
        'profile' => mysqli_real_escape_string($conn, $_POST['profile']),
    );
    $sql = "
    UPDATE author
    SET
    profile = '{$filtered['profile']}',
    name = '{$filtered['name']}'
    WHERE
    id={$filtered['id']}
    ";

    errorDectectionAuthor($conn, $sql);


    // header('Location: /index.php?id='.$_POST['id']);


    ?>
</body>

</html>