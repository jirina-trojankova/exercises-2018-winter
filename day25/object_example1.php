<?php

header('content-type: text/plain');

class user {
	public $id;
	public $username;
	public $name;
	public $password;
	public $number_of_posts;
	public $time_of_construct = null;
	
	
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

class blog_post {
	public $id = null;
	public $headline = null;
	public $text = null;
	public $added_at = null;
	public $user_id = null;
	public $status = 'not-published';
	
	public function publishPost()
	{
		$this->status = 'published';
	}
	
	public function dumpMe()
	{
		var_dump($this);
	}
}

$steve = new user();
$steve->init();


$steve->id = 1;
$steve->username = 'steve';
$steve->name = 'Steve Jobs';

$steve->dumpMe();





$first_post = new blog_post();
$first_post->id = 1;
$first_post->headline = 'The first post';
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->added_at = date('Y-m-d H:i:s');
$first_post->user_id = 1;

//$first_post->status = 'published';
$first_post->publishPost();

$first_post->dumpMe();


