<?php
/* @var $this ProgresController */
/* @var $model Progres */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdTask'); ?>
		<?php echo $form->textField($model,'IdTask'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pStart'); ?>
		<?php echo $form->textField($model,'pStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pTahap1'); ?>
		<?php echo $form->textField($model,'pTahap1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pTahap2'); ?>
		<?php echo $form->textField($model,'pTahap2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pFinish'); ?>
		<?php echo $form->textField($model,'pFinish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->