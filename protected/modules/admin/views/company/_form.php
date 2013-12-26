<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-index-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cname'); ?>
		<?php echo $form->textField($model,'cname'); ?>
		<?php echo $form->error($model,'cname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cemail'); ?>
		<?php echo $form->textField($model,'cemail'); ?>
		<?php echo $form->error($model,'cemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cphone'); ?>
		<?php echo $form->textField($model,'cphone'); ?>
		<?php echo $form->error($model,'cphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cmobile'); ?>
		<?php echo $form->textField($model,'cmobile'); ?>
		<?php echo $form->error($model,'cmobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regdate'); ?>
		<?php echo $form->textField($model,'regdate'); ?>
		<?php echo $form->error($model,'regdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clogo'); ?>
		<?php echo $form->textField($model,'clogo'); ?>
		<?php echo $form->error($model,'clogo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cwebsite'); ?>
		<?php echo $form->textField($model,'cwebsite'); ?>
		<?php echo $form->error($model,'cwebsite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ccity'); ?>
		<?php echo $form->textField($model,'ccity'); ?>
		<?php echo $form->error($model,'ccity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caddress'); ?>
		<?php echo $form->textField($model,'caddress'); ?>
		<?php echo $form->error($model,'caddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ccountry'); ?>
		<?php echo $form->textField($model,'ccountry'); ?>
		<?php echo $form->error($model,'ccountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cdesc'); ?>
		<?php echo $form->textField($model,'cdesc'); ?>
		<?php echo $form->error($model,'cdesc'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->