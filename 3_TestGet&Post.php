<?php
	//Phương thức get
	echo 'Du lieu nhan duoc la: </br> ';

	foreach ($_GET as $key => $value)
		echo '<strong>' . $key . ' => ' . $value . '<strong';

	if (isset($_GET['id']))
		$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title> Test phương thức post trong php </title>
	<meta charset = "utf-8" />
</head>
<body>
	<form method = "POST">
		Username:<input type = "text" name = "username" value = "" size = 20px/><br/>
		Password:<input type ="password" name="password" value = "" size=20px/><br/>
		<input type = "submit" name = "button" value = "GetData" id = "but" />
	</form>
	<?php
		if (isset($_POST['button']))
		{  
			$u = "";
			$p = "";
			//Kiểm tra xem người dùng có nhập tên đăng nhập hay chưa
			if ($_POST['username'] == NULL)
				echo 'Please enter your username! <br/>';
			else
				$u = $_POST['username'];

			//Kiểm tra xem người dùng có nhập password hay chưa
			if ($_POST['password'] == NULL)
				echo 'Please enter your password! <br/>';
			else 
				$p = $_POST['password'];

			if ($u && $p)
			{
				echo 'Username is: ' . $_POST['username'] . '<br/>';
				echo 'Password is: ' . $_POST['password'] . '<br/>' ;
			}
		}
	?>
</body>
</html>