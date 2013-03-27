<?php
$daftar = array(1, 2, 3, 122, 5, 4, 6, 9, 8);
 
$cari = 122;
$indexs = null;
 
for ($i = 0; $i < count($daftar); $i++) {
	if ($daftar[$i] == $cari) {
		$indexs = $i;
	}
}
 
if (isset($indexs)) {
	echo 'Terdapat pada indexs ke-'.$indexs;
} else {
	echo "Tidak Ditemukan";
}
?>