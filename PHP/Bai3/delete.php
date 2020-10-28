<?php
    $username = $_GET['username'];

    $conn = mysqli_connect("localhost","root","") or die("Loi ket noi den server");
    //Lua chon CSDL
    mysqli_select_db($conn,"test") or die("Ko ton tai CSDL");

    //Truy van du lieu
    $qr = mysqli_query($conn, "DELETE FROM users WHERE username = '$username'") or die("Loi truy van");
    $rs = mysqli_fetch_array($qr);

    if($qr)
    {
        header("location: ./bai3.php");
    } else
    {
        echo "False";
    }
?>