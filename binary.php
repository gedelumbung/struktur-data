<?php
$daftar = array(22,323,242,21,66,24,87,97,12,64,28,76,11,93,54,39,377,4345);
$cari = 28;
 
function binary_search($cari, $daftar) 
{
	$awal = 0;
	$akhir = count($daftar)-1;
 
	while ($awal <= $akhir) {
		$tengah = ($awal + $akhir) >> 1;
		echo $tengah.'<br>';
 
		if ($daftar[$tengah] == $cari) {
			return '<p>tengah</p>'.$tengah.'<hr>';
		} elseif ($daftar[$tengah] > $cari) {
			$akhir = $tengah - 1;
			echo '<p>akhir</p>'.$akhir.'<hr>';
		} elseif ($daftar[$tengah] < $cari) {
			$awal = $tengah + 1;
			echo '<p>awal</p>'.$awal.'<hr>';
		}
	}
 
	return "Tidak ditemukan";
}
 
echo binary_search($cari, $daftar);
?>