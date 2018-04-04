<?php
/* @var $this DoctaskController */
/* @var $data Doctask */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDoc')); ?>:</b>
	<?php echo CHtml::encode($data->idDoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forinput4')); ?>:</b>
	<?php echo CHtml::encode($data->forinput4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forinput5')); ?>:</b>
	<?php echo CHtml::encode($data->forinput5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outfrom')); ?>:</b>
	<?php echo CHtml::encode($data->outfrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />


</div>