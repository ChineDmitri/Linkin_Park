<?PHP
///////////////////// TEMPLATE Default /////////////////////
$template_active = <<<HTML
</br>
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #141414;" summary="">
<tr>
 <td>
<div style="width:585px;  color=#808080">
<div>{date} <strong>{title}</strong></br></div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br>
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #000000;" summary="">
<tr>
 <td>

<div  style="text-align:justify; padding:3px; margin-top:3px; margin-bottom:5px; border-top:1px solid #D3D3D3;">{short-story}</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br>
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #000000;" summary="">
<tr>
 <td>
<div style="float: right;">[full-link]Читать подробнее •[/full-link]  [com-link]Коментарии ({comments-num})[/com-link]</div>
<div> Автор: {author}</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br></br>
HTML;


$template_full = <<<HTML
</br>
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #141414;" summary="">
<tr>
 <td>
<div style="width:585px;  color=#808080">
{date} <strong>{title}</strong></br></div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br>
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #000000;" summary="">
<tr>
 <td>
<div style="text-align:justify; padding:3px; margin-top:3px; margin-bottom:5px; border-top:1px solid #D3D3D3;">{full-story}</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br>
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #000000;" summary="">
<tr>
 <td>
<div>Автор: {author}</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
<br>
</br>
<div style="width: 590px; margin-bottom:20px;">
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #141414;" summary="">
<tr>
 <td>
<div style="border-bottom:1px solid black;"><strong>Комментарии:</strong></div>
</td>
</tr>
</table>
</td>
</tr>
</table>
HTML;


$template_comment = <<<HTML
</br>
<div style="width: 590px; margin-bottom:20px;">
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #141414;" summary="">
<tr>
 <td>
<div style="border-bottom:1px solid black;"> Комментатор: <strong>{author}</strong> | Дата: {date}</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</br>
<table width="590" height="7" border="0" cellspacing="1" cellpadding="0" style="background: URL(images/systems/bg.jpg);" align="left" >
<tr>
 <td>
<table width="590" height="4" border="0" cellspacing="2" cellpadding="0" style="background: #000000;" summary="">
<tr>
 <td>
<div style="padding:2px; background-color:#000000">{comment}</div>
</td>
</tr>
</table>
</td>
</tr>
</table>

</div>
HTML;


$template_form = <<<HTML
</br> 
 <table border="0" width="370" cellspacing="0" cellpadding="0">
    <tr>
      <td width="60">Name:</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" name="mail"> (optional)</td>
    </tr>
    <tr>
      <td>Smile:</td>
      <td>{smilies}</td>
    </tr>
    <tr>
      <td colspan="2">
      <textarea cols="40" rows="6" id=commentsbox name="comments"></textarea><br />
      <input type="submit" name="submit" value="Add My Comment">
      <input type=checkbox name=CNremember  id=CNremember value=1><label for=CNremember> Remember Me</label> |
  <a href="javascript:CNforget();">Forget Me</a>
      </td>
    </tr>
  </table>
HTML;


$template_prev_next = <<<HTML
<p align="center">[prev-link]<< [/prev-link] {pages} [next-link] >>[/next-link]</p>
HTML;
$template_comments_prev_next = <<<HTML
<p align="center">[prev-link]<< [/prev-link] ({pages}) [next-link] >>[/next-link]</p>
HTML;
?>
