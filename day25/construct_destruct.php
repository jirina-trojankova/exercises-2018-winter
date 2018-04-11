<?php



$next_user_id = 0;


function some_function($argument)
{
	global $next_user_id;
	
	// here I can use the $argument
}













class user {
	public $id;
	public $username;
	public $name;
	public $password;
	public $number_of_posts;
	public $time_of_construct = null;
	
	public function __construct(&$next_user_id, $future_username)
	{
		$this->id = $next_user_id;
		$next_user_id++;
		
		$this->username = $future_username;
	}
	
	public function __destruct()
	{
		echo 'freeing memory from user ' .$this->username;
	}
	
	public function init()
	{
		$this->time_of_construct = time();
		$this->password = uniqid();
	}
	
	public function dumpMe()
	{
		var_dump($this);
	}
}










class today
{
	public $date = null;
	public $time = null;
	public $day_of_week = null;
	public $year = null;
	
	public function __construct()
	{
		$this->date = date('Y-m-d');
		$this->time = time();
		$this->day_of_week = date('l');
		$this->year = date('Y');
		$this->teacher = $this->getTeacherForToday();
	}
	
	protected function getTeacherForToday()
	{
		// here will be some logic
		return 'Jakub';
	}
}

class document
{
	protected $page_title;
	protected $started_at = null;
	protected $day = null;
	
	public function __construct($title)
	{
		$this->page_title = $title;
		$this->started_at = microtime(true);
		$this->day = new today();
	}
	
	public function printHeader()
	{
		echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>' . htmlspecialchars($this->page_title) . '</title>
</head>
<body>
   <p>' . $this->day->day_of_week . ', ant the teacher is: ' . $this->day->teacher . '</p>
	<h1>' . htmlspecialchars($this->page_title) . '</h1>
';
		
	}
	
	public function printFooter()
	{
		echo '<p> It took ' . (microtime(true) - $this->started_at) . ' miliseconds to render page.</p>';
		echo '</body></html>';
	}
}

$page = new document('My form example page');

$user1 = new user($next_user_id, 'steve');
$user2 = new user($next_user_id, 'bob');
$user3 = new user($next_user_id, 'tom');

$page->printHeader();

echo "\nUser has id: " . $user1->id;
echo "\nUser has id: " . $user2->id;
echo "\nUser has id: " . $user3->id;

unset($user1);

$page->printFooter();