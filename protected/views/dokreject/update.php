<?php
/* @var $this DokrejectController */
/* @var $model Dokreject */

$this->breadcrumbs=array(
	'Dokrejects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dokreject', 'url'=>array('index')),
	array('label'=>'Create Dokreject', 'url'=>array('create')),
	array('label'=>'View Dokreject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dokreject', 'url'=>array('admin')),
);
?>

<h1>Update Dokreject <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>