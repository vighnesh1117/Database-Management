<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Career Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../../js/script.js"></script>
<script type="text/javascript" src="../../js/cufon-yui.js"></script>
<script type="text/javascript" src="../../js/arial.js"></script>
<script type="text/javascript" src="../../js/cuf_run.js"></script>

</head>
<?php
error_reporting(E_ALL ^ E_NOTICE);
	require"../../config.php";
	$result1 = mysql_query("Select * from tbl_users ");
	$users = @mysql_num_rows($result1);
	$result2 = mysql_query("Select * from tbl_company ");
	$companies = @mysql_num_rows($result2);
?>
<body>
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Career Services</span></a><small>Shaping your career</small></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <?php
		error_reporting(E_ALL ^ E_NOTICE);error_reporting(E_ALL ^ E_NOTICE);
			$n=1;
			require"../menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
		  <div>
			<img style="border:  2px solid #4799dc;" src="http://www.commonapp.org/files/school/image/Illinois%20Institute%20of%20Technology_Campus_945x350_60k_Logo_8.17.15.jpg" name="slide" border=0 width=100% height=210/>
		  </div>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
		  <span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> <br>
		  <img src="http://www.cs.iit.edu/~scs/IIT-IBM/images/iit.gif" width="613" height="120" alt="" />
		  <p>If you want the best job offer <span  style="font-size:20px;font-weight:bold;"><br>...<br>......<br>.........<br>............<br><br></span>Or if you want the most eligible candidate for your company <span  style="font-size:20px;font-weight:bold;"><br>............<br>.........<br>......<br>...<br/><br/></span>
		  <a href="">CAREER SERVICES</a> is the best solution.<br/><br/>
          There are total <?php echo $companies;?> number of registered companies with <a href="">CAREER SERVICES</a><br/><br/>There are total <?php echo $users;?> number of candidates with <a href="">CAREER SERVICES</a>
		  <br><br>Then why are you waiting for.<br>
		  Come and enter the world of <a href="">CAREER SERVICES</a></p>
          </div>
         </div>
        <div class="sidebar">
          <div class="gadget">
			<img src="https://afrotc.iit.edu/images/iitlogo.png"" width="140" height="140"/>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="rf">&copy; Copyright <a href="">CAREER SERVICES</a>.</p>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>