<?php
require_once('lib/print.php');
require_once('lib/sql.php');
$conn = connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 웹페이지에게 UTF-8방식으로 문서를 읽어달라고 요청 -->
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 제목 -->
    <title>author</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <h1 class="saw"><a href="index.php">Ju Chan's WEB</a></h1>
    <div class="toggle">
        <input id="night-day" type="button" value="night" onclick="nightHandle()">
    </div>
    <div id="grid">
        <ol>
            <a href="index.php">Home</a>
            <a href="createAuthor.php">create</a>
        </ol>
        <?php
        $lable_submit = "CreateAuthor";
        $article = array('name' => 'name', 'profile' => 'profile');
        ?>
        <form action="process_create_author.php" method="post">
            <p><input type="text" name="name" placeholder=<?= $article['name'] ?>></p>
            <p><textarea name="profile" id="" cols="30" rows="10" placeholder=<?= $article['profile'] ?>></textarea></p>
            <p><input type="submit" value=<?= $lable_submit ?>></p>
        </form>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            twak();
        </script>
        <!--End of Tawk.to Script-->

        </p>
    </div>
    </div>
</body>

</html>