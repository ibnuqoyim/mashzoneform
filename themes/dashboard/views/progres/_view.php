<?php
/* @var $this ProgresController */
/* @var $data Progres */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdTask')); ?>:</b>
	<?php echo CHtml::encode($data->IdTask); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pStart')); ?>:</b>
	<?php echo CHtml::encode($data->pStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pTahap1')); ?>:</b>
	<?php echo CHtml::encode($data->pTahap1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pTahap2')); ?>:</b>
	<?php echo CHtml::encode($data->pTahap2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pFinish')); ?>:</b>
	<?php echo CHtml::encode($data->pFinish); ?>
	<br />


</div>