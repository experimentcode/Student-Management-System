<?php

	$rollno=$_POST['roll'];

	$pp=mysql_connect("localhost","root","");
	mysql_select_db("tpi",$pp);

	$d=mysql_query("select * from `tpi`.`student` where `roll_number`='$rollno'");
	$t=mysql_fetch_array($d);
	$roll=$t['roll_number'];
	$reg=$t['reg_number'];
	$name=$t['st_name'];
	$fname=$t['fa_name'];
	$mname=$t['mo_name'];
	$tech=$t['technology'];
	$session=$t['session'];
	$mobile=$t['contact_number'];
	$mail=$t['e_mail'];
	$birth=$t['birth'];
	$blood=$t['blood'];
	$village=$t['village'];
	$post=$t['post_office'];
	$police=$t['police_station'];
	$district=$t['district'];
	$ps=$t['p_status'];
	$image=$t['image'];
?>

<html>
	<head>
		<title>TPI</title>
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>
		<link type="" rel="shortcut icon" href="../images/screenshot_10.png"/>
		<style type="text/css">
			a
			{
				text-decoration:none;
				color:red;
			}
			a:hover
			{
				text-decoration:underline;
			}
		</style>
	</head>
	
	<body>
		
	
		<div id="main">
			
			<div id="main1">
				<div id="main11">
					<img width="80%" height="135px" src="../images/screenshot_101.png"/>
				</div>
				<div id="main12">
					<p id="p1">Thakurgaon Polytechnic Institute</p>
					<!--<input type="button" value="back" onclick="history.go(-1)"/>-->
					
					<p id="p3">
						Student Database For Thakurgaon Polytechnic Institute
					</p>
				</div>
				<div style="clear:both;">
				</div>
			</div>
			
			<div id="main2">
				<div id="main21" style="width:890px; ">
					<center>
						<div id="search" style="width:850px; margin:0px auto; ">
							<h1 style="margin-bottom:35px;">Student Information</h1>
							
								<div id="input1">
									
									<div id="int">
										<div id="in1">
											Roll Number:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $roll; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Registration Number:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $reg; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div id="int">
										<div id="in1">
											Technology:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $tech; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Session:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $session; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Student's Name:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $name; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Father's Name:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $fname; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Mother's Name:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $mname; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									
									<div id="int">
										<div id="in1">
											Village / Para:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $village; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Police Station:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $police; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Blood Group:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $blood; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div style="clear:both">
									</div>
								</div>
								<div id="input1" style="padding-left:50px; width:400">
									<div id="int" style="height:135px;">
										<img width="135px;" height="135px" src="upload/<?php echo $image;?>"  alt="There Are No-image"/>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Date Of Birth:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $birth; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div id="int">
										<div id="in1">
											Contact Number:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $mobile; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											E-mail:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $mail; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>								
									<div id="int">
										<div id="in1">
											Post Office:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $post; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											District:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $district; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="int">
										<div id="in1">
											Present Status:
										</div>
										<div id="in2" style="text-align:left;">
											<?php echo $ps; ?>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div style="clear:both">
									</div>
								</div>
								<div style="clear:both">
								</div>
							<a href="../index.php">Back</a> <input onclick="window.print();" type="button" value="Print"/>
						</div>
					</center>
				</div>
				<div style="clear:both;">
				</div>
			</div>
			
			<div id="main3">
				
			</div>
			
			<div id="main4">
				<p>Copyright by &copy; T.P.I, All rights reserved.</p>
			</div>
			<div style="clear:both">
			</div>
			
		</div>
		<div style="clear:both;">
		</div>
		

	</body>
</html>