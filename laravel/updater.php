<?php 

function update($current_version){
	$xml = @simplexml_load_file("https://raw.github.com/clarkeash/Laravel-Alfred-Extension/master/changelog.xml");
	$live = $xml->version;
	$file = $xml->url;
	$dir = getcwd();

	if($current_version < $live){
		//echo "outdated";
		exec("curl $file > $dir/script.php");
		echo "hello";
		
	}
}

function getversion(){
	$xml = @simplexml_load_file("https://raw.github.com/clarkeash/Laravel-Alfred-Extension/master/changelog.xml");
	return $xml->version;
}


?>