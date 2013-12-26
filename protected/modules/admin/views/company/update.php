<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array (
		'company' => array (
				'index' 
		),
		$model->user_id => array (
				'view',
				'id' => $model->company_id 
		),
		'Update' 
);

$this->menu = array (
		array (
				'label' => 'List Company',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create Company',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'View Company',
				'url' => array (
						'view',
						'id' => $model->company_id 
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

<h1>Update Company <?php echo $model->company_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>