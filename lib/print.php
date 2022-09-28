<?php
function print_title()
{
    if (isset($_GET['id'])) {
        echo htmlspecialchars($_GET['id']);
    } else {
        echo 'WEB';
    }
}
function print_list()
{
    $list = scandir('./data');
    $cnt = 0;
    while ($cnt < count($list)) {
        if ($list[$cnt] != '.' && $list[$cnt] != '..') {
            echo "<li><a href=\"index.php?id=$list[$cnt]\"><div class=\"saw active\">$list[$cnt]</div></a></li>";
        }
        $cnt++;
    }
    function print_description()
    {
        if (isset($_GET['id'])) {
            $base = basename($_GET['id']);
            // echo htmlspecialchars(file_get_contents("data/" . $_GET['id']));
            echo strip_tags( file_get_contents("data/" .$base), '<a>,<img>,<iframe>' );
        } else {
            echo strip_tags(file_get_contents("data/WEB"),'<a>,<img>,<iframe>');
        }
    }
}
?>