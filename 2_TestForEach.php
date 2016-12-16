<?php
	$nam = array (1990,1992,1999, 1994);

	echo 'In ra gia tri cua mang: </br> ' ;
	foreach($nam as $a => $b)
		echo $b . '</br>';

	echo '</br> In ra chi so cac phan tu cua mang: </br> ';
	foreach($nam as $a => $b)
		echo $a . '</br>';

	echo '</br> In ra ca chi so va gia tri cua cac phan tu trong mang: </br>';
	foreach ($nam as $chiso => $giatri)
		echo $chiso. ': '. $giatri . '<br>';

	echo '</br> Cach khac: </br>';
	foreach ($nam as $value)
		echo $value . '<br>';

	//Mảng sinh viên
	$sinhvien = array(
		'SV001' => 'Nguyen Van A',
		'SV002' => 'Nguyen Van B',
		'SV003' => 'Nguyen Van C',
		'SV004' => 'Nguyen Van D'
	);

	echo 'In ra mang sinh vien </br>';
	foreach ($sinhvien as $key => $value)
	{
		echo $key . ' : ' . $value . '</br>';
	}

	
?>