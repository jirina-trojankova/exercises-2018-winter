<?php
abstract class pdo_table
{
	protected static $DATABASE_TABLE = null;
	protected static $CLASS_NAME = null;
	protected static $pdo = null;
	protected $fields = [];
	protected $data = [];
	
	public static function getOneById($pdo, $id)
	{
		$stm = $pdo->prepare("SELECT * FROM `" . static::$DATABASE_TABLE . "` WHERE `ID` = ? LIMIT 1;");
		$stm->execute([$id]);
		
		$record = $stm->fetchObject(static::$CLASS_NAME);
		
		return $record;
	}
	
	public static function getAll(PDO $pdo)
	{
		$stm = $pdo->prepare("SELECT * FROM `" . static::$DATABASE_TABLE . "`");
		$stm->execute();
		
		$items = [];
		while (false !== ($obj = $stm->fetchObject(static::$CLASS_NAME))) {
			$items[] = $obj;
		}
		
		return $items;
	}
	
	protected static function updateRecord(PDO $pdo, $id, $record)
	{
		$query = 'UPDATE `' . static::$DATABASE_TABLE . '` SET `' . join('` = ?, `', array_keys($record)) . '` = ? WHERE `id` = ? LIMIT 1';
		$stm = $pdo->prepare($query);
		$data = array_values($record);
		$data[] = $id;
		
		$stm->execute($data);
		
		return $pdo->lastInsertId();
	}
	
	protected static function insertRecord(PDO $pdo, $record)
	{
		$stm = $pdo->prepare('INSERT INTO `' . static::$DATABASE_TABLE . '` (`' . join('`, `', array_keys($record)) . '`) VALUES (?' . str_repeat(', ?', count($record) - 1) . ');');
		$stm->execute(array_values($record));
		
		return $pdo->lastInsertId();
	}
	
	public function __set($name, $value)
	{
		if (in_array($name, $this->fields)) {
			$this->data[$name] = $value;
		}
	}
	
	public function __get($name)
	{
		if (in_array($name, $this->fields) && isset($this->data[$name])) {
			return $this->data[$name];
		}
		
		return null;
	}
	
	public function save(PDO $pdo)
	{
		if ($this->id) {
			$result = self::updateRecord($pdo, $this->id, $this->data);
		} else {
			$result = self::insertRecord($pdo, $this->data);
		}
		
		return $result;
	}
	
	public function delete(PDO $pdo)
	{
		if ($this->id) {
			$stm = $pdo->prepare("DELETE FROM `" . static::$DATABASE_TABLE . "` WHERE `ID` = ? LIMIT 1;");
			$stm->execute([$this->id]);
		}
	}
}