<?php

namespace database;

abstract class database
{
	public function connect()
	{
		echo 'connecting as class ' . get_class($this);
		//...
	}
}