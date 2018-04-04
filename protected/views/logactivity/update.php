<?php
/* @var $this LogactivityController */
/* @var $model Logactivity */

$this->breadcrumbs=array(
	'Logactivities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Logactivity', 'url'=>array('index')),
	array('label'=>'Create Logactivity', 'url'=>array('create')),
	array('label'=>'View Logactivity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Logactivity', 'url'=>array('admin')),
);
?>

<h1>Update Logactivity <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>