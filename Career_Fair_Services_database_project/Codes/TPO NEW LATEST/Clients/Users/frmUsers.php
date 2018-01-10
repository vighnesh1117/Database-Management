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
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
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
			session_start();
			$n=3;
			require"../menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			$n=3;
			require"../marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            
            <div class="clr"></div>
            <p class="post-data"><span class="date"><?php $date=date("jS  F Y");echo $date;?></span> &nbsp;|&nbsp; New user <a href="frmRegistration.php">please register</a>
            <div class="clr"></div>
			<h2><span><?php if($_GET['name']<>""){ echo $_GET['name'].", please login";}else{echo "Registered Users Please Login";}?></span></h2>
			<form action="checkUserLogin.php" method="post" ">
              <ol><?php error_reporting(E_ALL ^ E_NOTICE);  
				if($_GET['msg']=="fail"){echo "<span class=\"error\">--- Incorrect Username or Password ---</span>";}
				if($_GET['msg']=="empty"){echo "<span class=\"error\">--- Please fill the required field ---</span>";}
				?>
                <li>
                  <label>Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" value="<?php echo $_SESSION['username']; ?>" id="name" name="username"  />(required)</label>
                </li>
                <li>
                  <label>Password &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                  <input type="password" id="password" value="<?php echo $_SESSION['password']; ?>" name="password"  />(required)</label>
                </li>
				<br>
                <li>
					<input type="submit" value="Login" class="button" />
					
                </li>
              </ol>
            </form>
          </div>
          </div>
		 <div class="sidebar">
          <div class="gadget">
            <div class="clr"></div>
           <img src="../../images/users.jpg" width="140" height="140" alt="" />
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="rf">&copy; Copyright <a href="">Career Services</a>.</p>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>