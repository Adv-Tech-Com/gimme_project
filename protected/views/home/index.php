<?php
/* @var $this ProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array (
		'Projects' 
);

$this->menu = array (
		array (
				'label' => 'Create Project',
				'url' => array (
						'/project/create' 
				) 
		),
		array (
				'label' => 'Manage Project',
				'url' => array (
						'/project/manage' 
				) 
		) 
);
?>

<h1>Projects</h1>

<?php

$this->widget ( 'zii.widgets.CListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view' 
) );
?>
