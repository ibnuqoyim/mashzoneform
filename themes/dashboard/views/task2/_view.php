<?php
/* @var $this TaskController */
/* @var $data Task */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMto')); ?>:</b>
	<?php echo CHtml::encode($data->mto->nameMto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idItem')); ?>:</b>
	<?php echo CHtml::encode($data->idItem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bStart')); ?>:</b>
	<?php echo CHtml::encode($data->bStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bFinish')); ?>:</b>
	<?php echo CHtml::encode($data->bFinish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPic')); ?>:</b>
	<?php echo CHtml::encode($data->idPic); ?>
	<br />


</div>