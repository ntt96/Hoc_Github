<?php
	//Hàm xét xem một số có tồn tại trong mảng hay không
	function CheckExist($mang, $cantim)
	{
		for ($i = 0 ; $i < count($mang); $i++)
			if ($mang[$i] == $cantim)
				return true;
		return false;
	}

	$mang = array(1,5,89,14,23,56,11);
	$cantim = 8;
	$check = CheckExist($mang, $cantim);

	if ($check == true)
		echo 'So ' . $cantim . ' co trong mang ' . '</br>';
	else
		echo 'So ' . $cantim . ' khong co trong mang';
?>