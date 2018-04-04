<?php
/* @var $this DoctaskController */
/* @var $model Doctask */

$this->breadcrumbs=array(
	'Doctasks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Doctask', 'url'=>array('index')),
	array('label'=>'Create Doctask', 'url'=>array('create')),
	array('label'=>'Update Doctask', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Doctask', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doctask', 'url'=>array('admin')),
);
?>

<h1>View Doctask #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idDoc',
		'forinput4',
		'forinput5',
		'outfrom',
		'file',
	),
)); ?>
