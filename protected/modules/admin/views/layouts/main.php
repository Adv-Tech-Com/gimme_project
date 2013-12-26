<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />

<!-- blueprint CSS framework -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"	media="print" />

<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
<![endif]-->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

<title><?php echo CHtml::encode(Yii::app()->user->company); ?></title>
</head>

<body>

	<div class="container" id="page">

		<div id="header">
			<div id="logo">
				<a href="/home/" class="none">Super Company : <?php echo CHtml::encode(Yii::app()->user->company); ?></a>
			</div>
		</div>
	</div>
	<!-- header -->

	<div id="mainmenu">
		
		<?php
		
		$this->widget ( 'zii.widgets.CMenu', array (
				'items' => array (
						array (
								'label' => 'Home',
								'url' => array ( '/home' ),
								'linkOptions' => array ( 'class' => 'homepage' ) 
						),
						array (
								'label' => 'Projects',
								'url' => array ( '/project' ) 
						),
						array (
								'label' => 'Users',
								'url' => array ( '/user' ) 
						),
						array (
								'label'	=> 'Admin',
								'url' => array ( '/admin' ),
								'visible' => Yii::app ()->user->isAdmin,
						),
						array (
								'label'	=> 'Company',
								'url' => array ( '/admin/company' ),
								'visible' => Yii::app ()->user->isAdmin,
						),
						array (
								'label' => 'Login',
								'url' => array ( '/index/login' ),
								'visible' => Yii::app ()->user->isGuest 
						),
						array (
								'label' => 'Logout (' . Yii::app ()->user->username . ')',
								'url' => array ( '/index/logout' ),
								'visible' => ! Yii::app ()->user->isGuest 
						) 
				),
				'itemCssClass' => 'home' 
		) );
		?>
		
	</div>
	<!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):
				$this->widget ( 'zii.widgets.CBreadcrumbs', array (
						'homeLink'	=> CHtml::link('Admin', array('/admin')),
						'links'		=> $this->breadcrumbs
				) );

		?>
		<!-- breadcrumbs -->
	<?php endif?>
	
	<?php echo $content; ?>
	
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> <a href="/" class="none">Gimme Project</a>.<br /> All Rights Reserved.<br />
	</div>
	<!-- footer -->

	</div>
	<!-- page -->

</body>
</html>
