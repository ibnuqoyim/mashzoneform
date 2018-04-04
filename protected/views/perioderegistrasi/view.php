<?php
/* @var $this PerioderegistrasiController */
/* @var $model Perioderegistrasi */

$this->breadcrumbs=array(
	'Perioderegistrasis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Perioderegistrasi', 'url'=>array('index')),
	array('label'=>'Create Perioderegistrasi', 'url'=>array('create')),
	array('label'=>'Update Perioderegistrasi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Perioderegistrasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perioderegistrasi', 'url'=>array('admin')),
);
?>

<h1>View Perioderegistrasi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'startDate',
		'endDate',
		'status',
	),
)); ?>
