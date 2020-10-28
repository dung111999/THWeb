<?php
$name = isset($_POST['name']) ? $_POST['name']:null;

if($name)
{
    echo "Dữ liệu đã nhập là: $name";
}
else
{
    echo "<p>Nhập dữ liệu</p>";
}
?>