<!DOCTYPE html>

<?php
require_once('lib/print.php');
require_once('lib/sql.php');
$conn=connection();
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
    
    // file_put_contents('data/' . $_POST['title'], $_POST['description']);
    // header('Location: /index.php?id=' . $_POST['title']);

    //사용자가 보낸 $_POST 데이터를 그대로 받으면 보안 상의 문제가 생길 수 있다.
    settype($_POST['id'],'integer');
    $filtered = array(
        'id'=>mysqli_real_escape_string($conn,$_POST['id']),
        'title'=>mysqli_real_escape_string($conn,$_POST['title']),
        'description'=>mysqli_real_escape_string($conn,$_POST['description'])

    );
    $sql = "
    UPDATE topic
    SET
    title = '{$filtered['title']}',
    description = '{$filtered['description']}'
    WHERE
    id={$filtered['id']}
    ";
    
    errorDectection($conn,$sql);

    
    // header('Location: /index.php?id='.$_POST['id']);
    
    
    ?>
</body>

</html>