<?php
/* @var $this ProgresController */
/* @var $model Progres */

$this->breadcrumbs=array(
	'Progres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Progres', 'url'=>array('index')),
	array('label'=>'Manage Progres', 'url'=>array('admin')),
);
?>

<h1>Create Progres</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>