<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Career Fair</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/arial.js"></script>
<script type="text/javascript" src="../js/cuf_run.js"></script>
<script type="text/javascript" language="javascript">
	function getdata(str)
	{
		var classval=document.getElementById("class").value;
		if (str=="")
		{
			document.getElementById("tabledata").innerHTML="";
			return;
		} 
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("tabledata").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("POST","frmViewstaff.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("branch="+str+"&class="+classval);
	}
</script>
</head>
<?php
error_reporting(E_ALL ^ E_NOTICE);
	require"session_set.php";
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
			$n=4;
			require"menu.php";
		?>
        <div class="clr"></div>
      </div>
      <div class="hbg">
	  
		<?php 
			
			require"marquee.php";
		?>
	  </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
         <div class="article"> 
			<span class="date">Today's date is <?php $date=date("jS  F Y");echo $date;?></span> <br><br>

			<label>Select Degree</label>
			<select id="class" name="class">
				<option value="Degree">Masters</option>
				<option value="Diploma">Bachelors</option>
			</select>
	
			<label>Select Branch</label>
			<select id="branch" name="branch" onchange="getdata(this.value)">
				<option>--Select Branch--</option>
				<?php
				require "../config.php";
				$tbl_name="tbl_teacher"; // Table name
				$branch=$_POST['branch'];

				$sql="SELECT * FROM branch";
				$result=mysql_query($sql);
				$count=mysql_num_rows($result);
				if($count >= 1)
				{
					while($rows=mysql_fetch_array($result))
					{
						echo "<option value=".$rows['abb'].">".$rows['branch']."</option>";
					}
				}
				?>
			</select>
			<div id="tabledata">
			</div>
         </div>
		</div>
        <div class="sidebar">
          <div class="gadget">
			<img src="../images/admin.jpg" width="140" height="140"/>
			</a>
            <div class="clr"></div>
			<ul class="sb_menu">
				 <li><a href="frmaddstaff.php">Add Faculty</a></li>
				 <li class="active"><a  href="frmViewstafflist.php">View Faculty</a></li> 
            </ul>
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