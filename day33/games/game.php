<?php

class game
{
	public $id;
	public $name;
	public $image_url;
	public $description;
	public $rating;
	public $released_at;

	public static function getAllGames(PDO $PDO)
	{
		$stm = $PDO->prepare("SELECT * FROM `game`");
		$stm->execute();
		
		$items = [];
		while (false !== ($obj = $stm->fetchObject('game'))) {
			$items[] = $obj;
		}
		
		return $items;
	}
}