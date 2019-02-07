<?php
$handle = fopen ("num.txt","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$num3 = fgets($handle);

for ($i = 1; $i <= $num3; $i++) {
	
$file = fopen("file.txt","a");

	if (($i % (int)$fizz == 0) && ($i % (int)$buzz == 0)) {
	fputs($file, "FB ");
}elseif ($i % (int)$fizz == 0) {
	fputs($file, "F ");
}elseif ($i % (int)$buzz == 0) {
	fputs($file, "B ");
}else {
	fputs($file, "$i ");
}
}