<?php
echo "
	<h4>สรุปรายการเครื่องดื่ม</h4>
	<p>ชื่อผู้สั่ง {$_REQUEST['cFname']}</p>
	<p>เบอร์โทร {$_REQUEST['cMobile']}</p>
	<p>เมนูที่สั่ง</p>
	<ol>
";
foreach($_REQUEST['cOrder'] AS $cOrder){
	echo "<li> {$cOrder}</li>";
}
echo "</ol>";
?>