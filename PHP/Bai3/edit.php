<?php
    $username = $_GET['username'];

    $conn = mysqli_connect("localhost","root","") or die("Loi ket noi den server");
    //Lua chon CSDL
    mysqli_select_db($conn,"test") or die("Ko ton tai CSDL");

    //Truy van du lieu
    $qr = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'") or die("Loi truy van");
    $rs = mysqli_fetch_array($qr);

?>

<form action = ./edit_user.php method="POST">
    Username <input type="text" name="username" readonly value="<?php echo $rs['Username'];?>"><br>
    Password <input type="text" name="password" value="<?php echo $rs['Password'];?>"><br>
    <button type="submit">Update</button>
</form>