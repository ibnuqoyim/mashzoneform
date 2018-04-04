<?php
/* @var $this TaskController */
/* @var $data Task */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLevel6')); ?>:</b>
	<?php echo CHtml::encode($data->idLevel6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPic6')); ?>:</b>
	<?php echo CHtml::encode($data->idPic6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLevel5')); ?>:</b>
	<?php echo CHtml::encode($data->idLevel5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPic5')); ?>:</b>
	<?php echo CHtml::encode($data->idPic5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idItem')); ?>:</b>
	<?php echo CHtml::encode($data->idItem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bStart')); ?>:</b>
	<?php echo CHtml::encode($data->bStart); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bFinish')); ?>:</b>
	<?php echo CHtml::encode($data->bFinish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('progres')); ?>:</b>
	<?php echo CHtml::encode($data->progres); ?>
	<br />

	*/ ?>

</div>