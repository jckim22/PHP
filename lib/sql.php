<?php
function connection()
{
    return mysqli_connect("127.0.0.1", "root", "798200", "opentutorials");
}

function errorDectection($conn, $sql)
{

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "<script>
        alert('에러가 발생했습니다. 관리자에게 문의 주세요. (010-2856-4221)');
        </script>";
        error_log(mysqli_error($conn));
    } else {
        // header('Location: /index.php?id=' . $_POST['id']);
        echo "<script>alert('성공했습니다.');
        location.href=\"index.php\"
        </script>";
        // <a href='index.php'>돌아가기</a>";
    }
}
function errorDectectionAuthor($conn, $sql)
{

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "<script>
        alert('에러가 발생했습니다. 관리자에게 문의 주세요. (010-2856-4221)');
        </script>";
        error_log(mysqli_error($conn));
    } else {
        // header('Location: /index.php?id=' . $_POST['id']);
        echo "<script>alert('성공했습니다.');
        location.href=\"author.php\"
        </script>";
        // <a href='index.php'>돌아가기</a>";
    }
}


function selection($conn, $sql)
{
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

function CreateSelectForm($conn){
    $sql = "SELECT * FROM author ";
    $result = mysqli_query($conn,$sql);
    $select_form = '<select>';
    while($row = mysqli_fetch_array($result)){
        $select_form.='<option>'.$row['name'];
    }
    $select_form.='</select>';

    return $select_form;
}