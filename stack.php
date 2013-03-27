<?php
class Setter_Getter
{
	private $var_data = null;
	private $var_input = null;
	public function __construct($param_data, $param_input)
	{
		$this->var_data = $param_data;
		$this->var_input = $param_input;
	}
	public function ambilData()
	{
		return $this->var_data;
	}
	public function setData(&$param_data)
	{
		$this->var_data = $param_data;
	}
	public function ambilInput()
	{
		return $this->var_input;
	}
	public function setInput(&$param_input)
	{
		$this->var_input = $param_input;
	}
}
 
class Stack
{
	private $var_akhir = null;
	public function push($param_data)
	{
		$set_get = new Setter_Getter($param_data, null);
 
		if ($this->var_akhir == null) {
			$this->var_akhir = $set_get;
		} else {
			$set_get->setInput($this->var_akhir);
			$this->var_akhir = $set_get;
		}
	}
	public function pop()
	{
		if ($this->var_akhir) {
			$akhir = $this->var_akhir;
			$data = $akhir->ambilData();
 
			$this->var_akhir = $this->var_akhir->ambilInput();
 
			$akhir = null;
 
			return $data;
		}
	}
	public function hasil()
	{
		$var_hasil = '';
		$akhir = $this->var_akhir;
		while ($akhir) {
			$var_hasil .= $akhir->ambilData() . ' ';
			$akhir = $akhir->ambilInput();
		}
 
		return $var_hasil;
	}
}

$stack = new Stack();
for($i=1;$i<20;$i++){
	$stack->push($i);
}
echo "<p>Hasil Push</p>";
echo $stack->hasil();

for($j=1;$j<3;$j++){
	$stack->pop();
}
 
echo "<p>Hasil Pop</p>";
echo $stack->hasil();
?>