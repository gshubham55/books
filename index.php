<!-- change $s_username in line 7 -->
<?php 
	// //initialize session
	 session_start();
	
 	$s_username="Shubham";//$_SESSION['username'];
 	if (!isset($s_username)) {
	header('Location:login.php');
	}

?>

<html>
<head>
	<title>
		Welcome Reader
	</title>
	
	<link rel="stylesheet" href="foundation/css/foundation.css">
	<link rel="stylesheet" href="custom_css/custom.css">
	<script src="foundation/js/vendor/custom.modernizr.js"></script>
	<script src="custom_js/script_jq.js"></script>
	<script src="custom_js/script_hit.js"></script>
	<script src="custom_js/script_acc.js"></script>
	<script src="custom_js/script_func_call_onload.js"></script><!-- empty for now-->

</head>
<body>
	<!-- calling functions from js -->
	<script>
		hit("<?=$s_username?>");
		acc("<?=$s_username?>");
	</script>
	<!-- done calling functions from js -->
	<!-- ===============================NAV BAR STARTS========================================================== -->
	<div class="fixed">
		<nav class="top-bar">
		  <ul class="title-area">
		    <!-- Title Area -->
		    <li class="name">
		      <h1><a href="#"><span id="titleColor">Reading Out Loud</span></a></h1>
		    </li>
		    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		  </ul>

		  <section class="top-bar-section">
		    <!-- Left Nav Section -->
		    <ul class="left">
		      <li class="divider"></li>
		      <li ><a><div id="navAddBook" class="pointer ">Add Books</div></a></li>
		      <li class="divider"></li>
		      <li class="has-dropdown"><a href="#"><div id="navNoti">Notifications</div></a>
			    <ul class="dropdown">
		      		<div id="navNoti2">
			        	<div id="whatOthersWant">
				          <li><label>What Other's Want:</label></li>
				          <!-- <li ><a href="#">Rohan hit you for "Harry Potter"</a></li> -->
				      	</div>
			          <li class="divider"></li>
				      <div id="whatYouWant">
			          	  <li><label>What You Want:</label></li>
				      </div>
				      <li class="divider"></li>
			          <li><a href="#">See all &rarr;</a></li>
			    	</div>
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
		      <li class="divider"></li>
		      <li class="has-dropdown"><a href="#"><div id="navUser"><?=ucwords($s_username)?></div></a>

		        <ul class="dropdown">
		        	<div id="navUser2">
			          <li><label>Things for you:</label></li>
			          
			          <li><a href="#">Manage Books</a></li>
			          <li><a href="#">Manage Account</a></li>
			          <li class="divider"></li>
			          <li><label>Things for us:</label></li>
			          <li><a href="#">About</a></li>
			          <li><a href="#">Feedback</a></li>
			          
			          <li class="divider"></li>
			          <li><a href="#">Logout</a></li>
		        	</div>
		        </ul>
		      </li>
		      <li class="divider show-for-small"></li>
		      
		    </ul>
		  </section>
		</nav>
	</div>
	<!-- ==========================NAV BAR ENDS================================================================= -->
	<!-- ==========================ADD BOOKS DIV STARTS========================================================= -->
	<div id = "addBooksDiv" class="hiddenDiv">
		<form id = "addBooksForm">
			<fieldset>
				<legend class="whiteSmoke">Add Yet Another Book</legend>
				<div class="row">
					<div class="large-10 columns">
						<div class="row collapse">
		 					<div class="small-2 columns">
								<span class="prefix">Book</span>
		 					</div>		
							<div class="small-10 columns">
								<input type="text" placeholder="Eg. Deception Point">
		 					</div>
		 				</div>	
 					</div>
				</div>
				<div class="row">
					<div class="large-10 columns">
						<div class="row collapse">
		 					<div class="small-2 columns">
								<span class="prefix">Author</span>
		 					</div>		
							<div class="small-10 columns">
								<input type="text" placeholder="Eg. Dan Brown">
		 					</div>
		 				</div>	
 					</div>
				</div>
				<div class="row">
					<div class="large-10 columns">
						<div class="row collapse">
		 					<div class="small-2 columns">
								<span class="prefix">Publisher</span>
		 					</div>		
							<div class="small-10 columns">
								<input type="text" placeholder="Eg. Pocket Books">
		 					</div>
		 				</div>	
 					</div>
				</div>
				<p id="decp"> <abbr title="Click here, don't be afraid!"><span class="pointer decpColor">A little description won't hurt, will it?</span></abbr> </p>
				<div class="row hiddenDiv" id="descDiv">
					<div class="large-12 columns">
						<label>Description:</label>
						<div class="row collapse">		
							<div class="small-10 columns">
								<textarea placeholder="Eg.  The plot concerns a meteorite found within the Arctic Circle that may provide proof of extraterrestrial life, and attempts by dark forces to prevent this finding from becoming public. PS. Awesome Book."></textarea>	
		 					</div>
		 				</div>	
 					</div>
				</div>
			</fieldset>
		</form>	
	</div>
	<!-- ==========================ADD BOOKS DIV ENDS========================================================= -->
	<!-- ========================== EXPERIMENT WITH DIV STARTS  ========================================================= -->
	<div id="ticker" class="scrollBar hiddenDiv">
		<p>hey</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<p>lol</p>
	</div>




	<!-- ==========================EXPERIMENT WITH DIV ENDS========================================================= -->
	<script>
	  document.write('<script src=foundation/js/vendor/'
	    + ('__proto__' in {} ? 'zepto' : 'jquery')
	    + '.js><\/script>');
	</script>
	<script src="foundation/js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
	<script src="custom_js/custom.js"></script>