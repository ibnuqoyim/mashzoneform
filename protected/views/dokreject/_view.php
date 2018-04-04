<?php
/* @var $this DokrejectController */
/* @var $data Dokreject */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDocTask')); ?>:</b>
	<?php echo CHtml::encode($data->idDocTask); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alasan')); ?>:</b>
	<?php echo CHtml::encode($data->alasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />


</div>