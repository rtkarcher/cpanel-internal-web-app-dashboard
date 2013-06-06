<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Create a New Website</title>
<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
<script type="text/javascript" src="curvycorners-2.0.4/curvycorners.js"></script>
</head>
<body>
<?php include('connect.php'); ?>
<?php $link_hover = 'onmouseover="this.style.opacity=1; this.filters.alpha.opacity=100" onmouseout="this.style.opacity=0.4; this.filters.alpha.opacity=80" style="opacity: 0.4"'; ?>
<div id="header">
 <a href="http://www.ua.edu" id="nameplate"></a>
 <a href="index.php" id="logout" class="rounded">Log Out</a>
</div>
<div id="wrapper">
 <div id="RB1" class="rounded_box">
  <div class="rounded_box_header">
    <p>First, are you a webmaster or a content manager?</p>
    <div class="rounded_box_content">
    <br />
	<form>
      <input type="radio" name="site_admin_type" value="webmaster" /> Webmaster<br />
      <input type="radio" name="site_admin_type" value="content_manager" /> Content Manager
    </form><br /><br />
   	</div>	<!-- End rounded_box_content -->
  </div>	<!-- End rounded_box_header -->
 </div>		<!-- End rounded_box -->
 <div id="RB2" class="rounded_box">
  <div class="rounded_box_header">
    <p>What kind of content management system would you like for your site?</p>
 	<div class="rounded_box_content">
      <div id="installatron_apps_box">
       <ul class="installatron_app_icon">
        <?php $result = mysql_query("SELECT * FROM Installatron_Apps_CMS ORDER BY category");
	  			 while($row = mysql_fetch_array($result)) {
				   strip_tags($row['sitelink'],'<br />');
				   echo "<li><a href=' ".$row['sitelink']." ' target='_new'>";
				   strip_tags($row['filepath'],'<br />');
				   echo "<img class='app_icon' src=' ".$row['filepath']." '>";
				   echo "<span class='app_name'>".$row['name']."</span><br />";
				   echo "<span class='app_cat'>".$row['category']."</span>";
				   echo "</a></li>";
				 }
		 ?>
       </ul>
     </div>		<!-- End installatron_apps_box -->
  	</div>		<!-- End RB2 -->
  </div>		<!-- End rounded_box_header -->
 </div>			<!-- End rounded_box_content -->
</div>			<!-- End wrapper -->




<!-- Within a "What is this?"/"What's the difference?" pop-up:

	"A webmaster is..."
    "A content manager is..."


	"Content Management Systems (CMS) are designed to manage dynamic content for websites.

	All CMS application have the ability to manage news or blogs and all include a templating system that allows you to define the appearance/style of the web pages it controls.
    The more complex systems can include a near endless list of additional features, including: categories; commenting; user logins; polls; statistics; file managers; FAQ 
    managers; and so on.

	Content Management Systems generally fit into the following loose categories: Blogs (also known as weblogs), CMSs, Portals (modular features that can be added into a standard
    three-column page layout), and Frameworks (do-it-yourself systems)."

-->

</div>


</body>
</html>