<?php 

class Telebe
{
	public $ad;
	public $soyad;
	public $yash;
	public $ballar;
	public $fakulte;
	public $uni;

	public function getAd()
	{
		return $this->ad;
	}
	public function setAd($ad)
	{
		$this->ad = $ad;
	}
	public function getSoyad()
	{
		return $this->soyad;
	}
	public function setSoyad($soyad)
	{
		$this->soyad = $soyad;
	}
	public function getYash()
	{
		return $this->yash;
	}
	public function setYash($yash)
	{
		$this->yash = $yash;
	}
	public function getBallar()
	{
		return $this->ballar;
	}
	public function setBallar($ballar)
	{
		$this->ballar = $ballar;
	}
	public function getFakulte()
	{
		return $this->fakulte;
	}
	public function setFakulte($fakulte)
	{
		$this->fakulte = $fakulte;
	}
	public function getUni()
	{
		return $this->uni;
	}
	public function setUni($uni)
	{
		$this->uni = $uni;
	}

	public function TələbəBilgiləri()
	{
		return  $this->ad ." - ". $this->soyad ." - ". $this->yash ." - ". $this->ballar ." Bal - ". $this->fakulte ." - ". $this->uni;
	}

}

$my_object = new Telebe();
$my_object->setAd('Cahangir');
$my_object->setSoyad('Osmanov');
$my_object->setYash(19);
$my_object->setBallar(400);
$my_object->setFakulte('Müzeyşünaslıq və Arxiv işi');
$my_object->setUni('Mədəniyyət və İncesenet Universiteti');
echo $my_object->TələbəBilgiləri();
?>