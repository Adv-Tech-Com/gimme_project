
<div class="content-home wid450 minheight500">
<div class="centerwidth">

	<h1>Contact Us</h1>
	
	<?php if(Yii::app()->user->hasFlash('contact')): ?>
	
	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('contact'); ?>
	</div>
	
	<?php else: ?>
	
	<div class="form">
	
	<?php
		
		$form = $this->beginWidget ( 
					'CActiveForm',
					array (
						'id'						=> 'contact-form',
						'enableClientValidation' 	=> true,
						'clientOptions' 			=> array (
															'validateOnSubmit' => true 
														)
					)
				);
		?>
	
		<?php // echo $form->errorSummary($model); ?>
	
		<div class="row">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name', array('placeholder'=>'Your Full Name')); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->emailField($model,'email', array('placeholder'=>'Your Email Address')); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'subject'); ?>
			<?php echo $form->textField($model,'subject',array('maxlength'=>128, 'placeholder' => 'Subject or topic or main reason for Contact')); ?>
			<?php echo $form->error($model,'subject'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'body'); ?>
			<?php echo $form->textArea($model,'body', array('placeholder'=>'Message Body')); ?>
			<?php echo $form->error($model,'body'); ?>
		</div>
	
		<?php if(CCaptcha::checkRequirements()): ?>
		<div class="row borderaround wid400">
			<?php echo $form->labelEx($model,'verifyCode'); ?>
			<div class="captchaimage">
			<?php echo $form->textField($model,'verifyCode', array( 'class' => 'captchatext', 'placeholder'=> 'Case in-sensitive Captcha')); ?>
			<?php $this->widget('CCaptcha'); ?>
			<div class="clear"></div>
			</div>
			<?php echo $form->error($model,'verifyCode'); ?>
		</div>
		<?php endif; ?>
		<br>
		<div class="row buttons">
			<?php echo CHtml::submitButton('Submit'); ?>
		</div>
	
	<?php $this->endWidget(); ?>
	
	</div>
	<!-- form -->
	
	<?php endif; ?>

</div>
</div>