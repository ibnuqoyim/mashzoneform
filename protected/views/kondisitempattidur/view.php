<?php
/* @var $this KondisitempattidurController */
/* @var $model Kondisitempattidur */

$this->breadcrumbs=array(
	'Kondisitempattidurs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kondisitempattidur', 'url'=>array('index')),
	array('label'=>'Create Kondisitempattidur', 'url'=>array('create')),
	array('label'=>'Update Kondisitempattidur', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kondisitempattidur', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kondisitempattidur', 'url'=>array('admin')),
);
?>

<h1>View Kondisitempattidur #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idTempatTidur',
		'kondisi',
		'startDate',
		'endDate',
		'state',
	),
)); ?>
