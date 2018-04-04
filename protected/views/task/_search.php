<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idLevel6'); ?>
		<?php echo $form->textField($model,'idLevel6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPic6'); ?>
		<?php echo $form->textField($model,'idPic6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idLevel5'); ?>
		<?php echo $form->textField($model,'idLevel5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPic5'); ?>
		<?php echo $form->textField($model,'idPic5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idItem'); ?>
		<?php echo $form->textField($model,'idItem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bStart'); ?>
		<?php echo $form->textField($model,'bStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bFinish'); ?>
		<?php echo $form->textField($model,'bFinish'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'progres'); ?>
		<?php echo $form->textField($model,'progres'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->