<?php
header('Content-type: text/plain');

$movies = [
	[
		'title' => 'Delta Force',
		'rating' => 62,
		'year' => 1986
	],
	[
		'title' => 'Missing in action',
		'rating' => 57,
		'year' => 1984
	],
	[
		'title' => 'Firewalker',
		'rating' => 49,
		'year' => 1986
	],
];


class sorting_functions {
	public function sort_movies($a, $b)
	{
		if ($a['year'] == $b['year']) {
			return 0;
		}
		return ($a['year'] < $b['year']) ? -1 : 1;
	}
}

usort($movies, ['sorting_functions', 'sort_movies']);

var_dump($movies);