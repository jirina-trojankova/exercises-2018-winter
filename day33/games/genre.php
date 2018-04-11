<?php
class genre
{
	public $id;
	public $name;
	
	public static function getGenresForGames(PDO $PDO, $game_ids)
	{
		if (!count($game_ids))  return null;
		
		$stm = $PDO->prepare("
			SELECT * 
				FROM `genre` 
				RIGHT JOIN `game_has_genre` ON (game_has_genre.genre_id = genre.id) 
				WHERE game_has_genre.game_id IN (? " . str_repeat(', ?', count($game_ids) -1) . ") 
				ORDER BY game_has_genre.game_id ASC");
		
		$stm->execute($game_ids);
		
		$items = [];
		while (false !== ($obj = $stm->fetchObject())) {
			if (!isset($items[$obj->game_id])) {
				$items[$obj->game_id] = [];
			}
			$genre_object = new genre();
			$genre_object->id = $obj->id;
			$genre_object->name = $obj->name;
			$items[$obj->game_id][] = $genre_object;
		}
		
		return $items;
	}
}