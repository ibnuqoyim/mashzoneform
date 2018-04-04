<?php
/* @var $this MtoController */
/* @var $model Mto */

$this->breadcrumbs=array(
	'Mtos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mto', 'url'=>array('index')),
	array('label'=>'Create Mto', 'url'=>array('create')),
	array('label'=>'Update Mto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mto', 'url'=>array('admin')),
);
?>

<h1>View Mto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nameMto',
	),
)); ?>
