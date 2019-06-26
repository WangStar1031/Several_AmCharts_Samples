<?php
$dir = "./";
$files = scandir($dir);
$index = 0;
foreach ($files as $value) {
	if( is_dir($value)){
		continue;
	}
	if( strpos($value, "index.php") !== false || strpos($value, "style.css")){
		continue;
	}
	$index++;
?>
	<a href="<?=$value?>">Example <?=$index?></a>
	<br>
<?php
}
?>
