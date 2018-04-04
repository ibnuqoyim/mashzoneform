<?php
/* @var $this Level6Controller */
/* @var $data Level6 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaTahap')); ?>:</b>
	<?php echo CHtml::encode($data->namaTahap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLvl5')); ?>:</b>
	<?php echo CHtml::encode($data->idLvl5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket')); ?>:</b>
	<?php echo CHtml::encode($data->ket); ?>
	<br />


</div>