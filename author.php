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

        <table border="1" width="70%">

            <td>id</td>
            <td>name</td>
            <td>profile</td>
            <?php
            $sql = "SELECT * FROM author";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $filtered = array(
                    'id' => htmlspecialchars($row['id']),
                    'name' => htmlspecialchars($row['name']),
                    'profile' => htmlspecialchars($row['profile']),

                )
            ?>
                <tr>
                    <td><?= $filtered['id'] ?></td>
                    <td><?= $filtered['name'] ?></td>
                    <td><?= $filtered['profile'] ?></td>
                    <td><a href="author.php?id=<?= $filtered['id'] ?>">update</a></td>
                    <td>
                        <form action="process_delete_author.php" method='post' onsubmit="
                        if(!confirm('sure?')){
                                return false; 
                        }

                        ">
                            <input type="hidden" name='id' value="<?=$filtered['id'] ?>">
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>

            <?php
            }
            ?>
            </tr>

        </table>
        <?php
        $lable_submit = "CreateAuthor";
        $article = array('name' => 'name', 'profile' => 'profile');
        if (isset($_GET['id'])) {
            $filterd_id = mysqli_real_escape_string($conn, $_GET['id']);
            $sql = "SELECT * FROM author WHERE id={$filterd_id}";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $base = basename($filterd_id);
            $article = array('name' => $row['name'], 'profile' => $row['profile']);
            $lable_submit = "UpdateAuthor";
        ?>
            <form action="process_update_author.php" method="post">
                <p><input type="hidden" name='id' value=<?= $_GET['id'] ?>></p>
                <p><input type="text" name="name" placeholder=<?= $article['name'] ?>></p>
                <p><textarea name="profile" id="" cols="30" rows="10" placeholder=<?= $article['profile'] ?>></textarea></p>
                <p><input type="submit" value=<?= $lable_submit ?>></p>
            </form>
        <?php
        }


        ?>

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