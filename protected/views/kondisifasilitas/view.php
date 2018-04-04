<?php
/* @var $this KondisifasilitasController */
/* @var $model Kondisifasilitas */

$this->breadcrumbs=array(
	'Kondisifasilitases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kondisifasilitas', 'url'=>array('index')),
	array('label'=>'Create Kondisifasilitas', 'url'=>array('create')),
	array('label'=>'Update Kondisifasilitas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kondisifasilitas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kondisifasilitas', 'url'=>array('admin')),
);
?>

<h1>View Kondisifasilitas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idFasilitas',
		'kondisi',
		'startDate',
		'endDate',
		'state',
	),
)); ?>
