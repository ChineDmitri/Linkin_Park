<?PHP

error_reporting (E_ALL ^ E_NOTICE);

$cutepath =  __FILE__;
$cutepath = preg_replace( "'\\\show_news\.php'", "", $cutepath);
$cutepath = preg_replace( "'/show_news\.php'", "", $cutepath);

require_once("$cutepath/inc/functions.inc.php");
require_once("$cutepath/data/config.php");

//----------------------------------
// Check if we are included by PATH
//----------------------------------
if($HTTP_SERVER_VARS["HTTP_ACCEPT"] or $HTTP_SERVER_VARS["HTTP_ACCEPT_CHARSET"] or $HTTP_SERVER_VARS["HTTP_ACCEPT_ENCODING"] or $HTTP_SERVER_VARS["HTTP_CONNECTION"]){ /* do nothing */ }
elseif(eregi("show_news.php", $PHP_SELF)){
die("<h4>CuteNews определил, что вы включаете show_news.php в шаблон используя URL путь до файла.<br>
Это не правилино! Вы должны указывать абсолютный путь от корня сервера до show_news.php</h4><br>Пример:<br>
это  <font color=red>НЕ ПРАВИЛЬНО</font> :&nbsp;&nbsp; &lt;?PHP include(\"http://yoursite.com/cutenews/show_news.php\"); ?&gt;<br>
это <font color=green>ПРАВИЛЬНО</font>:&nbsp;&nbsp; &lt;?PHP include(\"cutenews/show_news.php\"); ?&gt;<br>
<br><BR>// <font size=2>Если вы хотите убрать это сообщение, то откройте show_news.php и удалите его.</font>");
}
//----------------------------------
// End of the check
//----------------------------------

if(!isset($subaction) or $subaction == ""){ $subaction = $POST["subaction"]; }

if(!isset($template) or $template == "" or strtolower($template) == "default"){ require_once("$cutepath/data/Default.tpl"); }
else{
	if(file_exists("$cutepath/data/${template}.tpl")){ require_once("$cutepath/data/${template}.tpl"); }
    else{ die("Ошибка!<br>шаблон <b>$template</b> не найден, запомните, что названия шаблонов чувствительны к регистру и их нужно писать корректно!"); }
}

// Prepare requested categories
if(eregi("[a-z]", $category)){
	die("<b>Ошибка</b>!<br>CuteNews обнаружил что вы используете \$category = \"$category\"; Вы должны указывать категорию по её <b>ID</b> номеру, а не по её названию!<br>
    пример:<br><blockquote>&lt;?PHP<br>\$category = \"1\";<br>include(\"path/to/show_news.php\");<br>?&gt;</blockquote>");
}
$category = preg_replace("/ /", "", $category);
$tmp_cats_arr = explode(",", $category);
foreach($tmp_cats_arr as $key=>$value){
    if($value != ""){ $requested_cats[$value] = TRUE; }
}

if($archive == ""){
	$news_file = "$cutepath/data/news.txt";
	$comm_file = "$cutepath/data/comments.txt";
}else{
	$news_file = "$cutepath/data/archives/$archive.news.arch";
	$comm_file = "$cutepath/data/archives/$archive.comments.arch";
}

$allow_add_comment			= FALSE;
$allow_full_story			= FALSE;
$allow_active_news 			= FALSE;
$allow_comments 			= FALSE;

//<<<------------ Detarime what user want to do
if( $CN_HALT != TRUE and $static != TRUE and ($subaction == "showcomments" or $subaction == "showfull" or $subaction == "addcomment") and ((!isset($category) or $category == "") or $requested_cats[$ucat] == TRUE) ){
    if($subaction == "addcomment"){ $allow_add_comment	= TRUE; $allow_comments = TRUE; }
    if($subaction == "showcomments") $allow_comments = TRUE;
	if(($subaction == "showcomments" or $allow_comments == TRUE) and $config_show_full_with_comments == "yes") $allow_full_story = TRUE;
	if($subaction == "showfull") $allow_full_story = TRUE;
	if($subaction == "showfull" and $config_show_comments_with_full == "yes") $allow_comments = TRUE;

}
else{
    if($config_reverse_active == "yes"){ $reverse = TRUE; }
	$allow_active_news = TRUE;
}
//----------->>> Detarime what user want to do

require("$cutepath/inc/shows.inc.php");

unset($static, $template, $requested_cats, $category, $catid, $cat,$reverse, $in_use, $archives_arr, $number, $no_prev, $no_next, $i, $showed, $prev, $used_archives);
?>
<!-- News Powered by CuteNews: http://cutephp.com/ -->
<!-- Russian release by X-Coders Team [RedCat]: http://x-coders.net -->