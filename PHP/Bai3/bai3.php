<?php
    //Ket noi den server
    $conn = mysqli_connect("localhost","root","") or die("Loi ket noi den server");
    //Lua chon CSDL
    mysqli_select_db($conn,"test") or die("Ko ton tai CSDL");

    //Truy van du lieu
    $qr = mysqli_query($conn, "SELECT * FROM users") or die("Loi truy van");

?>

<table border="1">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th colspan="2">Action</th>
    </tr>
    <tr>
        <?php
            $i = 1;
            while($rs=mysqli_fetch_array($qr))
            {
                echo "<tr>";
                echo "<td>" .$rs["Username"]. "</td>";
                echo "<td>" .$rs["Password"]. "</td>";
                echo "<td><a href = './edit.php?username=".$rs['Username']."'>Edit</a></td>";
                echo "<td><a href = './delete.php?username=".$rs['Username']."'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </tr>
</table>
<form name="form" action="./add.php" method="POST">
    <button type="submit">Add</button>
</form>