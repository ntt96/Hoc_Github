<?php session_start();
    //Nếu click vào nút lưu session
    if (isset($_POST['savename']))
        $_SESSION['name'] = $_POST['username'];
?>

<!DOCTYPE html>

<html>
<head>
    <title> Test Session và cookie </title>
    <meta charset = "utf-8" />
</head>
<body>
    <h2 style = "color: red ">
    <?php
        //Kiểm tra xem session có tồn tại hay không
        //Nếu có thì in nó ra
        if (isset($_SESSION['name']))
            echo 'Tên đăng nhâp là: ' . $_SESSION['name'] . '<br/>';

    ?>
    </h2>

    <form method = "post" action = "">
        <input type = "text" name = "username" value = ""/> <br/>
        <input type = "submit" name = "savename" value = "Save Name" />
    </form>
    
</body>

</html>