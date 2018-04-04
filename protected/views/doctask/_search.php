<?php
/* @var $this DoctaskController */
/* @var $model Doctask */
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
		<?php echo $form->label($model,'idDoc'); ?>
		<?php echo $form->textField($model,'idDoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forinput4'); ?>
		<?php echo $form->textField($model,'forinput4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forinput5'); ?>
		<?php echo $form->textField($model,'forinput5',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outfrom'); ?>
		<?php echo $form->textField($model,'outfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file'); ?>
		<?php echo $form->textField($model,'file',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->