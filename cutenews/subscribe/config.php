<? // WR-Subscribe v 1.1 // 23.04.06 г. // Miha-ingener@yandex.ru
$sbname="Новости сайта wr-script.ru"; // Название рассылки (тема в письме)
$top="<html><head><meta http-equiv='Content-Type' content='text/html; charset=windows-1251'><meta http-equiv='Content-Language' content='ru'></head><body><br>Здравствуйте, Вы получаете данное письмо в результате подписки на рассылку сайта wr.kovostok.ru !<BR><br>----------------------------------------------<BR>"; // Заголовок рассылки
$bottom="<BR>---------------------------------------<BR><br>Сайт: http://www.wr-script.ru/ - Бесплатные скрипты на php. <BR><br>E-mail: miha-ingener@ayndex.ru<BR><br>Created with WR-Subscribe 1.0<BR><br></body><br></html>"; // Подпись в рассылке
$password="111292"; // Пароль администратора
$adminemail="mr.dima11@gmail.com"; // Емайл админа
$step="20"; // Скольки подписчикам отправлять пиьма за этап?
$status="1"; // Разрешить/приостановить подписку на рассылку
$date=date("d.m.Y"); // число.месяц.год
$time=date("H:i:s"); // часы:минуты:секунды
$basefile="database.php"; // Имя файла базы данных
$back="<center>Вернитесь <a href='javascript:history.back(1)'><B>назад</B></a>"; // Удобная строка
