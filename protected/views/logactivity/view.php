<?php
/* @var $this LogactivityController */
/* @var $model Logactivity */

$this->breadcrumbs=array(
	'Logactivities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Logactivity', 'url'=>array('index')),
	array('label'=>'Create Logactivity', 'url'=>array('create')),
	array('label'=>'Update Logactivity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Logactivity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Logactivity', 'url'=>array('admin')),
);
?>

<h1>View Logactivity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUser',
		'activity',
		'dateTime',
	),
)); ?>
