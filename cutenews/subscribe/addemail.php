<? // WR-Subscribe v 1.1 // 23.04.06 �. // Miha-ingener@yandex.ru

include ("config.php");

function shablon($msg,$title) { print"<html><title>$title</title><HEAD<META content='text/html; charset=windows-1251' http-equiv=Content-Type><STYLE> BODY {FONT-FAMILY: Verdana} TD {FONT-SIZE: 13px} </STYLE></HEAD><body><table width=100% height=100% align=center bgcolor=000000><tr><td align=center bgcolor=#DFDFDF><font color=000080>$msg</font><BR><BR><a href='' onClick='self.close()'><b>������� ����</b></a></td></tr></table></body></html>"; return true; }

// ���� ������� �� ��������
if (isset($_GET['unsubscribe'])) { $kod=$_GET['unsubscribe'];

if (!ctype_digit($kod) or strlen($kod)>20) {exit("<B>$back. ������� ������. ������� ����� �� �����.</B>");}

$lines=file("$basefile"); $count=count($lines);
for ($b=1; $b<$count; $b++) {$dt=explode("|",$lines[$b]); if ($dt[1]==$kod) {$ok=$b;}}

if (!isset($ok)) {shablon("������! <BR>���������� � ����� �����<B> � ���� ���</B> !","������!"); exit;}

$file=file("database.php"); $i=count($file); // ������� ����� �� ��
$fp=fopen("database.php","w");
flock ($fp,LOCK_EX);
for ($i=0;$i< sizeof($file);$i++) { if ($i==$ok) {unset($file[$i]);} }
fputs($fp, implode("",$file));
flock ($fp,LOCK_UN);
fclose($fp);
shablon("<B>�� ������� ��������</B> �� ��������!","�� ��������!"); exit;
}


if ($status!="1") {shablon("�������� <B>�������� ��������������</B> ���������������","��������!"); exit;}

else {  // ���� �������� ��������� � �������


if (!isset($_GET['email'])) {shablon("������ - �� �� ����� email!","������!"); exit;} else {$email=$_GET['email'];}
// ��������������� �����: � ������ �������, ������ html-����, �������� �����
$email=strtolower($email);
$email=htmlspecialchars($email);
$email=stripslashes($email);
$email=str_replace("|","I",$email);
if(!preg_match("/^[a-z0-9\.\-_]+@[a-z0-9\-_]+\.([a-z0-9\-_]+\.)*?[a-z]+$/is", $email) or $email=="" or strlen($email)>35) {shablon("������!<BR> <B>$email</B> - ������ email� � ������� �� ����������!","������!"); exit;}

$lines=file("$basefile");
$count=count($lines);
for ($b=1; $b<$count; $b++) { list($mailsinbase)=explode("|",$lines[$b]); if ($email == "$mailsinbase") {shablon("������!<BR> <B>$email</B> - ����� email ��� ���� � ����!","������!"); exit;} }

// "�������" ��������� (���������) ��� ����������
$i=1; do {$randkey=mt_rand(10000,99999); if (strlen($randkey)==5) {$i++;} } while ($i<=1);
$ip=$_SERVER['REMOTE_ADDR']; // ���������� IP �����

$fp=fopen("$basefile","a");
fputs ($fp,"$email|$randkey|$date|$time|$ip|\r\n");
fclose ($fp);
shablon("<B>�� ������� ���������</B> �� ��������!","�� ���������!"); exit;
}

?>
