
<!DOCTYPE html>
<html lang="en" id="section_home">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="chrome=IE8" />
	<meta name="viewport" content="width=1020, maximum-scale=1.0" />
	<!--[if lte IE 6]><meta http-equiv="refresh" content="0; url=/ie6" /><![endif]-->
	<title>ECE Club | NJIT</title>
	<meta name="description" content="Web design & web development agency based in Guildford, Surrey, UK." />
	<link href="../public/stylesheets/main.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="../public/stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="../public/stylesheets/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />	

<body>
	<div id="container">
		<header id="header">
			<div id="logo">
				<a href="/"><img alt="ECE Club of NJIT." src="../public/images/Club Logo_trans.png" /></a>
			</div>
<!-- 			<canvas id="logo_animation" width="180" height="180"></canvas>
 -->			<nav id="nav">
				<ul>
					<li id="nav_home"><a href="/">Home</a></li>
					<li id="nav_about"><a href="../projects">Projects</a></li>
					<li id="nav_projects"><a href="/events">Events</a></li>
					<li id="nav_events"><a href="/about">About Us</a></li>
					<li id="nav_contact"><a data-toggle="modal" href="../contact">Contact us</a></li>
				</ul>
			</nav>
		  </header>
  <?php echo $template['body']; ?>

  <footer>
  	Designed by the <a href="http://web.njit.edu/~hr28/">anmtrn</a>.
  </br>
   Electrical and Engineering Club
  </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../public/javascript/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="../public/javascript/bootstrap-popover.js"></script>

</html>
