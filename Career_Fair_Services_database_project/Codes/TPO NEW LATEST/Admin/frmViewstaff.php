<div id="tabledata">
<h2>
	<span style="font-weight:bold;text-decoration:underline;">
	<img src="../images/forum.jpg" style="padding:0;margin:0" height="20" width="20"/>&nbsp;Faculty list</span>
</h2>
	<table>	
		<?php
		require "../config.php";
		$tbl_name="tbl_teacher"; // Table name
		$branch=$_POST['branch'];
		$class=$_POST['class'];

		$sql="SELECT * FROM $tbl_name Where branch='".$branch."' and class='$class'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count >= 1)
		{
?>
		<thead>
			<tr>
				<th>Faculty</th>
				<th>Faculty Name</th>
				<th>Teach Branch/Department</th>
				<!--<th>Teach Subject/course</th>-->
				<th>Email ID</th>
			</tr>
		</thead>
<?php
			while($rows=mysql_fetch_array($result))
			{
			echo "<tr ><td rowspan=\"1\"><img src=../images/user.png width=\"40\" height=\"40\"/></td>
					<td >
						<b>".$rows['name']."</b>
					</td>
					<td >";
						$sql1="SELECT * FROM branch WHERE abb='".$rows['branch']."'";
						$result1=mysql_query($sql1);
						$count1=mysql_num_rows($result1);
						if($count1 >= 1)
						{
							if($rows1=mysql_fetch_array($result1))
							{
								echo "<b>".$rows1['branch']."</b>";
							}
						}
			echo "</td>
					<td >";
						$sql12="SELECT * FROM subject WHERE id='".$rows['subject']."'";
						$result12=mysql_query($sql12);
						$count12=mysql_num_rows($result12);
						if($count12 >= 1)
						{
							if($rows12=mysql_fetch_array($result12))
							{
								echo "<b>".$rows12['subject']."</b>";
							}
						}
			echo   "</td>
					<td >
						<b>".$rows['email']."</b>
					</td>
			</tr>";

			}
		}
		else {
			echo "There No teacher for this branch";
		}

		?>
	</table>
<div class="clr"></div>
</div>