<?php
/* @var $this DoctaskController */
/* @var $model Doctask */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctask-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idDoc'); ?>
		<?php echo $form->textField($model,'idDoc'); ?>
		<?php echo $form->error($model,'idDoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forinput4'); ?>
		<?php echo $form->textField($model,'forinput4'); ?>
		<?php echo $form->error($model,'forinput4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forinput5'); ?>
		<?php echo $form->textField($model,'forinput5',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'forinput5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outfrom'); ?>
		<?php echo $form->textField($model,'outfrom'); ?>
		<?php echo $form->error($model,'outfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?>
		<?php echo $form->textField($model,'file',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'file'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->