<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array (
		'Company' => array (
				'index' 
		),
		$model->company_id 
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
				'label' => 'Update Company',
				'url' => array (
						'update',
						'id' => $model->company_id 
				) 
		),
		array (
				'label' => 'Delete Company',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->company_id 
						),
						'confirm' => 'Are you sure you want to delete this Company?' 
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

<h1>View Company #<?php echo $model->company_id; ?></h1>

<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'attributes' => array (
				'company_id',
				'cname',
				'cemail',
				'cphone',
				'cmobile',
				'cwebsite',
				'caddress',
				'ccity',
				'ccountry',
				'cdesc',
				'active' 
		) 
) );
?>
