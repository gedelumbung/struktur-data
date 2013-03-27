<?php
$daftar = array(0, 1, 1, 2, 3, 55, 5, 8, 13, 21, 34, 89, 144);
$x = 55;
 
function recursive_binary_search($x, $daftar, $awal, $akhir) 
{
	if ($awal > $akhir)
		return -1;
 
	$tengah = ($awal + $akhir) >> 1;
 
	if ($daftar[$tengah] == $x) {
		return $tengah;
	} elseif ($daftar[$tengah] > $x) {
		return binary_search($x, $daftar, $awal, $tengah-1);
	} elseif ($daftar[$tengah] < $x) {
		return binary_search($x, $daftar, $tengah+1, $akhir);
	}
}
 
echo recursive_binary_search($x, $daftar, 0, count($daftar)-1);

?>