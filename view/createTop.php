<?php
require_once('lib/print.php');
require_once('lib/sql.php');
$conn = connection();


$sql = "SELECT * FROM author ";
$result = mysqli_query($conn, $sql);
$select_form = '<select name="author_id">';
while ($row = mysqli_fetch_array($result)) {
    $select_form .= '<option value="' . $row['id'] . '">' . $row['name'];
}
$select_form .= '</select>';
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
    <title><?php
            print_title($conn);
            ?></title>

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
            <a href="author.php">author</a>
            <a href="create.php">create</a>
            <?php if (isset($_GET['id'])) { ?>
                <a href="update.php?id=<?= $_GET['id']; ?>">update</a>
                <form action="delete_process.php" method='post'>
                    <input type="hidden" name='id' value="<?= $_GET['id'] ?>">
                    <input type="submit" value="delete">
                </form>
            <?php
            }
            ?>
            <p style="margin:0; font-size: 30px; border-bottom:1px solid gray">List</p>
            <?php
            print_list($conn)
            ?>

        </ol>

        <div class="article">
            <form action="create_process.php" method="post">
                <p>

                    <input type="text" name='title' placeholder="Title">
                </p>
                <p>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </p>
                <?= $select_form ?>
                <p>
                    <input type="submit">
                </p>

            </form>

            </p>
        </div>
    </div>
</body>

</html>