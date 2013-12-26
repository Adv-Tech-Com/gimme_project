<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />

<script type="text/javascript" src='/js/jquery-1.10.1.min.js'></script>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/homepage.css" />

<title><?php echo CHtml::encode('Gimme Project'); ?></title>
</head>

<body>
	
	<?php if( Yii::app ()->user->isGuest == false ) {?>
	<div class="upperclass">
		<a href="/project" class="popuphover projectpop left" data-title="<?php echo Yii::app()->user->company ?>">
			<img src="/images/logos/project.png" alt="" />
		</a>
	</div>
	<?php } ?>
	
	
	
	
	<?php echo $content; ?>

		
		
		
		
	<div class="bottommenu">
		<ul class="none footermenu">
			<li>
				<a href="/" class="popuphover popclassmapping top" data-title="Home">
					<img src="/images/logos/home.png" alt="" />
				</a>
			</li>
			
			<?php if( Yii::app ()->user->isGuest === true ) { ?>
			<li>
				<a href="/login" class="popuphover popclassmapping top" data-title="Login">
					<img src="/images/logos/login.png" alt="" />
				</a>
			</li>
			<li>
				<a href="/signup" class="popuphover popclassmapping top" data-title="Sign Up">
					<img src="/images/logos/signup.png" alt="" />
				</a>
			</li>
			<?php } ?>
			
			<li>
				<a href="/about" class="popuphover popclassmapping top" data-title="About Us">
					<img src="/images/logos/about.png" alt="" />
				</a>
			</li>
			<li>
				<a href="/faq" class="popuphover popclassmapping top" data-title="FAQ">
					<img src="/images/logos/faq.png" alt="" />
				</a>
			</li>
			<li>
				<a href="/contact" class="popuphover popclassmapping top" data-title="Contact Us">
					<img src="/images/logos/contact.png" alt="" />
				</a>
			</li>
			
			<?php if( Yii::app ()->user->isGuest === false ) { ?>
			
			<li>
				<a href="/logout" class="popuphover popclassmapping top" data-title="Log Out">
					<img src="/images/logos/close.png" alt="" width="25" />
				</a>
			</li>
			<?php } ?>
			
		</ul>
	</div>

<script type="text/javascript" src='/js/jquerylatest.js'></script>
		
</body>
</html>
