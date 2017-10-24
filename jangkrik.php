<?php 
class jangkrik {
public $suara ;
public $warna ;	
public $kaki ;

	public function __construct ($suara,$warna,$kaki)		{
		
		$this->suara = $suara ;
		$this->warna= $warna ;
		$this->kaki = $kaki ;
		
}

	
	    public function get_suara ()
	{
		return $this->suara ;
	}
	public function get_warna()
	{
		return $this->warna ;
	}
	public function get_kaki ()
	{
		return $this->kaki ;
	}
}
?>