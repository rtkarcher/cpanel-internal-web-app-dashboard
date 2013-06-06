<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Create a New Website</title>
<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
</head>
<body>
<?php include('connect.php'); ?>
<?php /* $link_hover = 'onmouseover="this.style.opacity=1; this.filters.alpha.opacity=100" onmouseout="this.style.opacity=0.4; this.filters.alpha.opacity=80" style="opacity: 0.4"'; */ ?>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
   <script>
	$(document).ready(function() {
	  //select all the a tag with name equal to modal
	    $('a[name=modal]').click(function(e) {
	  //Cancel the link behavior
	        e.preventDefault();
	  //Get the A tag
	        var id = $(this).attr('href');
     
	  //Get the screen height and width
	        var maskHeight = $(document).height();
	        var maskWidth = $(window).width();
     
	  //Set height and width to mask to fill up the whole screen
	        $('#mask').css({'width':maskWidth,'height':maskHeight});
         
	  //transition effect     
	        $('#mask').fadeIn(1000);    
	        $('#mask').fadeTo("slow",0.8);  
     
	  //Get the window height and width
	        var winH = $(window).height();
	        var winW = $(window).width();
               
	  //Set the popup window to center
	        $(id).css('top',  winH/2-$(id).height()/2);
	        $(id).css('left', winW/2-$(id).width()/2);
     
	        //transition effect
	        $(id).fadeIn(2000);
	    });
	  //if close button is clicked
	    $('.window .close').click(function (e) {
	      //Cancel the link behavior
	        e.preventDefault();
 	        $('#mask, .window').hide();
	    });     
	  //if mask is clicked
	    $('#mask').click(function () {
	        $(this).hide();
	        $('.window').hide();
	    });          
	});
   </script>
<div id="header">
 <a href="http://www.ua.edu" id="nameplate"></a>
 <a href="index.php" id="logout" class="rounded">Log Out</a>
</div>	<!-- End header -->
<div id="wrapper">
  <div id='boxes'>
    <div id='dialog' class='window'>
      <a href='#' class='close'><img src="images/modal-window-close.gif" /></a>
      <img src="<?php $result = mysql_query("SELECT * FROM installatron_apps ORDER BY category");
	  				  while($row = mysql_fetch_array($result)) {
						  echo $row['screenshot_1'];
					   }?>" style="overflow:hidden;">
	  <br /><br />
    </div> <!-- End of #dialog -->
    <div id='mask'>
    </div> <!-- End of #mask -->
  </div> <!-- End of #boxes -->
  <div class="rounded_box">
   <div class="rounded_box_header">
    <?php $result = mysql_query("SELECT * FROM installatron_apps ORDER BY category");
		while($row = mysql_fetch_array($result)) {
		echo "<p>Installing ".$row['name']."</p>"; ?>
   	<div class="rounded_box_content">
     <div id="app_info_container">
     <?php
    	strip_tags($row['sitelink']);
		echo "<div id='app_icon_large_border'><img class='app_icon_large' src='".$row['icon_large']."' /></div>";
		echo "<div id='app_info'><h1 class='app_name'>".$row['name']."</h1><br /><br />";
		echo "<p id='app_infoblurb'>".$row['infoblurb']."</p><br /><br />";
/*		echo "<a href=' ".$row['sitelink']." ' target='_new'><img class='app_logo' src='".$row['logo']."'></a><br />";	*/
		echo "<a href='installatron.php'><img class='app_logo' src='".$row['logo']."'></a><br />";
		echo "</div><!-- End of app_info -->";
		echo "<div id='app_supportinfo'>
			    <a href=' ".$row['sitelink']." ' target='_new'><p>".$row['name']." Website</a><br />
				<a href=' ".$row['documentation']." ' target='_new'>".$row['name']." Documentation</a><br />
				<a href=' ".$row['support']." ' target='_new'>".$row['name']." Support</p></a>"; ?>
		
  <?php echo "</div><!-- End of app_supportinfo -->
			  <div id='app_screenshot_box'>
			    <div class='rounded_box'>
				  <div class='rounded_box_header'>
				    <p>Screenshots</p>
					<div class='rounded_box_content'>
					  <a href='#dialog' name='modal'><img src='".$row['screenshot_1']."' style='width:95%; padding:5px 5px 5px 10px;'></a>";
					echo "</div><!-- End of .rounded_box_content -->";
				  echo "</div><!-- End of .rounded_box_header -->";
			    echo "</div><!-- End of .rounded_box -->";
			  echo "</div><!-- End of #app_screenshot_box -->";
		} ?>
     </div>	<!-- End #app_info_container -->
   	</div>	<!-- End .rounded_box_content -->
   </div>	<!-- End .rounded_box_header -->
  </div>	<!-- End .rounded_box -->
</div>		<!-- End wrapper -->
</body>
</html>