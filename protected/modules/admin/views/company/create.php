<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array (
		'Users' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'List Company',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Manage Company',
				'url' => array (
						'manage' 
				) 
		) 
);
?>

<h1>Create Company</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>