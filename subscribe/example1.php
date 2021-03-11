<a href="?go=news">Новости</a> || <a href="?go=headlines">Заголовки</a> || <a href="?go=archives">Архивы</a> || <a href="?go=search">Поиск</a>
<hr>
<?PHP
error_reporting (E_ALL ^ E_NOTICE);
if(!$go){ $go = $HTTP_GET_VARS['go']; }

if($go=="" or $go=="news"){
	include("show_news.php");
}elseif($go=="headlines"){
	$template = "Headlines";
	include("show_news.php");
}elseif($go=="archives"){
	include("show_archives.php");
}elseif($go=="search"){
	include("search.php");
}
?>
<!-- Russian release by X-Coders Team [RedCat]: http://x-coders.net --> 