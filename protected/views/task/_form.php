
<section>

<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idItem'); ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','value'=>$model->item->namaLvl4));?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'name','name'=>'name','value'=>$model->item->idBisnis));?>
		<?php echo $form->error($model,'idItem'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'idLevel5'); ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','value'=>$model->lvl5->namaLvl5));?>
		<?php echo $form->error($model,'idLevel5'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'idLevel6'); ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','value'=>$model->lvl6->namaLvl6));?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'id','name'=>'id','value'=>$model->lvl6->idBisnis));?>
		<?php echo $form->error($model,'idLevel6'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','id'=>'status','name'=>'status','value'=>$model->status));?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<div class="form-group">
	            <?php echo $form->labelEx($model,'attachment'); ?>
	            <?php echo $form->fileField($model,'attachment',array('class'=>'form-control')); ?>
	            <?php echo $form->error($model,'attachment'); ?>
		</div>
		<?php $link = 'mashzone.iclov.com/attachment/'.$model->attachment ?>
	<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'link','name'=>'link','value'=>$link));?>

	<div class="row">
		<?php echo $form->labelEx($model,'progres'); ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','id'=>'progres','name'=>'progres','value'=>$model->progres));?>
		<?php echo $form->error($model,'progres'); ?>
	</div>

	<div class="row buttons" onclick="update_value()">
		<?php echo CHtml::submitButton(!($model->isNewRecord) ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</section>
