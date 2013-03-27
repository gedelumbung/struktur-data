<?php
class Setter_Getter {
	public $var_data = null;
	public $var_awal = null;
	public $var_akhir = null;
 
	public function __construct($param_data)
	{
		$this->var_data = $param_data;
	}
}
 
class Queue {
	private $_awal = null;
	private $_akhir = null;
	public function input($param_data) {
		$set_get = new Setter_Getter($param_data);
 
		if ($this->_awal == NULL) {
			$this->_awal = $set_get;
		} else if ($this->_akhir == NULL) {
			$this->_akhir = $set_get;
			$this->_awal->var_awal = $this->_akhir;
			$this->_akhir->var_akhir = $this->_awal;
		} else {
			$this->_akhir->var_awal = $set_get;
			$set_get->var_akhir = $this->_akhir;
			$this->_akhir = $set_get;
		}
	}
 
	public function hapus() {
		if (isset($this->_awal->var_data)) {
			$temp = $this->_awal;
			$data = $temp->var_data;
			$this->_awal = $this->_awal->var_awal;
			if (isset($this->_awal->var_akhir))
				$this->_awal->var_akhir = null;
			else 
				$this->_awal = $this->_akhir = null;
			return $data;
		}
		return FALSE;
	}
 
	public function hasil()
	{
		$hasil = '';
		$awal = $this->_awal;
		while ($awal) {
			$hasil .= $awal->var_data . ', ';
			$awal = $awal->var_awal;
		}
		return $hasil;
	}
}
 
$queue = new Queue();

for($i=1;$i<10;$i++){
	$queue->input($i);
}
 
echo "<p>Setelah Input</p>";
echo $queue->hasil();

for($j=1;$j<4;$j++){
	$queue->hapus();
}
 
echo "<p>Setelah Hapus</p>";
echo $queue->hasil();

for($k=1;$k<5;$k++){
	$queue->input($k);
}
 
echo "<p>Setelah Input</p>";
echo $queue->hasil();
?>