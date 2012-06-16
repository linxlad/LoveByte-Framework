<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="description" content="Look around at the various posts people have created.">
	<meta name="keywords" content="posts, lovebyte">
	<?php echo HTML::style('laravel/css/invitestyle.css'); ?>
	<link rel="shortcut icon" href="images/favi.ico" type="image/x-icon">

	<title>LoveByte Invite Page</title>
</head>

<body class="inviteBody" onload="langReform();">
	<div class="Container">
		<div class="header">
			<div class="linesCode"><span class="numberLines"><!--48,264-->124</span> <br>Lines of code lovingly shared</div>
		</div>
		<div class="Content">
		
			<div class="inviteBox">
			<h1 class="requesty">Request an <span class="invity">invite</span></h1>
			<?php echo '<div id="Success">'. $validation. '</div>'; ?>
			<div class="separator"></div>
			
			<?php echo Form::open('invite', 'POST', array('class' => 'formy')); ?>
				<?php echo Form::label('username', 'Reserve a username:'); ?><br>
                <?php echo $errors->has( 'username' ) ? $errors->first( 'username', '<span class="error">:message</span>') : ''; ?>
                <?php echo Form::text('username', Input::old('username'), array('class' => 'inputUsername')); ?><br><br>
				<?php echo Form::label('email', 'Email Address:'); ?><br>
                <?php echo $errors->has( 'email' ) ? $errors->first( 'email', '<span class="error">:message</span>') : ''; ?>
                <?php echo Form::email('email', Input::old('email'), array('class' => 'inputEmail')); ?><br><br>
				<?php echo Form::label('language', 'Preferred programming language(s):'); ?><br>
                <?php echo $errors->has( 'language' ) ? $errors->first( 'language', '<span class="error">:message</span>') : ''; ?>
                <?php echo Form::text('language', 'e.g. C#, PHP, etc.. (Comma Separated)', array('class' => 'inputLanguage')); ?><br><br>
                <?php echo Form::hidden('tempKey', invite::createRandomKey(32)); ?>
                <?php if($validation != "Success, check your email") { ?>
				<?php echo Form::submit('Request', array('class' => 'submitBut')); ?>
                <?php } ?>
			<?php echo Form::close(); ?>
			
			<div class="icons">
				<ul>
					<a href="https://www.facebook.com/l0vebyte" target="_blank"><li class="faceyB"></li></a>
					<a href="https://twitter.com/l0vebyte" target="_blank"><li class="twitter"></li></a>
					<a href="https://github.com/linxlad/LoveByte.NET" target="_blank"><li class="github"></li></a>
				</ul>
			</div>
			
			</div>
		
		</div> <!-- end of Content -->

	</div> <!-- end of Container -->
	<div class="footer">
		<div class="footerText">
			<div class="footerLogo"></div>
			<p class="footerLinks">Contact  |  Privacy  |  FAQS  | Terms  |  Rules |  Twitter  | API  </p>
			<p class="copyright">Copyright &#169 2011 LoveByte LLC. &nbsp; The LoveByte Team</p>
		</div><!-- end footerText -->
	</div><!-- end footer -->
</body>
</html>