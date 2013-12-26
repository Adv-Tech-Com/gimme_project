<?php 

$this->menu = array (
		array (
				'label' => 'Create Company',
				'url' => array (
						'create'
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
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>


<div>

<?php

$this->widget ( 'zii.widgets.CListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view' 
) );
?>


</div>