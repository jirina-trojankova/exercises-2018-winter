<?php

class customer extends pdo_table
{
	protected static $DATABASE_TABLE = 'customer';
	protected static $CLASS_NAME = 'customer';
	protected $fields = ['id', 'name', 'email'];
	
}