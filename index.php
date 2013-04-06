 <!-- change $s_username in line 7 -->
<?php 
	// //initialize session
	 session_start();
	
	// //check if the user has already logged in and then jump to the secured page
 	$s_username="Shubham";//$_SESSION['username'];
 	if (!isset($s_username)) {
	//header('Location: login.php');
	}
?>
<html>
<head>
	<title>
		Welcome Reader
	</title>
	<link rel="stylesheet" href="foundation/css/foundation.css">
	<script src="foundation/js/vendor/custom.modernizr.js"></script>
	<script src="custom_js/script_jq.js"></script>

</head>
<body>
	<!-- ===============================NAV BAR STARTS========================================================== -->
	<div class="fixed">
		<nav class="top-bar">
		  <ul class="title-area">
		    <!-- Title Area -->
		    <li class="name">
		      <h1><a href="#">Sharing Out Loud</a></h1>
		    </li>
		    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		  </ul>

		  <section class="top-bar-section">
		    <!-- Left Nav Section -->
		    <ul class="left">
		      <li class="divider"></li>
		      <li class="active"><a href="#">Add Books</a></li>
		      <li class="divider"></li>
		      <li class="has-dropdown"><a href="#">Notifications</a>

		        <ul class="dropdown">
		          <li><label>What Other's Want:</label></li>
		          <li ><a href="#">Rohan hit you for "Harry Potter"</a></li>
		          <li><a href="#">Dropdown Level 1b</a></li>
		          <li><a href="#">Dropdown Level 1c</a></li>
		          <li class="divider"></li>
		          <li><label>What You Want:</label></li>
		          <li><a href="#">Nikhil accepted your offer for "Deception Point"</a></li>
		          <li><a href="#">Dropdown Level 1e</a></li>
		          <li><a href="#">Dropdown Level 1f</a></li>
		          <li class="divider"></li>
		          <li><a href="#">See all &rarr;</a></li>
		        </ul>
		      </li>
		      <li class="divider"></li>
		    </ul>

		    <!-- Right Nav Section -->
		    <ul class="right">
		      <li class="divider hide-for-small"></li>
		      
		      <li class="divider"></li>
		      <li class="has-form">
		        <form>
		          <div class="row collapse">
		            <div class="small-8 columns">
		              <input type="text">
		            </div>
		            <div class="small-4 columns">
		              <a href="#" class="button">Search</a>
		            </div>
		          </div>
		        </form>
		      </li>
		      <li class="has-dropdown"><a href="#"><?=$s_username?></a>

		        <ul class="dropdown">
		          <li><label>Dropdown Level 1 Label</label></li>
		          <li class="has-dropdown"><a href="#" class="">Dropdown Level 1a</a>

		            <ul class="dropdown">
		              <li><a href="#">Dropdown Level 2a</a></li>
		              <li><a href="#">Dropdown Level 2b</a></li>
		              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

		                <ul class="dropdown">
		                  <li><a href="#">Dropdown Level 3a</a></li>
		                  <li><a href="#">Dropdown Level 3b</a></li>
		                  <li><a href="#">Dropdown Level 3c</a></li>
		                </ul>
		              </li>
		              <li><a href="#">Dropdown Level 2d</a></li>
		              <li><a href="#">Dropdown Level 2e</a></li>
		              <li><a href="#">Dropdown Level 2f</a></li>
		            </ul>
		          </li>
		          <li><a href="#">Dropdown Level 1b</a></li>
		          <li><a href="#">Dropdown Level 1c</a></li>
		          <li class="divider"></li>
		          <li><label>Dropdown Level 1 Label</label></li>
		          <li><a href="#">Dropdown Level 1d</a></li>
		          <li><a href="#">Dropdown Level 1e</a></li>
		          <li><a href="#">Dropdown Level 1f</a></li>
		          <li class="divider"></li>
		          <li><a href="#">See all &rarr;</a></li>
		        </ul>
		      </li>
		      <li class="divider show-for-small"></li>
		      
		    </ul>
		  </section>
		</nav>
	</div>
	<!-- ==========================NAV BAR ENDS======================================================================= -->
	<script>
	  document.write('<script src=foundation/js/vendor/'
	    + ('__proto__' in {} ? 'zepto' : 'jquery')
	    + '.js><\/script>');
		
	</script>
	<script src="foundation/js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>