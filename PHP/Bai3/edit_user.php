<?php
    $u = $_POST["username"];
    $p = $_POST["password"];

    $conn = mysqli_connect("localhost","root","") or die("Loi ket noi den server");
    //Lua chon CSDL
    mysqli_select_db($conn,"test") or die("Ko ton tai CSDL");

    //Truy van du lieu
    $qr = mysqli_query($conn, "UPDATE users SET `Password` = '$p'WHERE Username = '$u'") or die("Loi truy van");
    if($qr)
    {
        header("location: ./bai3.php");
    } else
    {
        echo "False";
    }
?>