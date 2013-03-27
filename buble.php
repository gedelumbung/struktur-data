<?php
$daftar = array(1,3,2,5,2);

for ( $i = 0; $i < count($daftar); $i++ )
{
   for ($j = 0; $j < count($daftar); $j++ )
   {
      if ($daftar[$i] < $daftar[$j])
      {
         $simpan = $daftar[$i];
         $daftar[$i] = $daftar[$j];
         $daftar[$j] = $simpan;
      }
   }
}

for( $i = 0; $i < count($daftar); $i++ )
{
   echo $daftar[$i].',';
}
?>