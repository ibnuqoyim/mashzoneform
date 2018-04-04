<?php
/* @var $this KondisifasilitasController */
/* @var $model Kondisifasilitas */

$this->breadcrumbs=array(
	'Kondisifasilitases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kondisifasilitas', 'url'=>array('index')),
	array('label'=>'Create Kondisifasilitas', 'url'=>array('create')),
	array('label'=>'View Kondisifasilitas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kondisifasilitas', 'url'=>array('admin')),
);
?>

<h1>Update Kondisifasilitas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>