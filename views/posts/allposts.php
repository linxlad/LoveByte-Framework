<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="description" content="Look around at the various posts people have created.">
	<meta name="keywords" content="posts, lovebyte">
        <?php echo HTML::style('laravel/css/poststyle.css'); ?>
	<link rel="shortcut icon" href="images/favi.ico" type="image/x-icon">

	<title>Nathan's Post Page</title>
</head>

<body class="homeBody">
	<div class="Container">
		<div class="Buttons">
			<ul>
				<li class="settings"><a href="/user/settings">Settings</a></li>
				<li class="messages"><a href="/user/inbox">Messages</a></li>
				<li class="notifications"><a href="/user/notifications">Notifications</a></li>
			</ul>
		</div> <!-- end of Buttons -->
		
		<div class="Nav">
			<ul>
				<li class="posts"><a href="#">Posts</a>
					<ul class="nav1">
						<li class="firstNav"><a href="#">Example</a></li>
						<li class="navSpace"><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
						<li class="navSpace"><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
					</ul>
				</li>
				<li class="developers"><a href="#">Developers</a>
					<ul class="nav2">
						<li class="firstNav"><a href="#">Example</a></li>
						<li class="navSpace"><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
						<li class="navSpace"><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
					</ul>
				</li>
				<li class="categories"><a href="#">Categories</a>
					<ul class="nav3">
						<li class="firstNav"><a href="#">Example</a></li>
						<li class="navSpace"><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
						<li class="navSpace"><a href="#">Example</a></li>
						<li><a href="#">Example</a></li>
					</ul>
				</li>
			</ul>
		</div> <!-- end of Nav -->
		
		<div class="Welcome">
			<p>Hello <?php echo $username; ?></p>
		</div> <!-- end of Welcome -->
		
		<div class="Content">
			<div class="Post">
			
				<div class="photo">
                                        <?php echo HTML::image('laravel/img/profilepic.jpg', '', array('class' => 'piccy', 'width' => '160', 'height' => '140')); ?>					
				</div> <!-- end of photo -->
				
				<div class="text">
					<div class="textHeader"><p class="posted"><span class="Boldy">Sammy</span> posted <span class="Boldy">a question</span> 12 mins ago</p>
					<div class="hearts"><span class="numLove">10</span> <span class="loves">Loves</span></div>
					<div class="notify"><span class="numReply">4</span> <span class="replies">Replies</span></div>
					<div class="view"><a href="/post/view?Posting_to_a_Mysql_Database_from_a_form-x3g">View</a></div>
					</div>
					<h1><a href="#">Posting to a Mysql Database from a form?</a></h1>
					<p class="posty">Bacon ipsum dolor sit amet sirloin filet mignon pork chop, brisket corned beef strip steak 
					biltong rump meatloaf chuck. Chicken filet mignon rump, pork chop t-bone boudin fatback short 
					ribs jowl biltong chuck shoulder tenderloin. Tenderloin beef shank, ham hock sausage ribeye 
					biltong meatloaf t-bone brisket salami prosciutto pastrami. Sirloin fatback chicken, tri-tip 
					strip steak shoulder jowl. Boudin pork pork belly andouille beef ribs. Meatloaf beef ribs 
					hamburger pork chop shoulder, andouille turducken. Turducken sirloin kielbasa beef fatback 
					strip steak bresaola pork.
					</p>
				</div> <!-- end of text -->
				
			</div> <!-- end of Post -->
			
			<div class="Post">
			
				<div class="photo">
					<?php echo HTML::image('laravel/img/profilepic.jpg', '', array('class' => 'piccy', 'width' => '160', 'height' => '140')); ?>
				</div> <!-- end of photo -->
				
				<div class="text">
					<div class="textHeader"><p class="posted"><span class="Boldy">Sammy</span> posted <span class="Boldy">a question</span> 12 mins ago</p>
					<div class="hearts"><span class="numLove">2</span> <span class="loves">Loves</span></div>
					<div class="notify"><span class="numReply">6</span> <span class="replies">Replies</span></div>
					<div class="view"><a href="/post/view?What_features_of_code_editors_do_you_use-x3g">View</a></div>
					</div>
					<h1><a href="#">What features of code editors do you use?</a></h1>
					<p class="posty">Bacon ipsum dolor sit amet sirloin filet mignon pork chop, brisket corned beef strip steak 
					biltong rump meatloaf chuck. Chicken filet mignon rump, pork chop t-bone boudin fatback short 
					ribs jowl biltong chuck shoulder tenderloin. Tenderloin beef shank, ham hock sausage ribeye 
					biltong meatloaf t-bone brisket salami prosciutto pastrami. Sirloin fatback chicken, tri-tip 
					strip steak shoulder jowl. Boudin pork pork belly andouille beef ribs. Meatloaf beef ribs 
					hamburger pork chop shoulder, andouille turducken. Turducken sirloin kielbasa beef fatback 
					strip steak bresaola pork.
					</p>
				</div> <!-- end of text -->
				
			</div> <!-- end of Post -->
		</div> <!-- end of Content -->
		<div class="push"></div><!-- for sticky footer -->
	</div> <!-- end of Container -->
	<div class="footer">
		<div class="footerText">
			<div class="footerLogo"></div>
			<p class="footerLinks">Contact  |  Privacy  |  FAQS  | Terms  |  Rules |  Twitter  | API  </p>
			<p class="copyright">Copyright © 2011 LoveByte LLC. &nbsp; Designed by Nathan Daly and Sammy Marsden</p>
		</div><!-- end footerText -->
	</div><!-- end footer -->
</body>
</html>