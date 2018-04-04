<?php
/* @var $this DoctaskController */
/* @var $model Doctask */

$this->breadcrumbs=array(
	'Doctasks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doctask', 'url'=>array('index')),
	array('label'=>'Create Doctask', 'url'=>array('create')),
	array('label'=>'View Doctask', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Doctask', 'url'=>array('admin')),
);
?>

<h1>Update Doctask <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>