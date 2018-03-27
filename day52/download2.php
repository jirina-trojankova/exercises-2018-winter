<?php
error_reporting(E_ALL);

function download_from_internet($url)
{
	$source = file_get_contents($url);
	
	return $source;
}

define('CACHE_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache');

/**
 * @param string $url
 * @param int $ttl Time To Live seconds (86400 = 60*60*24)
 * @return mixed|string
 */
function download_with_cache($url, $ttl = 86400)
{
	$cache_file = CACHE_DIR . DIRECTORY_SEPARATOR . strtr($url, ':/?|#=', '......');
	
	// this lines will check and create a cache directory if there is none
	if (!is_dir(CACHE_DIR)) {
		mkdir(CACHE_DIR, 0777);
	}
	
	if (
		is_file($cache_file)
		&&
		filemtime($cache_file) > time() - $ttl)
	{
		$contents = file_get_contents($cache_file);
	} else {
		$contents = download_from_internet($url);
		file_put_contents($cache_file, $contents);
	}
	
	return $contents;
}



$url = "http://www.imdb.com/genre/";

$contents = download_with_cache($url);

$contents = substr($contents, strpos($contents, '<div id="main"'));
preg_match_all('@<img itemprop="image" class="pri_image" title="([^"]+)"@ims', $contents, $results);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<select>
	<?php foreach ($results[1] as $id => $option) printf('<option value="%d">%s</option>', $id, $option); ?>
</select>

</body>
</html>