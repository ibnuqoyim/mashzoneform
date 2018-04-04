<?php
/* @var $this ItemsController */
/* @var $data Items */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaItem')); ?>:</b>
	<?php echo CHtml::encode($data->namaItem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMto')); ?>:</b>
	<?php echo CHtml::encode($data->idMto); ?>
	<br />


</div>