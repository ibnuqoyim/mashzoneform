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
		<?php echo $form->label($model,'idMto'); ?>
		<?php echo $form->textField($model,'idMto'); ?>
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
		<?php echo $form->label($model,'idPic'); ?>
		<?php echo $form->textField($model,'idPic'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->