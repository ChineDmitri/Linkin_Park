<?PHP
///////////////////// TEMPLATE Default /////////////////////
$template_active = <<<HTML
<table id="shortstory" border="0" width="590" cellspacing="1" cellpadding="3">
<tr>
<td width="100%" style="text-align:justify">
<b>{title}</b>
</td>
</tr>
<tr>
<td width="100%" style="text-align:justify">
<font style="font-family:georgia, verdana, arial, sans-serif;	color:#666; font-size:14;">{short-story}</font></td>
</tr>
<tr>
<td width="100%">
<table border="0" style="border-top: 1px dotted #f2f3f3" width="575" cellspacing="0">
<tr>
<td width="220"><i><font style="font-family:georgia, verdana, arial, sans-serif; font-size:11;	color:black;">{date} Автор {author}</font></i><br> </td><td width="168" ><div align=right>
<font style="font-family:georgia, verdana, arial, sans-serif; font-size:11;">[full-link]Полная новость[/full-link]    [com-link]комментировать ({comments-num})[/com-link]</font><br>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
<br />
HTML;


$template_full = <<<HTML
<table id="shortstory" border="0" width="590" cellspacing="1" cellpadding="3">
<tr>
<td width="100%" style="text-align:justify">
<b>{title}</b>
</td>
</tr>
<tr>
<td width="100%" style="text-align:justify">
<font style="font-family:georgia, verdana, arial, sans-serif;	color:#666; font-size:14;">{full-story}</font></td>
</tr>
<tr>
<td width="100%">
<table border="0" style="border-top: 1px dotted #f2f3f3" width="575" cellspacing="0">
<tr>
<td width="220"><i><font style="font-family:georgia, verdana, arial, sans-serif;	font-size:11;	color:black;">{date} Автор {author}</font></i><br> </td><td width="168"><div align=right>
<font style="font-family:georgia, verdana, arial, sans-serif;	font-size:11;">{comments-num} комментариев</font><br>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
<br /><br/> <br/>
HTML;


$template_comment = <<<HTML
 <table id="shortstory" border="0"  width="590" height="40" cellspacing="" cellpadding="3">
    <tr>
      <td height="1" style="border-bottom-style: solid;border-bottom-width: 1px; border-bottom-color: black;">Автор <b>{author}</b> @ {date}</td>
    </tr>
    <tr>
      <td height="40" valign="top" bgcolor="#333" >{comment}</td>
    </tr>
  </table>
<br>
HTML;


$template_form = <<<HTML
  <table border="0" width="342" cellspacing="0" cellpadding="0">
    <tr>
      <td width="49" height="1">
Имя:
      </td>
      <td width="289" height="1"><input type="text" cols="35" name="name" tabindex="10"></td>
    </tr>
    <tr>
      <td width="49" height="1">
Почта:
      </td>
      <td width="289" height="1"> <input type="text"  cols="35" name="mail" tabindex="20" > (выборочно)</td>
    </tr>
  </center>
    <tr>
      <td width="51" height="1">
        <p align="left">Смайлы: </p>
      </td>
<center>
      <td width="291" height="1" >
{smilies}
      </td>
    </tr>
    <tr>
      <td width="340" height="1" colspan="2"> <textarea cols="60" rows="6" name="comments" tabindex="3"></textarea><br />
        <input type="submit" name="submit" value="Добавить мой комментарий" accesskey="s">
<input type=checkbox name=CNremember  id=CNremember value=1> <label for=CNremember>Запомнить меня</label> |
  <a href="javascript:CNforget();">Забыть меня</a>
      </td>
    </tr>
  </table>

HTML;


$template_prev_next = <<<HTML
<p align="center">[prev-link]<< Предидущая[/prev-link] {pages} [next-link]Следующая >>[/next-link]</p>
HTML;
$template_comments_prev_next = <<<HTML
<p align="center">[prev-link]<< Первая[/prev-link] ({pages}) [next-link]Последняя >>[/next-link]</p>
HTML;
?>
