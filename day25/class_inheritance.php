<?php

class match {
	public $begins_at = null;
	public $score = null;
	public $nr_of_players = null;
	public $length = null; // in minutes
	
	public function __construct()
	{
		$this->begins_at = time();
	}
	
	public function getEstimatedEnd()
	{
		return $this->begins_at + $this->length * 60;
	}
}

class football_match extends match
{
	public $nr_of_players = 22;
	public $length = 90;
	public $halves = ['0:0', '0:0'];
	public $nr_offsides = 0;
}

class icehockey_match extends match
{
	public $nr_of_players = 12;
	public $length = 60;
	public $thirds = ['0:0', '1:1', '2:4'];
	
	public function getThirdScore($third) {
		var_dump($this->thirds);
		return $this->thirds[
			($third - 1)
		];
	}
}

$hockey = new icehockey_match();
echo "<br />this is result from the 1st third: " . $hockey->getThirdScore(1) . "<br />";
echo "<br />this is result from the 2nd third: " . $hockey->getThirdScore(2) . "<br />";
echo "<br />this is result from the 3rd third: " . $hockey->getThirdScore(3) . "<br />";
echo "<br />begining: ", date("H:i:s", $hockey->begins_at);
echo "<br />ending:", date("H:i:s", $hockey->getEstimatedEnd());


$morning_match = new match();
$morning_match->length = 90;
echo "<br /><br />begining: ", date("H:i:s", $morning_match->begins_at);
echo "<br />ending:", date("H:i:s", $morning_match->getEstimatedEnd());




