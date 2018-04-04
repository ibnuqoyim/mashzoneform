<?php
/* @var $this DoctaskController */
/* @var $model Doctask */

$this->breadcrumbs=array(
	'Doctasks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Doctask', 'url'=>array('index')),
	array('label'=>'Manage Doctask', 'url'=>array('admin')),
);
?>

<h1>Create Doctask</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>