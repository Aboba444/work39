<?php
abstract class Game
{
	public $жизнь=100;
	public $раунд=1;
	public $урон;
	public $имя;
	
	abstract public function Урон();
	public function ВыводУронаЖизни()
	{
		echo "Класс: {$this->имя} наносит урон: {$this->урон} жизни: {$this->жизнь} класса:".get_class($this)."<br>";
	}
	public function Удар($v){
		$this->имя = get_class($v);
		$this->урон = $v->Урон();
		$this->жизнь -= $this->урон; 
	}
}

class Red extends Game
{
	public function Урон(){
		return rand(23,30);
	}
}
class Blue extends Game
{
	public function Урон(){
		return rand(10,40);
	}
}
$red=new Red;
$blue=new Blue;

$blue->Удар($red);
$blue->ВыводУронаЖизни();
$red->Удар($blue);
$red->ВыводУронаЖизни();
$blue->Удар($red);
$blue->ВыводУронаЖизни();
$red->Удар($blue);
$red->ВыводУронаЖизни();
$blue->Удар($red);
$blue->ВыводУронаЖизни();
$red->Удар($blue);
$red->ВыводУронаЖизни();