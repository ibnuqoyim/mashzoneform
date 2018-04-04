<?php
/* @var $this MtoController */
/* @var $model Mto */

$this->breadcrumbs=array(
	'Mtos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mto', 'url'=>array('index')),
	array('label'=>'Create Mto', 'url'=>array('create')),
	array('label'=>'View Mto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mto', 'url'=>array('admin')),
);
?>

<h1>Update Mto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>