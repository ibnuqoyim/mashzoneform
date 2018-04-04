<?php
/* @var $this MtoController */
/* @var $data Mto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameMto')); ?>:</b>
	<?php echo CHtml::encode($data->nameMto); ?>
	<br />


</div>