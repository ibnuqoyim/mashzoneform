<?php
/* @var $this MtoController */
/* @var $model Mto */

$this->breadcrumbs=array(
	'Mtos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mto', 'url'=>array('index')),
	array('label'=>'Manage Mto', 'url'=>array('admin')),
);
?>

<h1>Create Mto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>