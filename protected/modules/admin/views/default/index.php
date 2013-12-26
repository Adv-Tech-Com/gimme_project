<?php
/* @var $this DefaultController */
?>
<h1>Welcome <b><?php echo Yii::app()->user->fullname ?></b> to the Admin Section</h1>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
	You may customize this page by editing
	<tt><?php echo __FILE__; ?></tt>
</p>