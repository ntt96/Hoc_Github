<?php
	echo "A noi: \"B rat de thuong\" <br/>";
	echo '\'Freetuts\'s a website learning online <br/>';
	$str = "dang an toi";
	echo "Nam noi\"Cau ay $str\" <br/>";
	echo "B $str <br/>";
	// a..z là gồm các từ từ a => z
echo (addcslashes('freetuts.net FREETUTS.NET', 'a..z'));
// kết quả: \f\r\e\e\t\u\t\s.\n\e\t
  
echo '<br />';
  
// a..zA..Z là gồm các từ từ a => z và A => Z
echo (addcslashes('freetuts.net FREETUTS.NET', 'a..zA..Z'));
?>

