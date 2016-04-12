<?php

	//THIS PAGE IS DESTINATION FOR ADMIN WHEN LOGGED IN AND TRYING TO ACCESS INDEX.PHP, AND WHEN CLICKING LINKS LEADING HERE

	//If no session exists, admin is sent to index.php
	session_start();
	if(!isset($_SESSION['ad_email'])){
		header("Location: index.php");
	}

?>
<!--Below actually not needed-->
	<!--if($_SERVER['REQUEST_METHOD']==='GET'){
			session_exists();
		}

	function session_exists(){
		
		$db = new MySQLi(
						'ap-cdbr-azure-east-c.cloudapp.net', //server or host address
						'b35e94884f471c', //username for connecting to database
						'90efdea3', //user's password 
						'befriendachildtestDB' //database being connected to
						);
		
		
		// SQL Query To Fetch Complete Information Of User
		//check if there was a connection error and respond accordingly
				if($db->connect_errno){
					die('Connection failed:'.connect_error);
				}
				else{
					session_start();// Starting Session
					// Establishing Connection with Server by passing server_name, user_id and password as a parameter
					// Selecting Database
					$user_check=$_SESSION['ad_email']; // Storing Session
					
					//select all values from database using the entered values as filter
					$query="SELECT *
					FROM `administrators`
					WHERE `ad_email` = '$user_check' LIMIT 1";
					$output=$db->query($query) or die("Selection Query Failed !!!");//query the database
				}
				$login_session=NULL;//initiate variable to hold session state
				
				//goo through the output from the sql query and initiate the login_session variable using returned email_
				while($row = $output->fetch_assoc()) {
					$login_session=$row["ad_email"];
					}
		if(isset($login_session)){//if a valid session exists?
			show_admin_home();
		}
		else{
			header("Location: index.php");
		}
	}
	
	function show_admin_home(){
		
		$htmlpage = <<< HTMLPAGE-->
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Administrator</title>
	<link rel="stylesheet" href="cssadminpage/screen.css" type="text/css" media="screen" title="default" />

	<link rel="stylesheet" media="all" type="text/css" href="cssadminpage/pro_dropline_ie.css" />

	<!--  jquery core -->
/*	<script src="jsadminpage/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

	<!--  styled select box script version 2 -->
	<script src="jsadminpage/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
			$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
		});
	</script>

	<!--  styled select box script version 3 -->
	<script src="jsadminpage/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
	</script>
		$(document).ready(function() {
			$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
		});
	</script>

	<!--  styled file upload script -->
	<script src="jsadminpage/jquery/jquery.filestyle.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$("input.file_1").filestyle({
				image: "images/forms/upload_file.gif",
				imageheight : 29,
				imagewidth : 78,
				width : 300
			});
		});
	</script>


	<!--  date picker script -->
	<link rel="stylesheet" href="cssadminpage/datePicker.css" type="text/css" />
	<script src="jsadminpage/jquery/date.js" type="text/javascript"></script>
	<script src="jsadminpage/jquery/jquery.datePicker.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8">
	$(function()
		{

// initialise the "Select date" link
			$('#date-pick')
					.datePicker(
							// associate the link with a date picker
							{
								createButton:false,
								startDate:'01/01/2005',
								endDate:'31/12/2020'
							}
					).bind(
					// when the link is clicked display the date picker
					'click',
					function()
					{
						updateSelects($(this).dpGetSelected()[0]);
						$(this).dpDisplay();
						return false;
					}
			).bind(
					// when a date is selected update the SELECTs
					'dateSelected',
					function(e, selectedDate, $td, state)
					{
						updateSelects(selectedDate);
					}
			).bind(
					'dpClosed',
					function(e, selected)
					{
						updateSelects(selected[0]);
					}
			);

			var updateSelects = function (selectedDate)
			{
				var selectedDate = new Date(selectedDate);
				$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
				$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
				$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
			}
// listen for when the selects are changed and update the picker
			$('#d, #m, #y')
					.bind(
							'change',
							function()
							{
								var d = new Date(
										$('#y').val(),
										$('#m').val()-1,
										$('#d').val()
								);
								$('#date-pick').dpSetSelected(d.asString());
							}
					);

// default the position of the selects to today
			var today = new Date();
			updateSelects(today.getTime());

// and update the datePicker to reflect it...
			$('#d').trigger('change');
		});
	</script>*/



</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">



 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="imagesadminpage/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="imagesadminpage/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>

		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="adminhome.php"><b>Home</b></a>

		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    

		
		<ul class="select"><li><a href="#nogo"><b>User Login Setup</b></a>

		<div class="select_sub">
			<ul class="sub">
				<li><a href="createlogin.php">Create User Login</a></li>
				<li><a href="delete-user.php">Delete User Login</a></li>
			</ul>
		</div>

		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#nogo"><b>Report</b></a>

		<div class="select_sub">
			<ul class="sub">
				<li><a href="#nogo">Full Report</a></li>
				<li><a href="#nogo">Survey Query</a></li>
				<li><a href="#nogo">Delete Report</a></li>
			 
			</ul>
		</div>

		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>

		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Administrator Home Page</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="imagesadminpage/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="imagesadminpage/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			<h2><span style="text-decoration: underline;"> Features: </span></h2>
			<h3><a href="createlogin.php">Create User Login</a></h3>
			<h3><a href="delete-user.php">Delete User Login</h3>
			<h3>Full Report</h3>
			<h3>Survey Query</h3>
			<h3>Delete Report</h3>

			
			</div>
			<!--  end table-content  -->
	
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
<!-- <div id="footer-pad">&nbsp;</div> -->
	<!--  start footer-left -->
	<div id="footer-left">
		Copyright 2016 Befriend A Child <a href="">http://www.befriendachild.org.uk/</a>. All rights reserved.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>
<!--HTMLPAGE;
		print $htmlpage;
	}-->
	
